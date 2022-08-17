<?php

namespace App\Http\Controllers;

class PADController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'ITYPAS Project and Development',
            'description'=>'Отдел по разработке и проектным исследованиям (ITYPAS Project and Development)'
        ];
        return view('pad', compact('data'));
    }
}
