<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Company;
use View;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=Company::find(1);
        return View::make('company.index')->with('company',$company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|max:255',
        ]);

        $company=New Company;
        $company->company_name=$request->company_name;
        $company->company_rfc=$request->company_rfc;
        $company->company_address=$request->company_address;
        $company->company_email=$request->company_email;
        $company->company_phone=$request->company_phone;
        $company->save();

        return Redirect::to('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|max:255',
        ]);

        $company=Company::find(1);
        $company->company_name=$request->company_name;
        $company->company_rfc=$request->company_rfc;
        $company->company_address=$request->company_address;
        $company->company_email=$request->company_email;
        $company->company_phone=$request->company_phone;
        $company->save();

        return Redirect::to('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
