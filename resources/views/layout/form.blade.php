@extends('layout.master')

  @section('content')
    <style media="screen">
        body {
            background: url("https://www.foxcomputers.nl/wp-content/uploads/foxwall.jpg") no-repeat ;
            background-size: cover;
        }
    </style>


    <div class="form col-md-3">
      <form class="" action="index.html" method="post">
          <div class="form-group">
            <label for="">User Name</label>
            <input type="text" class="form-control" id="" placeholder="user">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" id="" placeholder="password">
          </div>
          <input type="submit" value="post" >
      </form>
    </div>
@endsection
