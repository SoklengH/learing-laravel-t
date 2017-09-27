@extend('app')

@section('content')


<h1>signupform</h1>

<div  class="signup-form">
  {!! Form::open() !!}

  {!! Form::text('email','',array('class'=>'email','id'=>"email","placeholder"=>'Email address'))!!}

    {!! Form::close() !!}

</div>


@stop