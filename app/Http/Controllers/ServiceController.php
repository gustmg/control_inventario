<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Service;
use View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return View::make('services.index')->with('services', $services);
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
            'service_name'=>'required',
            'service_price'=>'required',
        ]);

        $service = new Service;
        $service->service_name=$request->service_name;
        $service->service_description=$request->service_description;
        $service->service_internal_code=$request->service_internal_code;
        $service->service_price=$request->service_price;
        $service->company_id=1;
        $service->save();

        return Redirect::to('services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Redirect::to('services');
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
            'service_name'=>'required',
            'service_price'=>'required',
        ]);

        $service = Service::find($id);
        $service->service_name=$request->service_name;
        $service->service_description=$request->service_description;
        $service->service_internal_code=$request->service_internal_code;
        $service->service_price=$request->service_price;
        $service->company_id=1;
        $service->save();

        return Redirect::to('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);
        $service->delete();
        return Redirect::to('services');
    }
}
