@extends('layouts.main',[
'title' => "Area form",])

@section('content')
<main>
    <form action="{{route('area.result')}}" method="POST">
        @csrf
 <label>
    <input type="radio" name="type" value="3" required/>Triangular
 </label>
 <label>
    <input type="radio" name="type" value="4" required/>Rectangular
 </label>
 <br>
 <label>
    <b>Width</b>
    <input type="number" name="width" step="0.5" />
</label>
 <label>
    <b>Heigh</b>
    <input type="number" name="heigh" step="0.5" />
</label>
<button type="submit" >Submit</button>
    </form>

</main>
    
@endsection