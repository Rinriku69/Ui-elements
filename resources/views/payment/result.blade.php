@extends('layouts.main',[
    'title' => "Payment: Result"
])

@section('content')
<main>
<b>Price Exclude VAT ::</b>{{number_format($priceexcludevat,2)}}<br>
@if($vat == 1 )
<b>VAT Cost(7%) ::</b>{{number_format($vat_cost,2)}}<br>
<b>Price Include VAT ::</b>{{number_format($priceincludevat,2)}}<br>
@else  <p>No VAT</p><br>
@endif
@if($tax == 1 )
<b>Tax Cost({{$tax_value}}) ::</b>{{number_format($tax_cost,2)}}<br>

@else  <p>No Tax</p><br>
@endif
<b>Payment ::</b>{{number_format($payment,2)}}<br>


</main>
    
@endsection