@extends('layouts.main',[
    'title' => "Tax cal"
])

@section('content')

<main>
    <form action="" method="post">
        @csrf
     <label>
        <b>Price</b>
        <input type="number" name="price" step="any" value="0" />
     </label><br>
     <label>
        <input type="checkbox" name="vat" value="1"> <b>Has VAT(%7)</b>
     </label>
     <label><input type="radio" name="vat_in" value="1" checked/> VAT included in price
    </label>
    <label><input type="radio" name="vat_in" value="0.07" /> VAT excluded from price
    </label><br>


     <label>
        <input type="checkbox" name="tax" value="1"> <b>Has Tax</b>
     </label>
     <label><input type="radio" name="tax_value" value="0.05" /> 5%
    </label>
    <label><input type="radio" name="tax_value" value="0.03" checked/> 3%
    </label>
    <label><input type="radio" name="tax_value" value="0.02" /> 2%
    </label>
    <label><input type="radio" name="tax_value" value="0.01" /> 1%
    </label><br>


    <button type="submit">Submit</button>
    

    


    </form>

</main>

    
@endsection