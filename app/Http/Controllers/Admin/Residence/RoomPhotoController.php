<?php

namespace App\Http\Controllers\Admin\Residence;

use App\Http\Controllers\Controller;
use App\Http\Requests\Residence\RoomPhotoRequest;
use App\Models\RoomPhoto;
use App\Services\RoomService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomPhotoController extends Controller
{
    private RoomService $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function index($room_id): Renderable
    {
        $photos = $this->roomService->getRoomPhotosWithPaginator($room_id);
        $room = $this->roomService->getRoom($room_id);

        return view("admin.residence.room.photo.index", [
            "photos" => $photos,
            'current_page' => $photos->currentPage(),
            'per_page' => $photos->perPage(),
            "room" => $room,
        ]);
    }

    public function create($room_id, $id = null): Renderable
    {
        if (is_null($id))
            $photo = new RoomPhoto();
        else
            $photo = $this->roomService->getPhoto($id);
        $room = $this->roomService->getRoom($room_id);

        return view("admin.residence.room.photo.form", [
            "photo" => $photo,
            "room" => $room,
        ]);
    }

    public function store(RoomPhotoRequest $request): RedirectResponse
    {
        $this->roomService->storePhoto($request);

        return redirect()->route("admin.residence.room.photo.index", $request["room_id"])
                        ->with("success", "Image ajoutée avec succès !");
    }

    public function destroy($room_id, RoomPhoto $photo): RedirectResponse
    {
        try {
            Storage::delete($photo->image);
            $photo->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.residence.room.photo.index", $room_id)
                ->with("danger", "Une erreur est survenue lors de la suppression de l'image. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.residence.room.photo.index", $room_id)
                        ->with("status", "Image supprimé avec succès !");
    }
}
