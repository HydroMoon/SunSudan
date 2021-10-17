<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Event;
use App\Models\Message;
use App\Models\News;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $news = News::paginate(3);

        return view('news', compact('news'));
    }

    public function getSingle($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('single-news', compact('news'));
    }

    public function storeMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create($validated);

        return redirect()->route('contact-us');
    }

    // Images gallery
    public function showImages()
    {
        $media = Media::all();

        return view('media', compact('media'));
    }

    public function getEvent()
    {
        $event = json_encode(Event::all('title', 'start', 'end')->toArray(), JSON_UNESCAPED_UNICODE);

        return view('calendar', compact('event'));
    }
}
