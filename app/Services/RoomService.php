<?php

namespace App\Services;

use App\Models\Reservation;
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

    public function getRooms(): \Illuminate\Database\Eloquent\Collection
    {
        return Room::all();
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

    public function getReservationsWithPaginator($id, $status = 1, $is_accepted = false, $number = 20)
    {
        // status => 1 = Réservé/Book & 2 = Occupé/Occupied

        if (is_null($id))
            $reservations = Reservation::where("is_accepted", $is_accepted)->where("status", $status)
                                        ->where("is_available", true)->paginate($number);
        else
            $reservations = Reservation::where("id", $id)
                                        ->where("is_accepted", $is_accepted)
                                        ->where("status", $status)
                                        ->where("is_available", true)->paginate($number);

        return $reservations;
    }

    public function getBookingByRoom($room_id)
    {
        return Reservation::where("is_available", true)
                            ->where("room_id", $room_id)->first();
    }

    public function getBooking($id)
    {
        return Reservation::find($id);
    }

    public static function getNewsBooking()
    {
        return Reservation::where("status", 1)
                            ->where("is_available", true)
                            ->where("is_accepted", false)->get();
    }

    public function validateReservation($id, bool $validate): void
    {
        $booking = $this->getBooking($id);
        if ($validate)
            $booking->is_accepted = true;
        else
            $booking->is_available = false;
        $booking->save();
    }

    public static function getLastNewsBooking($number = 5)
    {
        return Reservation::where("status", 1)
                            ->where("is_available", true)
                            ->where("is_accepted", false)
                            ->latest()->take($number)->get();
    }

    public function storeBooking($data, bool $is_validated = false): array
    {
        $reservation = $this->getBookingByRoom($data["room_id"]);
        if ($reservation)
        {
            $room = $this->getRoom($data["room_id"]);
            return [
                "error" => true,
                "message" => $reservation->status == 1 ?__("La chambre ") . $room->name .
                    __(" est déjà ") . __("réservée.") : __("La chambre ") . $room->name .
                    __(" est déjà ") . __("occupée."),
            ];
        }

        if ($data["id"])
            $booking = $this->getBooking($data["id"]);
        else
            $booking = new Reservation();
        $booking->check_in = $data["check_in"];
        $booking->check_out = $data["check_out"];
        $booking->name = $data["name"];
        $booking->email = $data["email"];
        $booking->phone = $data["phone"];
        $booking->status = $data["status"] ?? 1;
        $booking->guest = $data["guest"];
        $booking->room_id = $data["room_id"];
        $booking->is_accepted = $is_validated;

        $booking->save();

        return [
            "error" => false,
            "message" => __("Réservation effectuée avec succès !"),
        ];
    }
}
