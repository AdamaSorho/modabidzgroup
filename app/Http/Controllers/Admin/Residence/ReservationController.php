<?php

namespace App\Http\Controllers\Admin\Residence;

use App\Http\Controllers\Controller;
use App\Http\Requests\Residence\ClientBookingRequest;
use App\Models\Reservation;
use App\Services\RoomService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    private RoomService $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function index($id = null): Renderable
    {
        $reservations = $this->roomService->getReservationsWithPaginator($id);

        return view("admin.residence.reservation.index", [
            "reservations" => $reservations,
            'current_page' => $reservations->currentPage(),
            'per_page' => $reservations->perPage(),
        ]);
    }

    public function validateBooking($id): RedirectResponse
    {
        $this->roomService->validateReservation($id, true);

        return redirect()->route("admin.residence.reservation.index")
                        ->with("success", "Réservation validée avec succès !");
    }

    public function rejectBooking($id): RedirectResponse
    {
        $this->roomService->validateReservation($id, false);

        return redirect()->route("admin.residence.reservation.index")
            ->with("success", "Réservation annuler avec succès !");
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $booking = new Reservation();
        else
            $booking = $this->roomService->getBooking($id);
        $rooms = $this->roomService->getRooms();

        return view("admin.residence.reservation.form", [
            "booking" => $booking,
            "rooms" => $rooms,
        ]);
    }

    public function store(ClientBookingRequest $request): RedirectResponse
    {
        $response = $this->roomService->storeBooking($request, true);


        return redirect()->route("admin.residence.reservation.index")
                        ->with($response["error"] ? "danger" : "success", $response["message"]);
    }

    public function destroy(Reservation $reservation): RedirectResponse
    {
        try {
            $reservation->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.residence.reservation.index")
                ->with("danger", "Une erreur est survenue lors de la suppression de la réservation. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.residence.reservation.index")
                        ->with("success", "Réservation supprimée avec succès !");
    }
}
