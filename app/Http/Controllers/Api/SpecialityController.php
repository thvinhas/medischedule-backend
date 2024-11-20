<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSpecialityRequest;
use App\Http\Resources\SpecialityResource;
use App\Models\Speciality;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities = Speciality::all();
        return SpecialityResource::collection($specialities);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecialityRequest $request)
    {
        $insurance = Speciality::create($request->validated());
        return new SpecialityResource($insurance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSpecialityRequest $request, Speciality $speciality)
    {
        $speciality->update($request->validated());
        return new SpecialityResource($speciality);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        $speciality->delete();
        return response()->noContent();
    }
}
