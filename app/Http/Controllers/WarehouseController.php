<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Warehouse;
use View;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses=Warehouse::all();
        return View::make('warehouses.index')->with('warehouses', $warehouses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'warehouse_name' => 'required',
        ]);

        $warehouse=new Warehouse;
        $warehouse->warehouse_name=$request->warehouse_name;
        $warehouse->warehouse_address=$request->warehouse_address;
        $warehouse->company_id=1;
        $warehouse->save();

        return Redirect::to('warehouses');
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
        $validatedData=$request->validate([
            'warehouse_name' => 'required',
        ]);

        $warehouse=Warehouse::find($id);
        $warehouse->warehouse_name=$request->warehouse_name;
        $warehouse->warehouse_address=$request->warehouse_address;
        $warehouse->company_id=1;
        $warehouse->save();
        
        return Redirect::to('warehouses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Redirect::to('warehouses');
    }
}
