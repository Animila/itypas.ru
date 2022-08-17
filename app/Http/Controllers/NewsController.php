<?php

namespace App\Http\Controllers;

class NewsController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'Новости',
            'description'=>'Новостной портал Корпорации ITYPAS'
        ];
        return view('news', compact('data'));
    }
}
