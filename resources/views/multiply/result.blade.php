@extends('layouts.main',[
    'title' => "Multiply Table"
])

@section('content')
<main>
    <div class="table">
<table>
<caption>Multiply Table form 2 to {{$n}}</caption>
@for($i=1;$i<=12;$i++)
<tr>
   @for($x=2;$x<=$n;$x++)

   <td>{{$x*$i}}</td>
   @endfor
</tr>
@endfor  




</table>

    </div>
</main>

    
@endsection