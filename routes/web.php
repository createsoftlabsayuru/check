<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/admin-main', function () {
    return view('admin.layouts.main');
});
 Route::get('/admin-add-blog',function(){
    return view('admin.layouts.add-blog');
 });
 Route::get('/admin-add-event',function(){
    return view('admin.layouts.add-event');
 });
 Route::get('/admin-add-job',function(){
    return view('admin.layouts.add-job');
 });
 Route::get('/admin-add-post',function(){
    return view('admin.layouts.add-post');
 });
 Route::get('/admin-add-product',function(){
    return view('admin.layouts.add-product');
 });
 Route::get('/admin-adDetails',function(){
    return view('admin.layouts.adDetails');
 });
 Route::get('/admin-addnewlisting',function(){
    return view('admin.layouts.addnewlisting');
 })->name('admin.addnewlisting');

 Route::get('/admin-all-ads-category',function(){
    return view('admin.layouts.all-ads-category');
 });
 Route::get('/admin-all-ads',function(){
    return view('admin.layouts.all-ads');
 });
 Route::get('/admin-allAppliedJob',function(){
    return view('admin.layouts.allAppliedJob');
 });
 Route::get('/admin-allProduct',function(){
    return view('admin.layouts.allProduct');
 });
//  Route::get('/admin-binBlog',function(){
//     return view('admin.layouts.binBlog');
//  });
 Route::get('/admin-binEvent',function(){
    return view('admin.layouts.binEvent');
 });
 Route::get('/admin-blogPost',function(){
    return view('admin.layouts.blogPost');
 });
 Route::get('/admin-dashboard',function(){
    return view('admin.layouts.dashboard');
 })->name('admin.dashboard');

 Route::get('/admin-draftBlog',function(){
    return view('admin.layouts.draftBlog');
 });
 Route::get('/admin-draftEvent',function(){
    return view('admin.layouts.draftEvent');
 });
 Route::get('/admin-event',function(){
    return view('admin.layouts.event');
 });
 Route::get('/admin-jobIndetails',function(){
    return view('admin.layouts.jobIndetails');
 });
 Route::get('/admin-jobs',function(){
    return view('admin.layouts.jobs');
 });
 Route::get('/admin-listingDetails',function(){
    return view('admin.layouts.listingDetails');
 });
 Route::get('/admin-listingInDetails',function(){
    return view('admin.layouts.listingInDetails');
 });
 Route::get('/admin-myServiceBooking',function(){
    return view('admin.layouts.myServiceBooking');
 });
 Route::get('/admin-productIndetails',function(){
    return view('admin.layouts.productIndetails');
 });
 Route::get('/admin-profile-setting',function(){
    return view('admin.layouts.profile-setting');
 });
 Route::get('/admin-promotion',function(){
    return view('admin.layouts.promotion');
 });
 Route::get('/admin-reviews',function(){
    return view('admin.layouts.reviews');
 });
 Route::get('/admin-tenders',function(){
    return view('admin.layouts.tenders');
 });
 Route::get('/admin-user-jobs',function(){
    return view('admin.layouts.user-jobs');
 });
 Route::get('/admin-test',function(){
    return view('admin.layouts.test');
 });
 Route::get('/admin-user-profile',function(){
    return view('admin.layouts.user-profile');
 });
 Route::get('/load-footer', function () {
    return view('admin.partials.footer');
});
Route::get('/load-navbar', function () {
    return view('admin.partials.navbar');
});
Route::get('/load-sidebar', function () {
    return view('admin.partials.sidebar');
});
Route::get('/load-login-modal', function () {
    return view('admin.partials.login-modal');
});





 
 Route::get('/admin-blogPost', [BlogController::class, 'showPosts'])->name('blog.index');
Route::get('/admin-draftBlog', [BlogController::class, 'showDrafts'])->name('blog.drafts');

 
 // ---------- User Layout Views ----------
 Route::view('/about', 'user.layouts.about')->name('user.about');
 Route::view('/add-business', 'user.layouts.add-business')->name('user.addBusiness');
 Route::view('/add-business3', 'user.layouts.add-business3')->name('user.addBusiness3');
 Route::view('/ads-category-main', 'user.layouts.ads-category-main')->name('user.adsCategory');
 Route::view('/advertising', 'user.layouts.advertising')->name('user.advertising');
 Route::view('/apply', 'user.layouts.apply')->name('user.apply');
 Route::view('/billing', 'user.layouts.billing')->name('user.billing');
 Route::view('/blog-details', 'user.layouts.blog-details')->name('user.blogDetails');
 Route::view('/blog', 'user.layouts.blog')->name('user.blog');
 Route::view('/booking', 'user.layouts.booking')->name('user.booking');
 Route::view('/careers', 'user.layouts.careers')->name('user.careers');
 Route::view('/categories-resturant', 'user.layouts.categories-resturant')->name('user.categoriesRestuarant');
 Route::view('/company-details', 'user.layouts.company-details')->name('user.companyDetails');
 Route::view('/contact', 'user.layouts.contact')->name('user.contact');
 Route::view('/event-indetails', 'user.layouts.event-indetails')->name('user.eventIndetails');
 Route::view('/events', 'user.layouts.events')->name('user.events');
 Route::view('/hotel', 'user.layouts.hotel')->name('user.hotel');
 Route::view('/invest-add', 'user.layouts.invest-add')->name('user.investAdd');
 Route::view('/invest', 'user.layouts.invest')->name('user.invest');
 Route::view('/job-application', 'user.layouts.job-application')->name('user.jobApplication');
 Route::view('/job-apply', 'user.layouts.job-apply')->name('user.jobApply');
 Route::view('/job-detail', 'user.layouts.job-detail')->name('user.jobDetail');
 Route::view('/job', 'user.layouts.job')->name('user.job');
 Route::view('/main', 'user.layouts.main')->name('user.main');
 Route::view('/payment-verify', 'user.layouts.payment-verify')->name('user.paymentVerify');
 Route::view('/policy', 'user.layouts.policy')->name('user.policy');
 Route::view('/popular-categories', 'user.layouts.popular-categories')->name('user.popularCategories');
 Route::view('/product-details', 'user.layouts.product-details')->name('user.productDetails');
 Route::view('/products', 'user.layouts.products')->name('user.products');
 Route::view('/promotion', 'user.layouts.promotion')->name('user.promotion');
 Route::view('/sale-add', 'user.layouts.sale-add')->name('user.saleAdd');
 Route::view('/sale', 'user.layouts.sale')->name('user.sale');
 Route::view('/service', 'user.layouts.service')->name('user.service');
 Route::view('/tender-add', 'user.layouts.tender-add')->name('user.tenderAdd');
 Route::view('/tender', 'user.layouts.tender')->name('user.tender');
 Route::view('/terms', 'user.layouts.terms')->name('user.terms');
 // ---------- Admin Layout Views ----------
//  Route::view('/admin/add-blog', 'admin.add-blog')->name('admin.addBlog');
//  Route::view('/admin/ad-details', 'admin.adDetails')->name('admin.adDetails');
//  Route::view('/admin/add-event', 'admin.add-event')->name('admin.addEvent');
 

Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');

Route::post('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
Route::post('/blog/restore/{id}', [BlogController::class, 'restore'])->name('blog.restore');
Route::get('/admin-binBlog', [BlogController::class, 'showBin'])->name('blog.bin');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
