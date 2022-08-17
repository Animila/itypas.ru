<?php

namespace App\Http\Controllers;

class StructureController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'Структура'
        ];
        return view('structure', compact('data'));
    }
}
