<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Media;
use App\Models\Message;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function showMessages()
    {
        $messages = Message::paginate(10);

        return view('admin.messages', compact('messages'));
    }

    public function showDashboard()
    {
        return view('admin.dashboard');
    }

    public function storeMedia(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'album' => 'required',
        ]);

        if ($request->hasFile('file_name')) {
            $image = $request->file('file_name');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            $thumb = public_path('images/thumbs/' . 'tn' . $filename);
            Image::make($image)->fit(1920, 1080)->save($location);
            Image::make($image)->fit(800, 600)->encode('jpg', 60)->save($thumb);

            $validated['file_name'] = $filename;
        }

        Media::create($validated);

        return redirect()->route('admin.media');
    }

    public function showMedia()
    {
        $media = Media::all();

        return view('admin.media', compact('media'));
    }

    public function delMedia($id)
    {
        $media = Media::find($id);

        Storage::delete('thumbs/' . $media->file_name);

        $media->delete();

        return redirect()->route('admin.media');
    }

    public function showEvent()
    {
        $event = Event::all();

        return view('admin.calendar', compact('event'));
    }

    public function addEvent(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'start' => 'required|date',
            'end' => 'date|nullable',
        ]);

        Event::create($validated);

        return redirect()->route('admin.event');
    }

    public function delEvent($id)
    {
        $event = Event::find($id);

        $event->delete();

        return redirect()->route('admin.event');
    }
}
