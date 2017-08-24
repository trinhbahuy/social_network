@extends('layout.master')

  @section('content')
    <style media="screen">
        body {
            background: url("https://www.foxcomputers.nl/wp-content/uploads/foxwall.jpg") no-repeat ;
            background-size: cover;
        }
    </style>

<div class="container">
  <div class="row">
    <div class="form col-md-3 col-md-offset-4">
      <form class="" action="login" method="post">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="">User Name</label>
            <input type="text" name="email" class="form-control" id="" placeholder="user">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" id="" placeholder="password">
          </div>
          <input type="submit" value="post" class="btn btn-primary" >
      </form>
    </div>
</div>
</div>
@endsection
