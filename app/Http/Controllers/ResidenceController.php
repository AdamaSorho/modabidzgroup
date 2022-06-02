<?php

namespace App\Http\Controllers;

use App\Services\CarouselService;
use App\Services\RoomService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    private CarouselService $carouselService;
    private RoomService $roomService;

    public function __construct(
        CarouselService $carouselService,
        RoomService $roomService
    )
    {
        $this->carouselService = $carouselService;
        $this->roomService = $roomService;
    }

    public function index(): Renderable
    {
        $carousels = $this->carouselService->getCarouselsResidence();
        $rooms = $this->roomService->getRoomsWithPaginator(6);

        return view("residence.welcome", [
            "carousels" => $carousels,
            "rooms" => $rooms,
        ]);
    }

    public function room_detail($id): Renderable
    {
        $room = $this->roomService->getRoom($id);

        return view("residence.room-detail", [
            "room" => $room,
        ]);
    }
}
