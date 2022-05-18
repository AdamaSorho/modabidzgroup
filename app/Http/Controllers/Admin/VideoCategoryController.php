<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoCategoryRequest;
use App\Models\VideoCategory;
use App\Services\VideoCategoryService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VideoCategoryController extends Controller
{
    private VideoCategoryService $videoCategoryService;

    public function __construct(VideoCategoryService $videoCategoryService)
    {
        $this->videoCategoryService = $videoCategoryService;
    }

    public function index(): Renderable
    {
        $categories = $this->videoCategoryService->getCategoriesWithPaginator();

        return view("admin.video.category.index", [
            "categories" => $categories,
            'current_page' => $categories->currentPage(),
            'per_page' => $categories->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $category = new VideoCategory();
        else
            $category = $this->videoCategoryService->getCategory($id);

        return view("admin.video.category.form", [
            "category" => $category,
        ]);
    }

    public function store(VideoCategoryRequest $request): RedirectResponse
    {
        $this->videoCategoryService->storeCategory($request);

        return redirect()->route("admin.video.category.index")
                        ->with("success", "Catégorie enregistrée avec succès !");
    }

    public function destroy(VideoCategory $category): RedirectResponse
    {
        if (sizeof($category->videos) != 0)
            return redirect()->route("admin.video.category.index")
                ->with("danger", "Nous ne pouvons pas supprimer une catégorie avec des vidéos. Veuillez supprimer ces catégories d'aboord !");

        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.video.category.index")
                ->with("danger", "Une erreur est survenue lors de la suppression de la catégorie. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.video.category.index")
                        ->with("success", "Catégorie supprimée avec succès !");
    }
}
