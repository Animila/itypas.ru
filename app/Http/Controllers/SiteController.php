<?php

namespace App\Http\Controllers;

class SiteController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'Филиалы'
        ];
        return view('site', compact('data'));
    }
}
