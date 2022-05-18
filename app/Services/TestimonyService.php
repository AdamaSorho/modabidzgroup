<?php

namespace App\Services;

use App\Models\Testimony;

class TestimonyService
{
    public function getTestimoniesWithPaginator($number = 20)
    {
        return Testimony::latest()->paginate($number);
    }

    public function getLastTestimories($take = 4)
    {
        return Testimony::latest()->take($take)->get();
    }

    public function getTestimony($id)
    {
        return Testimony::find($id);
    }

    public function storeTestimony($data): void
    {
        if ($data["id"])
            $testimony = $this->getTestimony($data["id"]);
        else
            $testimony = new Testimony();
        $testimony
            ->setTranslation("profession", "fr", $data["profession_fr"])
            ->setTranslation("profession", "en", $data["profession_en"])
            ->setTranslation("text", "fr", $data["text_fr"])
            ->setTranslation("text", "en", $data["text_en"]);
        $testimony->name = $data["name"];

        $testimony->save();
    }
}
