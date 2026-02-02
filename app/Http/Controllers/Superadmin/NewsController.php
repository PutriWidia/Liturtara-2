<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use App\Helpers\LogHelper;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('superadmin.news.index', compact('news'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'image'   => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'content' => 'required|string',
            'status'  => 'required|in:draft,published',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // AUTHOR otomatis
        $validated['author'] = auth()->user()->name ?? 'Super Admin';

        $news = News::create($validated);

        LogHelper::add('Create News - ' . $news->title);

        return redirect()->route('superadmin.news.index')
            ->with('success', 'News berhasil ditambahkan');
    }

    public function edit(News $news)
    {
        return view('superadmin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'content' => 'required|string',
            'status'  => 'required|in:draft,published',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($news->image);
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        $news->update($validated);

        LogHelper::add('Update News - ' . $news->title);

        return redirect()->route('superadmin.news.index')
            ->with('success', 'News berhasil diupdate');
    }

    public function destroy($news_id)
    {
        $news = News::findOrFail($news_id);
        Storage::disk('public')->delete($news->image);
        $news->delete();

        LogHelper::add('Delete News - ' . $news->title);

        return redirect()->route('superadmin.news.index')
             ->with('success', 'News berhasil dihapus');    }
  
}

