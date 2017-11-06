<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>no title</title>

    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body >
    @yield('content')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".like").click(function(e){
                  e.preventDefault();
                  var isLike = e.target.previousElementSibling == null ;
                  var postId = e.target.parentNode.parentNode.parentNode.dataset['postid'];
                  console.log(isLike);
                  console.log(postId);
                  $.ajax({
                      method: "POST",
                      url: 'like',
                      data: {is_like: isLike, post_id: postId, _token: "{{ csrf_token() }}" }
                  }).done(function(data){
                      alert(data);
                  });
            });
        });
    </script>
  </body>
  </html>
