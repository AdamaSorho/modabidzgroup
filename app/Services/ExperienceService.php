<?php

namespace App\Services;

use App\Models\Experience;

class ExperienceService
{
    public function getExperiencesWithPaginator($number = 20)
    {
        return Experience::paginate($number);
    }

    public function getBetterExperience()
    {
        return Experience::where("better", true)->first();
    }

    public function getExperience($id)
    {
        return Experience::find($id);
    }

    public function storeExperience($data): void
    {
        if ($data["id"])
            $experience = $this->getExperience($data["id"]);
        else
            $experience = new Experience();
        $experience
            ->setTranslation("wording", "fr", $data["wording_fr"])
            ->setTranslation("wording", "en", $data["wording_en"]);
        $experience->number = $data["number"];
        if ($data["better"])
        {
            $betterExperience = $this->getBetterExperience();
            if (!is_null($betterExperience))
            {
                $betterExperience->better = false;
                $betterExperience->save();
            }
            $experience->better = $data["better"];
        }

        $experience->save();
    }
}
