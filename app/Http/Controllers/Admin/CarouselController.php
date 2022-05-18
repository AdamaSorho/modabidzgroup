<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use App\Services\CarouselService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    private CarouselService $carouselService;

    public function __construct(CarouselService $carouselService)
    {
        $this->carouselService = $carouselService;
    }

    public function index(): Renderable
    {
        $carousels = $this->carouselService->getCarouselsWithPaginator();

        return view("admin.carousel.index", [
            "carousels" => $carousels,
            'current_page' => $carousels->currentPage(),
            'per_page' => $carousels->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $carousel = new Carousel();
        else
            $carousel = $this->carouselService->getCarousel($id);

        return view("admin.carousel.form", [
            "carousel" => $carousel,
        ]);
    }

    public function store(CarouselRequest $request): RedirectResponse
    {
        $this->carouselService->storeCarousel($request);

        return redirect()->route("admin.carousel.index")
                        ->with("success", "Slide enregistré avec succès !");
    }

    public function destroy(Carousel $carousel): RedirectResponse
    {
        // Suppression de l'image
        if ($carousel->image)
        {
            try {
                Storage::delete($carousel->image);
            } catch (\Exception $exception) {

            }
        }

        // Suppression de la conférence ou du séminaire
        try {
            $carousel->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.carousel.index")
                ->with("danger", "Une erreur est survenue lors de la suppression du slide. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.carousel.index")
            ->with("status", "Slide supprimé avec succès !");
    }
}
