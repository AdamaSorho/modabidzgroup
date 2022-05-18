<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use App\Services\VideoCategoryService;
use App\Services\VideoService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    private VideoService $videoService;
    private VideoCategoryService $videoCategoryService;

    public function __construct(VideoService $videoService, VideoCategoryService $videoCategoryService)
    {
        $this->videoService = $videoService;
        $this->videoCategoryService = $videoCategoryService;
    }

    public function index(): Renderable
    {
        $videos = $this->videoService->getVideosWithPaginator();

        return view("admin.video.index", [
            "videos" => $videos,
            'current_page' => $videos->currentPage(),
            'per_page' => $videos->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $video = new Video();
        else
            $video = $this->videoService->getVideo($id);
        $categories = $this->videoCategoryService->getCategories();

        return view("admin.video.form", [
            "video" => $video,
            "categories" => $categories,
        ]);
    }

    public function store(VideoRequest $request): RedirectResponse
    {
        $this->videoService->storeVideo($request);

        return redirect()->route("admin.video.index")
                        ->with("success", "Vidéo enregistrée avec succès !");
    }

    public function destroy(Video $video): RedirectResponse
    {
        try {
            $video->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.video.index")
                ->with("danger", "Une erreur est survenue lors de la suppression de la vidéo. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.video.index")
                        ->with("success", "Vidéo supprimée avec succès !");
    }
}
