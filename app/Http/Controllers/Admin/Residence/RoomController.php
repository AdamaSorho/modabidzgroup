<?php

namespace App\Http\Controllers\Admin\Residence;

use App\Http\Controllers\Controller;
use App\Http\Requests\Residence\RoomRequest;
use App\Models\Room;
use App\Services\RoomService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    private RoomService $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function index(): Renderable
    {
        $rooms = $this->roomService->getRoomsWithPaginator();

        return view("admin.residence.room.index", [
            "rooms" => $rooms,
            'current_page' => $rooms->currentPage(),
            'per_page' => $rooms->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $room = new Room();
        else
            $room = $this->roomService->getRoom($id);

        return view("admin.residence.room.form", [
            "room" => $room,
        ]);
    }

    public function store(RoomRequest $request): RedirectResponse
    {
        $this->roomService->storeRoom($request);

        return redirect()->route("admin.residence.room.index")
                        ->with("success", "Chambre créée avec succès !");
    }

    public function destroy(Room $room): RedirectResponse
    {
        // Suppression des images
        if ($room->photos)
        {
            $images = $room->photos->pluck("image");
            try {
                Storage::delete($images);
            } catch (\Exception $exception) {

            }
        }

        // Suppression de la chambre
        try {
            $room->photos()->delete();
            $room->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.residence.room.index")
                ->with("danger", "Une erreur est survenue lors de la suppression de la chambre. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.residence.room.index")
                        ->with("status", "Chambre supprimé avec succès !");
    }
}
