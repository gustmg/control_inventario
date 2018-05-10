<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\RawMaterial;
use App\RawMaterialCategory;
use App\MeasurementUnit;
use View;

class RawMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
            'raw_material_name' => 'required',
            'raw_material_price' => 'required',
        ]);

        $raw_material = new RawMaterial;
        $raw_material->raw_material_name = $request->raw_material_name;
        $raw_material->raw_material_description = $request->raw_material_description;
        $raw_material->raw_material_internal_code = $request->raw_material_internal_code;
        $raw_material->raw_material_part_number = $request->raw_material_part_number;
        $raw_material->raw_material_price = $request->raw_material_price;
        $raw_material->company_id = 1;
        $raw_material->raw_material_category_id = $request->raw_material_category_id;
        $raw_material->measurement_unit_id = $request->measurement_unit_id;
        $raw_material->save();

        return Redirect::to('raw_material_categories/'.$request->raw_material_category_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
            'raw_material_name' => 'required',
            'raw_material_price' => 'required',
        ]);

        $raw_material = RawMaterial::find($id);
        $raw_material->raw_material_name = $request->raw_material_name;
        $raw_material->raw_material_description = $request->raw_material_description;
        $raw_material->raw_material_internal_code = $request->raw_material_internal_code;
        $raw_material->raw_material_part_number = $request->raw_material_part_number;
        $raw_material->raw_material_price = $request->raw_material_price;
        $raw_material->company_id = 1;
        $raw_material->raw_material_category_id = $request->raw_material_category_id;
        $raw_material->measurement_unit_id = $request->measurement_unit_id;
        $raw_material->save();

        return Redirect::to('raw_materials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $raw_material = RawMaterial::find($id);
        $raw_material->delete();
        return Redirect::to('raw_materials');
    }
}
