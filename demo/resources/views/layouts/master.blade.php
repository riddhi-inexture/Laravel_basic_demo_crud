<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  @yield('content')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<script>
        $(document).ready(function(){
            $('.delete').click(function(){
                var delete_id = $(this).data('id');
                alert("hello");
                $.ajax({
                    url: 'customer/'+delete_id,
                    type: 'DELETE',
                    success: function(response){
                    // $(this).closest( "tr" ).remove();
                    alert(response);
                    }
                });
            });
          
        });
    </script>
</body>
</html>