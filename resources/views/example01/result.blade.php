@extends('layouts.main',[
    'title' => 'Result',
])

@section('content')
<main> 
    <dl>
    <dt>Price::{{number_format($price,2)}}</dt>
    <dt>Discount(%)::{{$discount}}%</dt>
    <dt>Discount Cost::{{number_format($discountCost,2)}}</dt>
    <dt>Net Price::{{number_format($netPrice,2)}}</dt>
    </dl>
</main>
    
@endsection