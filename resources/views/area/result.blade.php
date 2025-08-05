@extends('layouts.main',[
    'title' => "Area result"
])


@section('content')
<main>
    <b>Type::</b>{{$type}}<br>
    <b>Width::</b>{{$width}}<br>
    <b>Heigh::</b>{{$heigh}}<br>
    <b>Area::</b>{{$area}}<br>
</main>
    
@endsection