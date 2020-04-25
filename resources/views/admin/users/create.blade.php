@extends('layouts.admin')


@section('content')

<h1>Create Page</h1>

{!! Form::open(['method' => 'post','action'=>'AdminUsersController@store']) !!}
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
      {{Form::select('is_active',['1' => 'Active', '0' => 'Not Active'],0,['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::submit('Create User',['class' => 'btn btn-primary'])}}
    </div>

{!! Form::close() !!}

@include('includes.formerrors')

@stop
