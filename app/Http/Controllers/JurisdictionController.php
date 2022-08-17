<?php

namespace App\Http\Controllers;

class JurisdictionController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'ITYPAS Jurisdiction',
            'description'=>'Юридическое подразделение корпорации ITYPAS (ITYPAS Jurisdiction)'
        ];
        return view('jurisdiction', compact('data'));
    }
}
