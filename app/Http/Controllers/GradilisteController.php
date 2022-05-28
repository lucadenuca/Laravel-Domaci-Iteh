<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradilisteResource;
use App\Models\Gradiliste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GradilisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g = Gradiliste::all();
        return GradilisteResource::collection($g);
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
     * @param  \App\Models\Gradiliste  $gradiliste
     * @return \Illuminate\Http\Response
     */
    public function show(Gradiliste $gradiliste)
    {
        return new GradilisteResource($gradiliste);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gradiliste  $gradiliste
     * @return \Illuminate\Http\Response
     */
    public function edit(Gradiliste $gradiliste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gradiliste  $gradiliste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gradiliste $gradiliste)
    {
        $validator = Validator::make($request->all(), [
            'adresa' => 'required|string',
            'grad' => 'required|string',
            'investitor' => 'required|string',
            'broj_radnika' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $gradiliste->adresa = $request->adresa;
        $gradiliste->grad = $request->grad;
        $gradiliste->investitor = $request->investitor;
        $gradiliste->broj_radnika = $request->broj_radnika;
        $gradiliste->save();

        return response()->json('Gradilište je ažurirano.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gradiliste  $gradiliste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gradiliste $gradiliste)
    {
        $gradiliste->delete();
        return response()->json('Gradilište je obrisano.');
    }
}
