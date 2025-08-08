@extends('layouts.main',[
    'title' => 'Result',
])

@section('content')
<main> 
    <dl>
    <dt>Type::{{$type}}</dt>
    <dt>Heigh::{{$heigh}}</dt>
    <dt>Width::{{$width}}</dt>
    <dt>Area::{{$area}}</dt>
    </dl>
</main>
    
@endsection