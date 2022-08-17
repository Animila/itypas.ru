<?php

namespace App\Http\Controllers;

class ContactController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'Контакты',
            'description'=>'Контакты для обратной связи с представителями корпорации ITYPAS',
        ];
        return view('contact', compact('data'));
    }
}
