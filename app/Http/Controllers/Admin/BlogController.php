<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Services\BlogCategoryService;
use App\Services\BlogService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private BlogService $blogService;
    private BlogCategoryService $blogCategoryService;

    public function __construct(BlogService $blogService, BlogCategoryService $blogCategoryService)
    {
        $this->blogService = $blogService;
        $this->blogCategoryService = $blogCategoryService;
    }

    public function index(): Renderable
    {
        $blogs = $this->blogService->getBlogsWithPaginator();

        return view("admin.blog.index", [
            "blogs" => $blogs,
            'current_page' => $blogs->currentPage(),
            'per_page' => $blogs->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $blog = new Blog();
        else
            $blog = $this->blogService->getBlog($id);
        $categories = $this->blogCategoryService->getCategories();

        return view("admin.blog.form", [
            "blog" => $blog,
            "categories" => $categories,
        ]);
    }

    public function store(BlogRequest $request): RedirectResponse
    {
        $this->blogService->storeBlog($request);

        return redirect()->route("admin.blog.index")
                        ->with("success", "Blog crée avec succès !");
    }

    public function upload_image_cke(Request $request): \Illuminate\Http\JsonResponse
    {
        $upload_dir = 'ckeditor/' . date("Y");

        if ($request->hasFile('upload')) {
            $url = 'storage/' . \Storage::disk('public')->putFile($upload_dir, $request->file("upload"));
        }

        return response()->json(['url' => url($url ?? '')]);
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        try {
            $blog->delete();
        } catch (Exception $exception) {
            return redirect()->route("admin.blog.index")
                ->with("danger", "Une erreur est survenue lors de la suppression du blog. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.blog.index")
                        ->with("success", "Blog supprimé avec succès !");
    }
}
