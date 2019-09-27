@section('content')

<div class="container mt-5">

    @if(Session::has('success'))
    <div class="alert alert-success">
       {{ Session::get('success') }}
   </div>
   @endif

   {!! Form::open(['route'=>'contactus.store']) !!}

   {{ csrf_field() }}

   <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('Votre nom:') !!}
    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Entrer votre nom et prénom']) !!}
    <span class="text-danger">{{ $errors->first('name') }}</span>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Entrer votre email']) !!}
    <span class="text-danger">{{ $errors->first('email') }}</span>
</div>
<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    {!! Form::label('Message:') !!}
    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Entrer votre message']) !!}
    <span class="text-danger">{{ $errors->first('message') }}</span>
</div>
<div class="form-group">
    <button class="btn btn-warning">Envoyer</button>
</div>

{!! Form::close() !!}

</div>

@endsection