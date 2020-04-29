@extends('layouts.admin')

@section('content')

<h1>Posts</h1>
<table class="table">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">user</th>
     <th scope="col">category</th>
     <th scope="col">photo</th>
     <th scope="col">title</th>
     <th scope="col">body</th>
     <th scope="col">created</th>
     <th scope="col">Updated</th>
   </tr>
 </thead>
 <tbody>
   @if($posts)
   @foreach($posts as $post)
   <tr>
     <th scope="row">{{$post->id}}</th>
     <td>{{$post->user->name}} </td>
     <td>{{$post->category->name}}</td>
     <td> <img width="100" src="{{$post->photo->file}}" alt=""> </td>
     <td>{{$post->title}}</td>
     <td>{{$post->body}}</td>
     <td>{{$post->created_at->diffForHumans()}}</td>
     <td>{{$post->updated_at->diffForHumans()}}</td>

   </tr>
   @endforeach
   @endif
 </tbody>
</table>
@stop
