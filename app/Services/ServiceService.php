<?php

namespace App\Services;

use App\Models\Service;

class ServiceService
{
    public function getServicesWithPaginator($number = 20)
    {
        return Service::latest()->paginate($number);
    }

    public function getService($id)
    {
        return Service::find($id);
    }

    public function storeService($data): void
    {
        if ($data["id"])
            $service = $this->getService($data["id"]);
        else
            $service = new Service();
        $service
            ->setTranslation("wording", "fr", $data["wording_fr"])
            ->setTranslation("wording", "en", $data["wording_en"]);
        $upload_dir = 'services/'.date('Y');
        $service->image = ($data["image"]) ? 'storage/' . \Storage::disk('public')->putFile($upload_dir, $data["image"]) : (($service->image) ?: '');

        $service->save();
    }
}
