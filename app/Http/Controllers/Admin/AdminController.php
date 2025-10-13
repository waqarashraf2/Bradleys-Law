<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Insight;
use App\Models\Message;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'servicesCount' => Service::count(),
            'insightsCount' => Insight::count(),
            'messagesCount' => Message::count(),
            'recentMessages' => Message::latest()->take(5)->get(),
        ]);
    }
}
