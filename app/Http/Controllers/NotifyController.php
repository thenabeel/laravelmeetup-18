<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\NotifyExternalSystem;

class NotifyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function __invoke(Request $request)
    {
        echo now();
        // NotifyExternalSystem::dispatchNow();
        NotifyExternalSystem::dispatch();
        // NotifyExternalSystem::dispatch()->onQueue('external_notification');
        echo '<br>' . now();
    }
}
