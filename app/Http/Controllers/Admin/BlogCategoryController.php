<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryBlogRequest;
use App\Models\BlogCategory;
use App\Services\BlogCategoryService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    private BlogCategoryService $blogCategoryService;

    public function __construct(BlogCategoryService $blogCategoryService)
    {
        $this->blogCategoryService = $blogCategoryService;
    }

    public function index(): Renderable
    {
        $categories = $this->blogCategoryService->getCategoriesWithPaginator();

        return view("admin.blog.category.index", [
            "categories" => $categories,
            'current_page' => $categories->currentPage(),
            'per_page' => $categories->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $category = new BlogCategory();
        else
            $category = $this->blogCategoryService->getCategory($id);

        return view("admin.blog.category.form", [
            "category" => $category,
        ]);
    }

    public function store(CategoryBlogRequest $request): RedirectResponse
    {
        $this->blogCategoryService->storeCategory($request);

        return redirect()->route("admin.blog.category.index")
                        ->with("success", "Catégorie enregistrée avec succès !");
    }

    public function destroy(BlogCategory $category): RedirectResponse
    {
        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.blog.category.index")
                ->with("danger", "Une erreur est survenue lors de la suppression de la catégorie. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.blog.category.index")
                        ->with("success", "Catégorie supprimée avec succès !");
    }
}
