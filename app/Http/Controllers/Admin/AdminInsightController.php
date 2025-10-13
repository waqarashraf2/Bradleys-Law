<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Insight;
use Illuminate\Support\Str;

class AdminInsightController extends Controller
{
    public function index()
    {
        $insights = Insight::latest()->paginate(10);
        return view('admin.insights.index', compact('insights'));
    }

    public function create()
    {
        return view('admin.insights.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:insights,slug',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        Insight::create($validated);

        return redirect()->route('admin.insights.index')->with('success', 'Insight created successfully.');
    }

    public function edit(Insight $insight)
    {
        return view('admin.insights.edit', compact('insight'));
    }

    public function update(Request $request, Insight $insight)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:insights,slug,' . $insight->id,
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        $insight->update($validated);

        return redirect()->route('admin.insights.index')->with('success', 'Insight updated successfully.');
    }

    public function destroy(Insight $insight)
    {
        $insight->delete();
        return redirect()->route('admin.insights.index')->with('success', 'Insight deleted successfully.');
    }
}
