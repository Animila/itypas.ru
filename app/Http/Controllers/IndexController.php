<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController
{
public function __invoke(Request $request)
{
//    $ip1 = $this->server->get('REMOTE_ADDR');
    $ip2 = $request->getClientIp();
    $data = [
        'title'=>'ITYPAS Inc',
    ];
    return view('index', compact('data', 'ip2'));
}
}
