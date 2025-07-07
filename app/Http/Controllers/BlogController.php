<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Images;
use App\Models\BlogPosts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BlogPostsBins;
use App\Models\BlogPostDrafts;

class BlogController extends Controller
{
    public function create()
    {
        return view('add-blog');
    }

    public function showPosts()
    {
        $posts = BlogPosts::with('image')->latest()->get(); // eager-load image
        return view('admin.layouts.blogPost', compact('posts'));
    }

    public function showDrafts()
    {
        $drafts = BlogPostDrafts::with('image')->latest()->get(); // eager-load image
        return view('admin.layouts.draftBlog', compact('drafts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'category'  => 'nullable|string|max:255',
            'content'   => 'nullable|string',
            'tags'      => 'nullable|string',
            'status'    => 'required|in:post,draft',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        // 1. Handle Image Upload
        $image = null;
        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);

            $image = Images::create(['file_path' => 'images/' . $filename]);
        }

        // 2. Prepare Data
        $data = [
            'title'      => $request->title,
            'category'   => $request->category,
            'content'    => $request->content,
            'tags'       => $request->tags,
            'status'     => $request->status,
            'image_id'   => $image?->id,
        ];

        // 3. Save in Correct Table
        if ($request->status === 'post') {
            $data['published_at'] = Carbon::now();
            BlogPosts::create($data);
        } else {
            $data['drafted_at'] = Carbon::now(); // ✅ Add this line
            BlogPostDrafts::create($data);
        }

        return redirect()->back()->with('success', 'Blog saved successfully!');
    }

    public function edit($id)
    {
        $post = BlogPosts::find($id);
        $draft = BlogPostDrafts::find($id);

        if (!$post && !$draft) {
            return back()->with('error', 'Post or Draft not found.');
        }

        $item = $post ?? $draft;
        $isDraft = $draft ? true : false;

        return view('admin.layouts.add-blog', [
            'blog' => $item,
            'isDraft' => $isDraft
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'category'  => 'nullable|string|max:255',
            'content'   => 'nullable|string',
            'tags'      => 'nullable|string',
            'status'    => 'required|in:post,draft',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $post = BlogPosts::find($id);
        $draft = BlogPostDrafts::find($id);

        if (!$post && !$draft) {
            return back()->with('error', 'Post or Draft not found.');
        }

        $item = $post ?? $draft;

        // Update image if uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $image = Images::create(['file_path' => 'images/' . $filename]);
            $item->image_id = $image->id;
        }

        // Update fields
        $item->title    = $request->title;
        $item->category = $request->category;
        $item->content  = $request->content;
        $item->tags     = $request->tags;
        $item->status   = $request->status;

        if ($request->status === 'post') {
            $item->published_at = Carbon::now();
        } else {
            $item->drafted_at = Carbon::now();
        }

        $item->save();

        return redirect()->route($request->status === 'post' ? 'blog.index' : 'blog.drafts')->with('success', 'Blog updated successfully.');
    }

    public function showBin()
    {
        $binPosts = BlogPostsBins::with('image')->latest()->get();
        return view('admin.layouts.binBlog', compact('binPosts'));
    }


    public function delete($id)
    {
        $post = BlogPosts::with('image')->find($id);
        $draft = BlogPostDrafts::with('image')->find($id);

        if (!$post && !$draft) {
            return back()->with('error', 'Post or Draft not found.');
        }

        $item = $post ?? $draft;
        // Determine status explicitly
        $status = $post ? 'post' : 'draft';

        // Move to bin
        BlogPostsBins::create([
            'title'      => $item->title,
            'category'   => $item->category,
            'content'    => $item->content,
            'tags'       => $item->tags,
            'status'     => $status,
            'deleted_at' => now() ,                   // Carbon::now()
            'image_id'   => $item->image_id,
        ]);

        $item->delete();

        return back()->with('success', ucfirst($status).' moved to bin successfully!');
    }

    public function restore($id)
    {
        $bin = BlogPostsBins::find($id);
        if (!$bin) {
            return back()->with('error', 'Bin entry not found.');
        }

        $restoreData = [
            'title'     => $bin->title,
            'category'  => $bin->category,
            'content'   => $bin->content,
            'tags'      => $bin->tags,
            'status'    => $bin->status,
            'image_id'  => $bin->image_id,
        ];

        if ($bin->status === 'post') {
            $restoreData['published_at'] = Carbon::now();
            BlogPosts::create($restoreData);
        } else {
            $restoreData['drafted_at'] = Carbon::now();
            BlogPostDrafts::create($restoreData);
        }

        $bin->delete();

        return back()->with('success', 'Blog restored successfully!');
    }
}
