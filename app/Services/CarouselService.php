<?php

namespace App\Services;

use App\Models\Carousel;

class CarouselService
{
    public function getCarouselsWithPaginator($number = 20)
    {
        return Carousel::paginate($number);
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

        $carousel->save();
    }
}
