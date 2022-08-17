<?php

namespace App\Http\Controllers;

class PersonalListController
{
public function __invoke()
{
    $data = [
        'title'=>'Список персонала',
    ];
    return view('personal_list', compact('data'));
}
}
