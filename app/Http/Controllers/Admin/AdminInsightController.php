<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Insight;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminInsightController extends Controller
{
    /** List all insights */
    public function index()
    {
        $insights = Insight::latest()->paginate(10);
        return view('admin.insights.index', compact('insights'));
    }

    /** Show create form */
    public function create()
    {
        return view('admin.insights.create');
    }

    /** Store new insight */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => 'required|string|max:255',
            'slug'          => 'nullable|string|unique:insights,slug',
            'excerpt'       => 'nullable|string|max:500',
            'content'       => 'required|string',
            'author'        => 'nullable|string|max:100',
            'category'      => 'nullable|string|max:100',
            'read_time'     => 'nullable|integer|min:1',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'published_at'  => 'nullable|date',
            'views'         => 'nullable|integer|min:0',
        ]);

        // Auto-generate slug
        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        // ✅ Upload image to public/storage/insights
        if ($request->hasFile('image')) {
            $destinationPath = public_path('storage/insights');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

$filename = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
$request->file('image')->move($destinationPath, $filename);
$validated['image'] = 'storage/insights/' . $filename; // ✅ FIXED

        }

        // Default read_time if not provided
        if (empty($validated['read_time'])) {
            $validated['read_time'] = ceil(str_word_count(strip_tags($validated['content'])) / 200);
        }

        // Default author
        $validated['author'] = $validated['author'] ?? auth()->user()->name ?? 'Admin';

        // Default views
        $validated['views'] = $validated['views'] ?? 0;

        Insight::create($validated);

        return redirect()->route('admin.insights.index')->with('success', 'Insight created successfully.');
    }

    /** Show edit form */
    public function edit(Insight $insight)
    {
        return view('admin.insights.edit', compact('insight'));
    }

    /** Update insight */
    public function update(Request $request, Insight $insight)
    {
        $validated = $request->validate([
            'title'         => 'required|string|max:255',
            'slug'          => 'nullable|string|unique:insights,slug,' . $insight->id,
            'excerpt'       => 'nullable|string|max:500',
            'content'       => 'required|string',
            'author'        => 'nullable|string|max:100',
            'category'      => 'nullable|string|max:100',
            'read_time'     => 'nullable|integer|min:1',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'published_at'  => 'nullable|date',
            'views'         => 'nullable|integer|min:0',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        // ✅ Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old file if exists
            if ($insight->image) {
                $oldPath = public_path('storage/' . $insight->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $destinationPath = public_path('storage/insights');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

$filename = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
$request->file('image')->move($destinationPath, $filename);
$validated['image'] = 'storage/insights/' . $filename; // ✅ FIXED

        }

        $insight->update($validated);

        return redirect()->route('admin.insights.index')->with('success', 'Insight updated successfully.');
    }

    /** Delete insight */
    public function destroy(Insight $insight)
    {
        if ($insight->image) {
            $path = public_path('storage/' . $insight->image);
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $insight->delete();

        return redirect()->route('admin.insights.index')->with('success', 'Insight deleted successfully.');
    }
}
