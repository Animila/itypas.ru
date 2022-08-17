<?php

namespace App\Http\Controllers;

class JurisdictionController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'ITYPAS Jurisdiction'
        ];
        return view('jurisdiction', compact('data'));
    }
}
