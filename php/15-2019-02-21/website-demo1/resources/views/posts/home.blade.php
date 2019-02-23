@extends('layouts.app') 
@section('content') 

<h1 class="text-danger text-center text-uppercase">POSTS</h1>

<div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <table class="table table-hover table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col" class="">#</th>
              <th scope="col" class="">Title</th>
              <th scope="col" class="">Category</th>
              <th scope="col" class="">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $posts)
                
            <tr class="text-center">
                <th scope="row">{{$posts->id}}</th>
                <td>{{$posts->title}}</td>
                <td>{{$posts->category}}</td>
                <td class="d-flex align-items-center justify-content-around">
                    <form action="{{route('posts.show', ['id' => $posts->id])}}" method="get">
                    <button class="btn btn-sm btn-primary   rounded-0">
                        Show
                    </button>
                    </form>
                    <form action="{{route('posts.edit', ['id' => $posts->id])}}" method="get">
                    <button class="btn btn-sm btn-warning   rounded-0">
                        Edit
                    </button>
                    </form>
                    <form action="{{route('posts.destroy', ['id' => $posts->id])}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="delete">
                    <button class="btn btn-sm btn-danger   rounded-0">
                        Delete
                    </button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center"></div>
    </div>
  </div>


@endsection