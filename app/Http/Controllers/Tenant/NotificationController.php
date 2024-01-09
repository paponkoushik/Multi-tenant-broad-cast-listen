<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function create()
    {
        return view('notification');
    }
}
