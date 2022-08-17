<?php

namespace App\Http\Controllers;

class ContactController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'Контакты'
        ];
        return view('contact', compact('data'));
    }
}
