<?php


namespace App\Http\Controllers;


class PagesController
{
    public function display($page) {
            $pages = [
                'welkom' => 'welkom',
                'profiel' => 'profiel',
                'dashboard' => 'dashboard'
            ];

            if (! array_key_exists($page, $pages)) {
                abort(404, "Sorry this post does not exist");
            }

            return view($pages[$page]);
        }
};
