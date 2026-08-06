<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Insight;
use App\Models\Newsletter;

class PageController extends Controller
{
    public function home()
    {
        // show featured services and latest insights on home
        $services = Service::whereIn('id', [4, 5, 6, 13])
    ->orderBy('id')
    ->get();

        $insights = Insight::latest('published_at')->limit(3)->get();

        $newsletter = Newsletter::query()
            ->where('is_active', true)
            ->latest('id')
            ->first();

        return view('pages.home', compact('services', 'insights', 'newsletter'));
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
