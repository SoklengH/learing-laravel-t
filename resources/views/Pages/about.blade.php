@extends('app')

@section('content')

    <h1>About my page na sir na!! {</h1>

    <h3>They have their own value</h3>

    <ul>
      @foreach($people as $person)
      <li>{{ $person }}</li>
      @endforeach
    </ul>

    <p> 
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, minus, architecto quos cupiditate rerum voluptatum porro sapiente molestias similique nemo eveniet repellat reiciendis quae aspernatur dolorum asperiores quod explicabo maxime.
    </p>

@stop


