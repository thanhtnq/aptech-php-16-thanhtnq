@extends('layouts.app') 
@section('content') @push('scripts')


<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="{{route('posts.update', ['id' => $post->id])}}" method="POST">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" placeholder="{{$post->title}}">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select name="category" id="" class="form-control">
            <option value="php">{{$post->category}}</option>
            <option value="laravel">laravel</option>
          </select>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="editor" cols="30" rows="10">{!! $post->content !!}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckfinder/ckfinder.js')}}"></script>
<script>
  var editor = CKEDITOR.replace('editor');
  CKFinder.setupCKEditor( editor );
</script>





















@endpush
@endsection