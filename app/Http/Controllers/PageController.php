<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Insight;

class PageController extends Controller
{
    public function home()
    {
        // show featured services and latest insights on home
        $services = Service::orderBy('id')->limit(3)->get();
        $insights = Insight::latest('published_at')->limit(3)->get();

        return view('pages.home', compact('services', 'insights'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function legal()
    {
        return view('pages.legal');
    }
}
