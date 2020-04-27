@extends('layouts.admin')


@section('content')

<h1>Create Page</h1>
<div class="row">
  <div class="col-sm-3">
        <img class='img-responsive img-rounded' src="{{$user->photos ? $user->photos->file : 'http://placehold.it/400x400'}}" alt="">
  </div>

  <div class='col-sm-9'>
  {!! Form::model($user,['method' => 'PATCH','action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}
      <div class="form-group">
        {{Form::label('name', 'Name :')}}
        {{Form::text('name',null,['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('email', 'Email :')}}
        {{Form::email('email',null,['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('role_id', 'role :')}}
        {{Form::select('role_id',[''=>'choose option'] + $roles,null,['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('is_active', 'Status :')}}
        {{Form::select('is_active',['1' => 'Active', '0' => 'Not Active'],null,['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('photo_id', 'photo_id :')}}
        {{Form::file('photo_id',null,['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('password', 'password :')}}
        {{Form::password('password',['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::submit('Create User',['class' => 'btn btn-primary'])}}
      </div>


  {!! Form::close() !!}

  {!! Form::open(['method' => 'DELETE','action'=>['AdminUsersController@destroy', $user->id],'files'=>true]) !!}
  <div class="form-group">
    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
  </div>

    {!! Form::close() !!}
  </div>

</div>




@include('includes.formerrors')

@stop
