<?php

namespace app\http\Controllers;

use DB;
use Dashboard;

class PagesController extends Controller
{

    public function display($page)
    {
        $pages = [
            'welkom' => 'welkom',
            'home' => 'welkom',
            'profiel' => 'profiel',
            'dashboard' => 'dashboard'
        ];

        if (!array_key_exists($page, $pages)) {
            abort(404, "Sorry this post does not exist");
        }

        return view($pages[$page]);
    }
}
