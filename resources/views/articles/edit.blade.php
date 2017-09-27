@extends('app')

@section('content')


<h1>Edit</h1>

<hr/>

{!! Form::model($article, ['method' => 'PATH', 'action' => '[ArticlesController@update', $article->id]]) !!}
    
    <div class="form-group">
    {!! csrf_field() !!}
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {!! csrf_field() !!}
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {!! csrf_field() !!}
        {!! Form::label('published-at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at',null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {!! csrf_field() !!}
        {!! Form::submit('Add Article', null, ['class' => 'btn btn-primary form-control']) !!}
    </div>

    

{!! Form::close() !!}

@if ($errors->any())
  <ul class="alert alert-danger">
   @foreach($errors->all() as $error)
   <li>{{$error}}</li>
   @endforeach
   </ul>
@endif


@stop









