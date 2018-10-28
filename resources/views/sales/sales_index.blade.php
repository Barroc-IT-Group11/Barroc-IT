<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('../css/home.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('../require_files/sales_navbar')

<!-- mid center section admin page */ -->
<div class="container">
    <div class="selectdepartement">
        <div class="department_choice">
        <ul>
            <li>
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2><i class="far fa-calendar-plus"></i></h2>
                        </div>
                        <div class="flip-box-back">
                            <a href="{{ url('/sales/schedule_appointment') }}"><h2>SCHEDULE APPOINTMENT</h2></a>

                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2><i class="fas fa-users"></i></h2>
                        </div>
                        <div class="flip-box-back">
                            <a href="{{ url('/sales/client_information') }}"><h2>CLIENT INFORMATION</h2></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2><i class="fas fa-project-diagram"></i></h2>
                        </div>
                        <div class="flip-box-back">
                            <a href="{{ url('/sales/create_project') }}"><h2>CREATE PROJECT</h2></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2><i class="fas fa-calendar-alt"></i></h2>
                        </div>
                        <div class="flip-box-back">
                            <a href="{{ url('/sales/appointments') }}"><h2>APPOINTMENTS</h2></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2><i class="fas fa-plus"></i></h2>
                        </div>
                        <div class="flip-box-back">
                            <a href="{{ url('/sales/create_client') }}"><h2>CREATE CLIENT</h2></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </div>



    <!-- end mid center section admin page -->


</body>
</html>
