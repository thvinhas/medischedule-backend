<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;
use App\Http\Resources\HospitalResource;
use App\Models\Hospital;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Hospital::all();
        return HospitalResource::collection($hospitals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHospitalRequest $request)
    {
        $hospital = Hospital::create($request->validated());
        return new HospitalResource($hospital);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreHospitalRequest $request, Hospital $hospital)
    {
        $hospital->update($request->validated());
        return new HospitalResource($hospital);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return response()->noContent();
    }
}
