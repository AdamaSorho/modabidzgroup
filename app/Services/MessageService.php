<?php

namespace App\Services;

use App\Models\Message;
use Illuminate\Support\Facades\Session;

class MessageService
{
    public function getMessage($id)
    {
        return Message::find($id);
    }

    public function storeMessage($data): void
    {
        if ($data["id"])
            $message = $this->getMessage($data["id"]);
        else
            $message = new Message();
        $message->name = $data["name"];
        $message->email = $data["email"];
        $message->body = $data["body"];
        $message->blog_id = $data["blog_id"];

        $infos = ["name" => $data["name"], "email" => $data["email"]];

        Session::put("infos", $infos);

        $message->save();
    }
}
