<?php

namespace App\Http\Controllers;

use App\Client_information;
use Illuminate\Http\Request;
use App\Personal_detail;
use App\Contact_people;


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


        $person= new Contact_people();
        $person->contact_person_id= 1;
        $person->contact_name= $request['contact_name'];
        $person->initials= $request['initials'];
        $person->last_contact_date= $request['last_contact_date'];


// add other fields
        $person->save();

        $info= new Client_information();
        $info->Prospect= $request['prospect/client'];
        $info->creditworthy= $request['credit_worthy'];
        $info->company_name= $request['company_name'];
        $info->offer_status= $request['offer_status'];
        $info->offer_numbers= $request['offer_numbers'];
        $info->client_info_id= 1;
        $info->client_id= 1;

// add other fields
        $info->save();

        return redirect('/sales/store');
    }
}
