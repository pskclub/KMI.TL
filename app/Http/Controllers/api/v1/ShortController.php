<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Url;
use Illuminate\Http\Request;
use Validator;

class ShortController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'url' => 'url'
        ]);

        if ($validator->fails()) {
            $data = ['error' => true, 'error_message' => "invalid url", 'url' => $request->url];
            return json_encode($data);
        } else {
            $url = Url::where('url', $request->url)->first();
            if (!$url) {
                $hash = str_random(5);
                while (Validator::make(['hash' => $hash], ['hash' => 'unique:url,hash'])->fails()) {
                    $hash = str_random(5);
                }
                $url = new Url();
                $url->url = $request->url;
                $url->hash = $hash;
                $url->save();

            }
            $data = ['url' => $url->url, 'alias' => url($url->hash), 'info' => url($url->hash . '/info'), 'qr' => url($url->hash . '/qr'), 'counter' => 0];
            return json_encode($data);
        }
    }

}
