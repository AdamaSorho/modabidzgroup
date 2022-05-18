<?php

namespace App\Services;

use App\Models\VideoCategory;

class VideoCategoryService
{
    public function getCategoriesWithPaginator($number = 20)
    {
        return VideoCategory::paginate($number);
    }

    public function getCategories(): \Illuminate\Database\Eloquent\Collection
    {
        return VideoCategory::all();
    }

    public function getCategory($id)
    {
        return VideoCategory::find($id);
    }

    public function storeCategory($data): void
    {
        if ($data["id"])
            $category = $this->getCategory($data["id"]);
        else
            $category = new VideoCategory();
        $category
            ->setTranslation("wording", "fr", $data["wording_fr"])
            ->setTranslation("wording", "en", $data["wording_en"])
            ->save();
    }
}
