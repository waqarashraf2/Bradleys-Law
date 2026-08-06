<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class AdminNewsletterController extends Controller
{
    public function index()
    {
        $newsletter = Newsletter::query()->latest('id')->first();

        return view('admin.newsletter.index', [
            'newsletter' => $newsletter,
        ]);
    }

    public function update(Request $request, Newsletter $newsletter)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'frequency' => 'required|string|max:50',
            'signup_url' => 'required|url|max:2048',
            'summary' => 'required|string|max:1000',
            'body' => 'nullable|string|max:20000',
            'is_active' => 'nullable|boolean',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        $newsletter->update($data);

        return redirect()
            ->route('admin.newsletter.index')
            ->with('status', 'Newsletter settings updated successfully.');
    }
}
