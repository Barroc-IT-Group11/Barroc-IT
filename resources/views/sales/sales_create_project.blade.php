<!doctype html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="{{asset('../css/require/navbar.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('../css/require/create_project.css')}}"/>
    </head>
    <body>
        <div class="navbar">
            @include('../require_files/sales_navbar')
        </div>
        <div class="container">
            @include('../require_files/create_project')
        </div>
    </body>
</html>