<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'EVoting') }}</title>
        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Scripts -->
        <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        @yield('imports')
    </head>

    <body>
       
       <ul class="nav nav-tabs">
        <li role="presentation" ><a href="/admin">Home</a></li>
         <li role="presentation"><a href="/info">info</a></li>
         <li role="presentation" class="active"><a href="#">Authorize</a></li>
        </ul>
      
        
    </body>
    
</html>
