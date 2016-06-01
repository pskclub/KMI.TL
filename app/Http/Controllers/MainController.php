<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Url;

class MainController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function jump($hash)
    {
        $url = Url::where('hash', $hash)->first();
        if ($url) {
           return redirect($url->url);
        } else {
           return abort(404);
        }

    }
}
