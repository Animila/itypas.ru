<?php

namespace App\Http\Controllers;

class AboutController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'О компании',
            'description'=>'Описание деятельности корпорации ITYPAS Inc',
        ];
        return view('about', compact('data'));
    }
}
