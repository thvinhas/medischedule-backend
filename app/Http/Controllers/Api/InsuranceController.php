<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInsuranceRequest;
use App\Http\Resources\InsuranceResource;
use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insurances = Insurance::all();
        return InsuranceResource::collection($insurances);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInsuranceRequest $request)
    {
        $insurance = Insurance::create($request->validated());
        return new InsuranceResource($insurance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreInsuranceRequest $request, Insurance $insurance)
    {
        $insurance->update($request->validated());
        return new InsuranceResource($insurance);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insurance $insurance)
    {
        $insurance->delete();
        return response()->noContent();
    }
}
