<?php

namespace App\Http\Controllers;

use App\Models\Readings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReadingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $readings=new Readings();
        $readings->value=$request->value;
        $readings->type=$request->type;
        $readings->driver_id=$request->driver_id;
        $readings->save();
        return "saved";
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Readings  $readings
     * @return \Illuminate\Http\Response
     */
    public function data_by_id(Request $request)
    {
        $readings=DB::table("readings")->where("driver_id",$request->id)->get();
        //
        return $readings;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Readings  $readings
     * @return \Illuminate\Http\Response
     */
    public function edit(Readings $readings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Readings  $readings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Readings $readings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Readings  $readings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Readings $readings)
    {
        //
    }
}
