<?php

namespace App\Http\Controllers;

use App\Models\Links;

class LinksController extends Controller
{
    public function redirect($short_link)
    {
        $short_link = Links::where('short_link', $short_link)->firstOrFail();
        $short_link->increment('counter');

        return redirect()->to($short_link->full_link, 308);
    }
}
