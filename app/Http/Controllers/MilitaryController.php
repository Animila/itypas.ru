<?php

namespace App\Http\Controllers;

class MilitaryController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'ITYPAS Military',
            'description' => 'Военизированное подразделение (ITYPAS Military)'
        ];
        return view('military', compact('data'));
    }
}
