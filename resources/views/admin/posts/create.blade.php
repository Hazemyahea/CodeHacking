@extends('layouts.admin')

@section('content')

<h1>Create Posts</h1>
<div class="row">
  {!! Form::open(['method' => 'post','action'=>'AdminPostsController@store','files'=>true]) !!}
      <div class="form-group">
        {{Form::label('title', 'Title :')}}
        {{Form::text('title',null,['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('categiry_id', 'Category :')}}
        {{Form::select('categiry_id',[''=>'choose option'] + $categories,null,['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('photo_id', 'photo_id :')}}
        {{Form::file('photo_id',null,['class' => 'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('body', 'body :')}}
        {{Form::textarea('body',null,['class' => 'form-control','row'=>3])}}
      </div>

      <div class="form-group">
        {{Form::submit('Create User',['class' => 'btn btn-primary'])}}
      </div>


  {!! Form::close() !!}
</div>


<div class="row">
@include('includes.formerrors')
</div>

@stop
