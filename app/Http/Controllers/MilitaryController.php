<?php

namespace App\Http\Controllers;

class MilitaryController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'ITYPAS Military'
        ];
        return view('military', compact('data'));
    }
}
