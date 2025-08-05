<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class MulController extends Controller
{
    function showForm(){
        return View('multiply.form');
    }

    function showResult(ServerRequestInterface $request){
        $data = $request->getQueryParams();
        $n = $data['n'];

        return view('multiply.result',[
            'n' => $n,
        ]);
    }
}
