<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title >UI Element - {{$title}}</title>
    <link rel="stylesheet" type="text/css"
href="{{ asset('ui-styles.css') }}" />
</head>
<body>
    <header id="app-cmp-main-header">
      <h1>UI Element<span @class($titleClasses ?? [])>{{$title}}</span></h1>

      <nav>
      <ul class="app-cmp-links">
       <li><a href="{{route('example.form')}}">Example-01</a></li>
        <li><a href="{{route('area.form')}}">Area</a></li>
        <li><a href="{{route('multiply.form')}}">Multiply table</a></li>
        <li><a href="{{route('payment.form')}}">Payment</a></li>
       
      </ul>
        
    </nav>
    </header>

    <div class="content" id="app-cmp-main-content">
        @yield('content')
    </div>

    <footer id="app-cmp-main-footer">
      Created by Sirithep Pukim, Student ID: 662110103
    </footer>
</body>
</html>