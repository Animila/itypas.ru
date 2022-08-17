<?php

namespace App\Http\Controllers;

use App\Models\info_docs;
use App\Models\personals_lists;

class PersonalController
{
public function __invoke($id)
{
    $info = info_docs::where('number_id', $id)->get()[0];
    $personal = personals_lists::find($info->doc_id);
    $annexs = json_decode($personal['annex']);
    $data = [
        'title'=> $personal->name
    ];
    return view('personal', compact('data', 'personal', 'info', 'annexs'));
}
}
