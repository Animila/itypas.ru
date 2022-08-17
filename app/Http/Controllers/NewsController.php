<?php

namespace App\Http\Controllers;

class NewsController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'Новости'
        ];
        return view('news', compact('data'));
    }
}
