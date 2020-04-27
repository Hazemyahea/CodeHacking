@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_user'))

  <div class="alert alert-danger">
    {{session('deleted_user')}}
  </div>

@endif

<h1>Users</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">created</th>
      <th scope="col">Updated</th>
    </tr>
  </thead>
  <tbody>
    @if($users)
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td> <a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a> </td>
      <td><img height='100' src="{{$user->photos ? $user->photos->file : 'http://placehold.it/400x400'}}" alt=""></td>
      <td>{{$user->email}}</td>
      <td>{{$user->roles->name}}</td>
      <td>{{$user->is_active == 1 ? 'active' : 'not active'}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
      <td>{{$user->updated_at->diffForHumans()}}</td>

    </tr>
    @endforeach
    @endif
  </tbody>
</table>

@stop
