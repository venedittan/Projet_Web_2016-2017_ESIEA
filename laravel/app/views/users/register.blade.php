@extends('layouts.master')

@section('content')

{{ Form::open(['route'=>'users.store']) }}
  <div class="form-group">
    {{ Form::label('username','Nom d\'utilisateur'  ) }}
    {{ Form::text('username','',['class'=>'form-control']) }}
    @if($errors->first('username'))
      <div class"alert alert-danger">{{ $errors->first('username') }}</div>
    @endif
  </div>

  <div class="form-group">
    {{ Form::label('password','Mot de passe') }}
    {{ Form::password('password',['class'=>'form-control']) }}
    @if($errors->first('password'))
      <div class"alert alert-danger">{{ $errors->first('password') }}</div>
    @endif
  </div>

  <div class="form-group">
    {{ Form::label('password_confirm','Confimer le mot de passe') }}
    {{ Form::password('password_confirm',['class'=>'form-control']) }}
    @if($errors->first('password_confirm'))
      <div class"alert alert-danger">{{ $errors->first('password_confirm') }}</div>
    @endif
  </div>

  {{ Form::submit('S\'enregistrer',['class'=>'btn btn-primary']) }}

{{ Form::close() }}

@stop
