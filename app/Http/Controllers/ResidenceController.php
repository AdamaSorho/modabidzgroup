<?php

namespace App\Http\Controllers;

use App\Http\Requests\Residence\ClientBookingRequest;
use App\Services\CarouselService;
use App\Services\RoomService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        $all_rooms = $this->roomService->getRooms();

        return view("residence.welcome", [
            "carousels" => $carousels,
            "rooms" => $rooms,
            "all_rooms" => $all_rooms,
        ]);
    }

    public function room_detail($id): Renderable
    {
        $room = $this->roomService->getRoom($id);
        $rooms = $this->roomService->getRoomsWithPaginator(6);

        return view("residence.room-detail", [
            "room" => $room,
            "rooms" => $rooms,
        ]);
    }

    public function storeBooking(ClientBookingRequest $request): RedirectResponse
    {
        $response = $this->roomService->storeBooking($request);

        if ($response["error"])
            Alert::error(__("Erreur"), $response["message"]);
        else
            Alert::success(__('Succès'), $response["message"]);

        return redirect()->back();
    }
}
