<?php

namespace App\Http\Controllers;

use App\Models\SmartHome;
use Illuminate\Http\Request;

class SmartHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SmartHome::all();
       return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SmartHome $smartHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SmartHome $smartHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SmartHome $smartHome)
    {

        $smartHome->update(["status" => !$smartHome->status]);
        return response()->json(["message" => $smartHome]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SmartHome $smartHome)
    {
        //
    }
}
