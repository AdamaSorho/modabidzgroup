<?php

namespace App\Composers;

use App\Services\RoomService;
use Illuminate\Contracts\View\View;

class BackendComposer
{

    public function compose(View $view): void
    {
        $view->with("notifications", RoomService::getNewsBooking())
            ->with("recentNotifications", RoomService::getLastNewsBooking());
    }
}
