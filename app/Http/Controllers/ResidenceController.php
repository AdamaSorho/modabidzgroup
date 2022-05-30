<?php

namespace App\Http\Controllers;

use App\Services\CarouselService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    private CarouselService $carouselService;

    public function __construct(CarouselService $carouselService)
    {
        $this->carouselService = $carouselService;
    }

    public function index(): Renderable
    {
        $carousels = $this->carouselService->getCarouselsResidence();

        return view("residence.welcome", [
            "carousels" => $carousels,
        ]);
    }

    public function room_detail(): Renderable
    {
        return view("residence.room-detail");
    }
}
