<?php

namespace App\Http\Controllers;

use App\Models\Dht22;
use App\Models\max_suhu;
use Illuminate\Http\Request;

class Dht22Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dht22::first();
        return response()->json($data);
    }
    public function indexMax()
    {
        $data = max_suhu::first();
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
    public function show(Dht22 $dht22)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dht22 $dht22)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dht22 $dht22)
    {
        $temp = $request->temp;
        $humd = $request->humd;

        $result = Dht22::first();
        $result->update(["temperature" => $temp,"humidity" => $humd]);
        return response()->json( $result);
    }

    public function updateMax(Request $request, max_suhu $max_suhu)
    {
        $inputan = $request->max_temp;
        $max_suhu->update(["max_temp" => $inputan]);
        return back();
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dht22 $dht22)
    {
        //
    }
}
