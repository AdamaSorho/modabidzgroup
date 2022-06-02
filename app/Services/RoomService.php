<?php

namespace App\Services;

use App\Models\Room;
use App\Models\RoomPhoto;

class RoomService
{
    public function getRoomsWithPaginator($number = 20)
    {
        return Room::paginate($number);
    }

    public function getRoomPhotosWithPaginator($id, $number = 20)
    {
        return RoomPhoto::where("room_id", $id)->paginate($number);
    }

    public function getRoom($id)
    {
        return Room::find($id);
    }

    public function getPhoto($id)
    {
        return RoomPhoto::find($id);
    }

    public function storeRoom($data): void
    {
        if ($data["id"])
            $room = $this->getRoom($data["id"]);
        else
            $room = new Room();
        $room
            ->setTranslation("name", "fr", $data["name_fr"])
            ->setTranslation("name", "en", $data["name_en"])
            ->setTranslation("description", "fr", $data["description_fr"])
            ->setTranslation("description", "en", $data["description_en"]);
        $room->amount = $data["amount"];

        $room->save();
    }

    public function storePhoto($data): void
    {
        if ($data["id"])
            $photo = $this->getPhoto($data["id"]);
        else
            $photo = new RoomPhoto();
        $upload_dir = 'rooms/'.date('Y');
        $photo->image = ($data["image"]) ? 'storage/' . \Storage::disk('public')->putFile($upload_dir, $data["image"]) : (($photo->image) ?: '');
        $photo->room_id = $data["room_id"];

        $photo->save();
    }
}
