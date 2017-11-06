@extends('layout.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-5">
      <form class="" action="comment" method="post">
          <div class="form-group">
          <h2> viết bình luận </h2>
          <textarea type="text" class="form-control" rows="5" cols="30" id="" name="content" ></textarea>
          </div>
          <div class="form-group">
          <button type="submit" >submit</button>
        </div>
      </form>
  </div>
  @foreach($post as $posts)
  <div class="row">
  <div class="col-md-6 col-md-offset-5" data-postid={{ $posts->id }}>

        <div class="col-md-2">
          <b> <h4> {{ $posts->user->name}} </h4> </b>
          <img src="http://placehold.it/64x64" alt="" />
        </div>
        <div class="col-md-10">
          <p> {{ $posts->post }} </p>
          <i> <h6> post by ......... </h6> </i>
          <div>
              <a href="#" class="like" > like </a>|
              <a href="#" class="like" > dislike </a>|
              <a href="#"> edit </a>|
              <a href="#"> delete </a>|
          </div>
        </div>

      </div>
</div>
@endforeach
</div>

@endsection
