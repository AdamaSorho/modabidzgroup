<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use App\Services\SettingService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private SettingService $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function create(): Renderable
    {
        $setting = $this->settingService->getSetting();
        if (is_null($setting))
            $setting = new Setting();

        return view("admin.setting.form", [
            "setting" => $setting,
        ]);
    }

    public function store(SettingRequest $request): RedirectResponse
    {
        $this->settingService->storeSetting($request);

        return redirect()->route("admin.setting.create")
                        ->with("success", "Réglages enregistrés avec succès !");
    }
}
