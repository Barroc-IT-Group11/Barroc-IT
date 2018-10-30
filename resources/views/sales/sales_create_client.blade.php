<!doctype html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create client</title>
        <link rel="stylesheet" type="text/css" href="{{asset('../css/home.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('../css/sales/sales_create_client.css')}}"/>
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
        <div class="container">
            <div class="create_client_grid">
                <form method="post" action="{{ route('store') }}">
                    @csrf
                    <div class="create-client-row1">
                        <div class="box">
                            <input type="text" name="contact_name" placeholder="Name">
                        </div>

                        <div class="couple">
                            <input type="text" name="address_1" placeholder="Address 1">
                            <input type="text" name="address_2" placeholder="Address 2*">
                        </div>

                        <div class="couple">
                            <input type="text" name="zip_code_1" placeholder="Zip Code 1">
                            <input type="text" name="zip_code_2" placeholder="Zip Code 2*">
                        </div>

                        <div class="box">
                            <input type="text" name="fax_number" placeholder="Fax number*">
                            <input type="text" name="last_contact_date" placeholder="Last Contact Date">
                            <input type="text" name="date_of_action" placeholder="Date of Action">
                            <input type="text" name="next_action" placeholder="Next Action">
                        </div>
                    </div>

                    <div class="create-client-row2">
                        <div class="box">
                            <input type="text" name="company_name" placeholder="Company Name">
                        </div>
                        <div class="couple">
                            <input type="text" name="residence_1" placeholder="Residence 1">
                            <input type="text" name="residence_2" placeholder="Residence 2*">
                        </div>

                        <div class="couple">
                            <input type="text" name="telephone_number 1" placeholder="Telephone Number 1">
                            <input type="text" name="telephone_number 2" placeholder="Telephone Number 2*">
                        </div>
                        <div class="box">
                            <input type="text" name="e-mail" placeholder="e-mail">
                            <input type="text" name="sales_percentage" placeholder="Sales Percentage">
                        </div>
                    </div>

                    <div class="create-client-row3">
                        <div class="box">
                            <input type="text" name="initials" placeholder="Initials">
                        </div>

                        <div class="couple">
                            <input type="text" name="offer_status" placeholder="Offer Status">
                            <input type="text" name="offer_numbers" placeholder="Offer Numbers">
                        </div>
                        <div class="box">
                            <select name="credit_worthy">
                                <option value="" disabled selected>Credit Worthy Y/N</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>

                            <select name="prospect/client">
                                <option value="" disabled selected>Prospect/Client</option>
                                <option value="0">Prospect</option>
                                <option value="1">Client</option>
                            </select>

                            <input type="text" name="project_name" placeholder="Prospect name">
                            <p>* Optional</p>
                            <input type="submit" value="save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>