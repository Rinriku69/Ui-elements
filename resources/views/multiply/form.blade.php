@extends('layouts.main',[
    'title' => "Multiply form"
])

@section('content')
<main>
    <form action="{{route('multiply.result')}}" method="get">

     <label>
        <b>n</b>
        <select name="n">
        @for($i=2;$i<=12;$i++)
         <option value="{{$i}}">{{$i}}</option>
        @endfor
        </select>
     </label>
     <br><br>
     
     <button type="submit">Submit</button>

    </form>    
</main>
    
@endsection