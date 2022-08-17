<?php

namespace App\Http\Controllers;

class SiteController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'Филиалы',
            'description'=>'Список и описание филиалов Корпорации ITYPAS'
        ];
        return view('site', compact('data'));
    }
}
