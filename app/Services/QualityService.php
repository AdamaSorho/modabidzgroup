<?php

namespace App\Services;

use App\Models\Quality;

class QualityService
{
    public function getQualitiesWithPaginator($number = 20)
    {
        return Quality::paginate($number);
    }

    public function getQuality($id)
    {
        return Quality::find($id);
    }

    public function storeQuality($data): void
    {
        if ($data["id"])
            $quality = $this->getQuality($data["id"]);
        else
            $quality = new Quality();
        $quality
            ->setTranslation("wording", "fr", $data["wording_fr"])
            ->setTranslation("wording", "en", $data["wording_en"])
            ->save();
    }
}
