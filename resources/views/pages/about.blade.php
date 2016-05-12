@extends('app')

@section('content')

<h1>About</h1>

@if (count($people))
  <h3>People I Like:</h3>
    <ul>
      @foreach ($people as $person)
        <li>{{ $person }}</li>
      @endforeach

    </ul>
@endif
  

  <p>
    One-stop source for all your documentation needs. Powerful, searchable online database of all Melissa Data products. Simple update process means up-to-date documentation in your hands quicker. Improved co-operation with you, our customer
  </p>

@stop