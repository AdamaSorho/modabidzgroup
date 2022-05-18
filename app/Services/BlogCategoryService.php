<?php

namespace App\Services;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Collection;

class BlogCategoryService
{
    public function getCategoriesWithPaginator($number = 20)
    {
        return BlogCategory::paginate($number);
    }

    public function getCategories(): Collection
    {
        return BlogCategory::all();
    }

    public function getCategory($id)
    {
        return BlogCategory::find($id);
    }

    public function storeCategory($data): void
    {
        if ($data["id"])
            $category = $this->getCategory($data["id"]);
        else
            $category = new BlogCategory();
        $category
            ->setTranslation("wording", "fr", $data["wording_fr"])
            ->setTranslation("wording", "en", $data["wording_en"])
            ->save();
    }
}
