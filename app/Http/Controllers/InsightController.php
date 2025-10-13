<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;

class InsightController extends Controller
{
    public function index()
    {
        $insights = Insight::latest('published_at')->paginate(6);
        return view('pages.insights', compact('insights'));
    }

    public function show(Insight $insight)
    {
        return view('pages.insights_show', compact('insight'));
    }
}
