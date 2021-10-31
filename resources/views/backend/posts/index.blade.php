@extends('backend.layouts.main')
@section('content')
<br></br>
<br></br>


  <div class="row">
    @foreach ($Myposting as $posting)
    <div class="col-xs-6 col-md-4">
      <div class="row">
        <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="{{ $posting->photo  }}"  alt="{{ $posting->title  }}">
        <div class="caption">
                <h4>{{ $posting->title  }}</h4>
                <p>{{ $posting->content  }}</p>
                <p> <a href="{{route('posts.edit',['id'=>$posting->id])}}" class="btn btn-default btn-xs" role="button">edit</a>
                   <a href="{{route('posts.destroy',['id'=>$posting->id])}}" class="btn btn-default btn-xs" role="button">Delete</a></p>
            </div>
            </div>
    </div>
    </div>
    </div>
    @endforeach


</div>

@endsection
