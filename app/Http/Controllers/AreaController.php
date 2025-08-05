<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class AreaController extends Controller
{
    function showForm(): View{
        return view('area.form');
    }

    function showResult(ServerRequestInterface $request): view {
       $data = $request -> getParsedBody();
       $type = $data['type'];
       $width = (float)$data['width'];
       $heigh = (float)$data['heigh'];

       if($type == 3){
        $area = 0.5 * $width * $heigh;
        $type = "Triangle";
       }else{
        $area = $width * $heigh;
        $type = "Rectangle";
       }
       
       return view('area.result',
       ['type' => $type,
        'width' => $width,
        'heigh' => $heigh,
        'area' => $area
        
       ]);
    
    
    }
}
