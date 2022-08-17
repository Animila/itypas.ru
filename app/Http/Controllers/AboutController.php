<?php

namespace App\Http\Controllers;

class AboutController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'О компании'
        ];
        return view('about', compact('data'));
    }
}
