<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;

class NewsController extends Controller
{
    public function show(){
        $listNews = News::All();
        return view('news.show', [
            'listNews' => $listNews
        ]);
    }

    public function create(){
        return view('news.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,heic|max:2048',
            'content' => 'required|string'
        ]);

        if($validated){
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('news', 'public');
                $validated['image'] = $path;
            }
            News::create($validated);
            return redirect()->route('news.show');
        }
    }

    public function edit($id){
        $listNews = News::find($id);
        return view('news.edit', [
            'listNews' => $listNews
        ]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,heic|max:2048',
            'content' => 'required|string'
        ]);

        if($validated){
            if ($request->file('foto')) {
                if ($request->old_image) {
                    Storage::disk('public')->delete($request->old_image);
                }
                $path = $request->file('foto')->store('news', 'public');
            } else {
                $path = $request->old_image;
            }

            News::find($id)->update([
                'title' => $request->title,
                'image' => $path,
                'content' => $request->content
            ]);

            return redirect()->route('news.show');
        }
    }

    public function destroy($id){
        $listNews = News::find($id);
        Storage::disk('public')->delete($listNews->image);
        $listNews->delete();
        return redirect()->route('news.show');
    }

    public function index()
    {
        // Ambil berita terbaru, bisa ditambah pagination kalau mau
        $news = News::latest()->paginate(6);
    
        // Kirim ke view publik 'news.news' (file: resources/views/news/news.blade.php)
        return view('news.news', compact('news'));
    }

    public function detail($id)
    {
    $news = News::findOrFail($id);

    return view('news.new_details', compact('news'));
    }
  
}

