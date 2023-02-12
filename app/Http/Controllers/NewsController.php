<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Purifier;
use Image;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('admin.news', compact('news'));
    }

    public function create()
    {
        return view('admin.create-news');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'string',
            'cover' => 'sometimes|image',
        ]);

        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(1920, 1080)->save($location);

            $validated['cover'] = $filename;
        }
        
        $validated['body'] = Purifier::clean($request->body);

        News::create($validated);

        return redirect()->route('admin-news.index');
    }

    public function edit($id)
    {
        $news = News::find($id);

        return view('admin.edit-news', compact('news'));
    }

    public function update($id, Request $request)
    {
        $validated = null;
        
        if ($request->slug == News::find($id)->slug) {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'body' => 'string',
                'cover' => 'sometimes|image',
            ]);
        } else {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:news,slug',
                'body' => 'string',
                'cover' => 'sometimes|image',
            ]);
        }

        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(1920, 1080)->save($location);
    
            $oldfilename = News::find($id)->cover;
    
            $validated['cover'] = $filename;

            Storage::delete($oldfilename);
    
          }

        $validated['body'] = Purifier::clean($request->body);

        News::where('id', $id)->update($validated);

        return redirect()->route('admin-news.index');
    }

    public function destroy($id)
    {
        $news = News::find($id);

        $news->delete();

        return redirect()->route('admin-news.index');
    }
}
