<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >
</head>
<body>
	
    <div class="container">
        @yield('content')
    </div>  
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
</body>
</html>