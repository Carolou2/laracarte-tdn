<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laracarte</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--fontAwesome--}}
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">

        {{--CSS--}}
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{--<link  rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">--}}
    <style>
        body{
            font-family: 'Open-Sans',Helvetica,Arial, sans-serif;

        }
        footer{
            margin: 4em 0;
        }
    </style>

    </head>
    <body>
    @include('layouts/partials/_nav')


    @yield('content')

    @include('layouts/partials/_footer')

    {{--JS--}}
    <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>