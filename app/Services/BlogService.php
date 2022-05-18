<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogService
{
    public function getBlogsWithPaginator($type = null, $number = 20)
    {
        if (is_null($type))
            $blogs = Blog::latest()->paginate($number);
        else
            $blogs = Blog::where("type", $type)->latest()->paginate($number);

        return $blogs;
    }

    public function getRecentBlogs($type, $number = 5)
    {
        return Blog::where("type", $type)->latest()->take($number)->get();
    }

    public function getBlogsByCategory($type, $category_id, $number = 5)
    {
        return Blog::where("blog_category_id", $category_id)
            ->where("type", $type)
            ->latest()->take($number)->get();
    }

    public function getBlog($id)
    {
        return Blog::find($id);
    }

    public function storeBlog($data): void
    {
        $upload_dir = 'blogs/'.date('Y');
        if ($data["id"])
            $blog = $this->getBlog($data["id"]);
        else
            $blog = new Blog();
        $blog
            ->setTranslation("title", "fr", $data["title_fr"])
            ->setTranslation("title", "en", $data["title_en"])
            ->setTranslation("content", "fr", $data["content_fr"])
            ->setTranslation("content", "en", $data["content_en"]);
        $blog->blog_category_id = $data["blog_category_id"];
        $blog->image = ($data["image"]) ? 'storage/' . \Storage::disk('public')->putFile($upload_dir, $data["image"]) : (($blog->image) ?: '');
        $blog->user_id = Auth::id();
        $blog->type = $data["type"];

        $blog->save();
    }
}
