<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal_detail;

class PersonalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sales/sales_index');
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }

    public function store(Request $request)
    {
        $this->validate(request(),[
//put fields to be validated here
        ]);

        $client= new Personal_detail();
        $client->address_1= $request['address_1'];
        $client->address_2= $request['address_2'];
        $client->residence_1= $request['residence_1'];
        $client->residence_2= $request['residence_2'];
        $client->zip_code_1= $request['zip_code_1'];
        $client->zip_code_2= $request['zip_code_2'];
        $client->phone_number_1= $request['telephone_number_1'];
        $client->phone_number_2= $request['telephone_number_2'];
        $client->fax_number= $request['fax_number'];
        $client->e_mail= $request['e-mail'];
        $client->client_info_id= 1;

// add other fields
        $client->save();

        return redirect('/sales/store');
    }
}
