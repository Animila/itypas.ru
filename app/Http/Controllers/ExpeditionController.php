<?php

namespace App\Http\Controllers;

class ExpeditionController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'ITYPAS Expedition'
        ];
        return view('expedition', compact('data'));
    }
}
