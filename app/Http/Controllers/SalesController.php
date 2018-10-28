<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return view('sales/sales_index');
    }

    public function schedule_appointment()
    {
        return view('sales/sales_schedule_appointment');
    }

    public function client_information()
    {
        return view('sales/sales_client_information');
    }

    public function create_project()
    {
        return view('sales/sales_create_project');
    }

    public function appointments()
    {
        return view('sales/sales_appointments');
    }

    public function create_client()
    {
        return view('sales/sales_create_client');
    }



}
