<?php

namespace App\Http\Controllers;

class ExpeditionController
{
    public function __invoke()
    {
        $data = [
            'title'=> 'ITYPAS Expedition',
            'description'=>'Экспедиционное подразделение Корпорации ITYPAS (ITYPAS Expedition)',
        ];
        return view('expedition', compact('data'));
    }
}
