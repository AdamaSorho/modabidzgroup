<?php

namespace App\Composers;

use App\Services\SettingService;
use Illuminate\Contracts\View\View;

class ClientComposer
{
    public function compose(View $view): void
    {
        $view->with("setting", SettingService::setting());
    }
}
