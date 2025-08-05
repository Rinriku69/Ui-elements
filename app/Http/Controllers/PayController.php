<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;

class PayController extends Controller
{
   function showForm(){
    return view('payment.form');
   }

   function showResult(ServerRequestInterface $request){
    $data = $request->getParsedBody();
    $vat = ($data['vat']??[]) ;
    $tax = ($data['tax']??[]) ;
    $price = $data['price'];
    $vat_in = $data['vat_in'];
    $tax_value = $data['tax_value'];

    if($vat == 1){
     if($vat_in ==1){
        $priceexcludevat = $price *100/107;
        $vat_cost = $priceexcludevat * 7/100;
     }else{
        $priceexcludevat = $price;
        $vat_cost = $priceexcludevat * 7/100;
     }
    }else{
        $priceexcludevat = $price;
        $vat_cost = 0;
    }
    $priceincludevat = $priceexcludevat + $vat_cost;


    if($tax == 1){
     if($tax_value == 0.05){
     $tax_cost = $priceexcludevat * $tax_value;
     $payment = $priceincludevat - $tax_cost;
     $tax_value = "5%";
        
     }else if($tax_value == 0.03){
       $tax_cost = $priceexcludevat * $tax_value;
     $payment = $priceincludevat - $tax_cost;
     $tax_value = "3%";
     }else if($tax_value == 0.02){
       $tax_cost = $priceexcludevat * $tax_value;
     $payment = $priceincludevat - $tax_cost;
     $tax_value = "2%";
     }else{
        $tax_value = 0.01;
       $tax_cost = $priceexcludevat * $tax_value;
     $payment = $priceincludevat - $tax_cost;
     $tax_value = "1%";
     }
    }else{
        $tax_cost = 0;
        $payment = $priceincludevat - $tax_cost;
    }


    return view('payment.result',[
     'priceexcludevat' => (float)$priceexcludevat,
     'vat_cost' => (float)$vat_cost,
     'priceincludevat' => (float)$priceincludevat,
     'tax_cost' => (float)$tax_cost,
     'payment' => (float)$payment,
     'vat' => $vat,
     'tax' => $tax,
     'tax_value' => $tax_value,
    ]);
   }
}
