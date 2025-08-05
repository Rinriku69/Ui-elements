<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class ExampleController extends Controller
{
    function showForm(){
        return View('example01.form');
    }

    function showResult(ServerRequestInterface $request){
        $data = $request -> getParsedBody();
        $price = $data['price'];
        $discount = $data['discount'];

        $discountCost = $price * $discount/100;
        $netPrice = $price - $discountCost;

        return view('example01.result',[
         'price'=>$price,
         'discount'=>$discount,
         'discountCost'=>$discountCost,
         'netPrice'=>$netPrice,
         
        ]);
    }
}
