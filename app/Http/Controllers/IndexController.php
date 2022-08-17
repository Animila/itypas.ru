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
        'description'=>'Научно-исследовательская корпорация ITYPAS предоставляет множество услуг, начиная от многосторонней поддержки исследователей и заканчивая лицензированием патентов',
        ''
    ];
    return view('index', compact('data', 'ip2'));
}
}
