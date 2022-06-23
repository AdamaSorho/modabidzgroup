<?php

namespace App\Services;

use App\Models\Setting;

class SettingService
{
    public function getSetting()
    {
        return Setting::first();
    }

    public static function setting()
    {
        return Setting::first();
    }

    public function storeSetting($data): void
    {
        $setting = $this->getSetting();
        $upload_dir = 'settings/'.date('Y');
        $upload_logo = 'settings/logo'.date('Y');

        if (is_null($setting))
            $setting = new Setting();
        $setting
            ->setTranslation("slogan", "fr", $data["slogan_fr"])
            ->setTranslation("slogan", "en", $data["slogan_en"])
            ->setTranslation("sub_slogan", "fr", $data["sub_slogan_fr"])
            ->setTranslation("sub_slogan", "en", $data["sub_slogan_en"])
            ->setTranslation("about_us", "fr", $data["about_us_fr"])
            ->setTranslation("about_us", "en", $data["about_us_en"])
            ->setTranslation("choose_us", "fr", $data["choose_us_fr"])
            ->setTranslation("choose_us", "en", $data["choose_us_en"]);
        $setting->facebook = $data["facebook"];
        $setting->twitter = $data["twitter"];
        $setting->linkedin = $data["linkedin"];
        $setting->instagram = $data["instagram"];
        $setting->youtube = $data["youtube"];
        $setting->location = $data["location"];
        $setting->email = $data["email"];
        $setting->phone = $data["phone"];
        $setting->header_color = $data["header_color"];
        $setting->footer_color = $data["footer_color"];
        $setting->image = ($data["image"]) ? 'storage/' . \Storage::disk('public')->putFile($upload_dir, $data["image"]) : (($setting->image) ?: '');
        $setting->logo = ($data["logo"]) ? 'storage/' . \Storage::disk('public')->putFile($upload_logo, $data["logo"]) : (($setting->logo) ?: '');

        $setting->save();
    }
}
