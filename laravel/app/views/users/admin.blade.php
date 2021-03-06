@extends('layouts.master')

@section('content')

<h1>Gérer les utilisateurs</h1>

<table class="table table-stripped table-bordered">
  <thead>
      <tr>
          <th>Nom</th>
          <th>Status</th>
          <th>Actions</th>
      </tr>
  </thead>
<tbody>
      @foreach($users as $user)
      <tr>
          <th>{{ $user->username }}</th>
          <th>
            @if($user->is_admin)
            Administrateur
            @else
            Membre
            @endif
          </th>
          <th>
            {{ Form::open(['route'=>['users.permission',$user->id],'method'=>'POST']) }}
            @if($user->is_admin)
                {{ Form::submit('Rendre Membre',['class'=>'btn btn-primary']) }}
            @else
                {{ Form::submit('Rendre Administrateur',['class'=>'btn btn-primary']) }}
            @endif
            {{ Form::close() }}
            {{ Form::open(['route'=>['users.delete',$user->id],'method'=>'Delete']) }}
            {{ Form::submit('X',['class'=>'btn btn-danger']) }}
            {{ Form::close() }}
          </th>
      </tr>
      @endforeach
</tbody>
</table>


@stop
