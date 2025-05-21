<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function notificaciones()
    {
        $notifications = auth()->user()->notifications; 
        return view('notificaciones', compact('notifications'));
    }
}



