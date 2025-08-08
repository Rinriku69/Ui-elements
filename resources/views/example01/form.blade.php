@extends('layouts.main',[
    'title' => "Form",
])

@section('content')
<main>
    <form action="{{route('example01.result')}}" method="post">
    @csrf

      <label>
        <b>Price</b>
        <input type="number" name="price" step="0.5" required/>
      </label><br/>
      <label>
        <b>Discount(%)</b>
        <input type="number" name="discount" step="any" required/>
      </label><br/>
      
      <button type="submit" >Submit</button>
    </form>

</main>
    
@endsection