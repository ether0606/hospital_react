<?php

namespace App\Http\Controllers\Api;

use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class DesignationController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Designation::get();
        return $this->sendResponse($data,"Designation list");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=Designation::create($request->all());
        return $this->sendResponse($data,"Designation created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        return $this->sendResponse($designation,"Designation data");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $designation=Designation::where('id',$id)->update($request->all());
        return $this->sendResponse($designation,"Designation updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        $designation=$designation->delete();
        return $this->sendResponse($designation,"Designation deleted successfully");
    }
}
