<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\BranchOffice;
use View;

class BranchOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch_offices=BranchOffice::all();
        return View::make('branch_offices.index')->with('branch_offices', $branch_offices);
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
            'branch_office_name' => 'required|max:255',
        ]);

        $branch_office = new BranchOffice;
        $branch_office->branch_office_name=$request->branch_office_name;
        $branch_office->branch_office_address=$request->branch_office_address;
        $branch_office->branch_office_email=$request->branch_office_email;
        $branch_office->branch_office_phone=$request->branch_office_phone;
        $branch_office->company_id=1;
        $branch_office->save();

        return Redirect::to('branch_offices');
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
            'branch_office_name' => 'required|max:255',
        ]);

        $branch_office = BranchOffice::find($id);
        $branch_office->branch_office_name=$request->branch_office_name;
        $branch_office->branch_office_address=$request->branch_office_address;
        $branch_office->branch_office_email=$request->branch_office_email;
        $branch_office->branch_office_phone=$request->branch_office_phone;
        $branch_office->company_id=1;
        $branch_office->save();

        return Redirect::to('branch_offices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch_office = BranchOffice::find($id);
        $branch_office->delete();
        return Redirect::to('branch_offices');
    }
}
