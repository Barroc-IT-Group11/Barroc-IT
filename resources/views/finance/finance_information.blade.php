<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Client Information</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="../../../public/css/create_invoice.css">
    <link rel="stylesheet" href="{{asset('css/create_invoice.css')}}">
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script
            src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
</head>
<body>

<nav>
    <h1><b>BARROC IT</b><br>Software for real</h1>

    <h2>Finance</h2>
    <div class="tooltip"><h2>?</h2>
        <span class="tooltiptext">Tooltip text</span>
    </div>
    </div>
    <div class="navbuttons">
        <button class="navbutton"><span>Client Information</span></button>
        <button class="navbutton"><span>Create Invoice</span></button>
        <button class="navbutton"><span>Overview Invoices</span></button>
    </div>
</nav>

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