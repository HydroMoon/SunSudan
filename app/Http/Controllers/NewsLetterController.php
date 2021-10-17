<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
Use Alert;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        if (!Newsletter::isSubscribed($request->email)) {
            Newsletter::subscribe($request->email);

            Alert::toast('Subscribed Successfully!', 'success');
            return redirect()->back();
        }

        Alert::toast('Already Subscribed!', 'info');
        return redirect()->back();
    }
}
