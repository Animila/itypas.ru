<?php

namespace App\Http\Controllers;

class StructureController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'Структура',
            'description'=>'Описание работы внутри Корпорации ITYPAS'
        ];
        return view('structure', compact('data'));
    }
}
