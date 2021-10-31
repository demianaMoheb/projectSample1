@extends('backend.layouts.main')
@section('content')
<br></br>
<br> </br>
<strong> here you can edit new posts </strong>
<br> </br>
<form class="form-group" action="{{route('posts.update',['id'=>$Myposting->id])}}"  method="POST" enctype="multipart/form-data">
  <div   >

    @csrf

    <label for="title">Add Tilte</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="add your title here" value="{{$Myposting->title}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your post with anyone else unless you allow this.</small>
    </div>
    <div class="form-group">
    <label for="content">Add content</label>
    <textarea class="form-control"  rows="3" id="content" name="content" >{{$Myposting->content}}</textarea>
  </div>

  <div class="custom-file">
      <label class="custom-file-label" for="photo">Choose photo</label>
      <input type="file" class="custom-file-input" id="photo" name="photo">
  </div>

  <button type="submit" class="btn btn-primary">update</button>
</form>

@endsection
