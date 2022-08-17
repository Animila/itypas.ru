<?php

namespace App\Http\Controllers;

class PersonalListController
{
public function __invoke()
{
    $data = [
        'title'=>'Список персонала',
        'description'=>'Список текущих сотрудников Корпорации ITYPAS'
    ];
    return view('personal_list', compact('data'));
}
}
