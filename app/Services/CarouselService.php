<?php

namespace App\Services;

use App\Models\Carousel;

class CarouselService
{
    public function getCarouselsWithPaginator($number = 20)
    {
        return Carousel::paginate($number);
    }

    private function getActiveCarousels($type)
    {
        return Carousel::where("is_active", 1)
                        ->where("type", $type)->get();
    }

    public function getCarouselsHome()
    {
        return $this->getActiveCarousels(1);
    }

    public function getCarouselsResidence()
    {
        return $this->getActiveCarousels(2);
    }

    public function getCarousel($id)
    {
        return Carousel::find($id);
    }

    public function storeCarousel($data)
    {
        if ($data["id"])
            $carousel = $this->getCarousel($data["id"]);
        else
            $carousel = new Carousel();
        $upload_dir = 'carousels/'.date('Y');

        $carousel
            ->setTranslation("title", "fr", $data["title_fr"])
            ->setTranslation("title", "en", $data["title_en"])
            ->setTranslation("subtitle", "fr", $data["subtitle_fr"])
            ->setTranslation("subtitle", "en", $data["subtitle_en"]);
        $carousel->image = ($data["image"]) ? 'storage/' . \Storage::disk('public')->putFile($upload_dir, $data["image"]) : (($carousel->image) ?: '');
        $carousel->is_active = $data["is_active"] == 1 ? : 0;
        $carousel->type = $data["type"];

        $carousel->save();
    }
}
