<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create client</title>
    <link rel="stylesheet" type="text/css" href="{{asset('../css/home.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('../css/sales/sales_create_client.css')}}"/>
    <link rel="stylesheet" href="../../../public/css/create_invoice.css">
    <link rel="stylesheet" href="{{asset('css/create_invoice.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


@include('../require_files/sales_navbar')

<div class="main">
    <table class="table" id="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Client ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Company Name</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Creditworthy</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $item)
            @foreach($data2 as $items)
            <tr class="item{{$item->id}}">
                <td>{{$item->client_id}}</td>
                <td>{{$item->Prospect}}</td>
                <td>{{$item->company_name}}</td>
                <td>{{$items->phone_number_1}}</td>
                <td>{{$item->creditworthy}}</td>
                <td><button class="edit-modal btn btn-info"
                            data-info="{{$item->id}},{{$item->client_id}},{{$item->Prospect}},{{$item->company_name}},{{$item->phone_number_1}},{{$item->creditworthy}}">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                    </button>
                    <button class="delete-modal btn btn-danger"
                            data-info="{{$item->id}},{{$item->client_id}},{{$item->Prospect}},{{$item->company_name}},{{$item->phone_number_1}},{{$item->creditworthy}}">
                        <span class="glyphicon glyphicon-trash"></span> Delete
                    </button></td>
            </tr>
                @endforeach
        @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>


<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>