<!DOCTYPE html>
<html lang="eng">
<head>

  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>

<body>

    <div class="container">

        @if (Session::has('flash_message'))


        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>

        @endif
    
        @yield('content')
    
    </div>


    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <script>
      $('div.alert').not('.alert-important').delay(3000).slideUp(300)
    </script>

    @yield('footer')

</body>
</html>




































