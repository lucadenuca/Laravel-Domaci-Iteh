<?php

namespace App\Http\Controllers;

use App\Http\Resources\SefResource;
use App\Models\Sef;
use Illuminate\Http\Request;

class SefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s = Sef::all();
        return SefResource::collection($s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\Sef  $sef
     * @return \Illuminate\Http\Response
     */
    public function show(Sef $sef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sef  $sef
     * @return \Illuminate\Http\Response
     */
    public function edit(Sef $sef)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sef  $sef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sef $sef)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sef  $sef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sef $sef)
    {
        $sef->delete();
        return response()->json('Šef je obrisan.');
    }
}
