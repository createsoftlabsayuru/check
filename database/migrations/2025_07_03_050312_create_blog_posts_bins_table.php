<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_posts_bins', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->nullable();
            $table->text('content')->nullable();
            $table->string('tags')->nullable();
            $table->enum('status', ['draft', 'post'])->default('draft');
            $table->timestamp('deleted_at')->nullable();
            $table->foreignId('image_id')->nullable()->constrained('images')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts_bins');
    }
};
