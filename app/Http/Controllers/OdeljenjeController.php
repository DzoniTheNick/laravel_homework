<?php

namespace App\Http\Controllers;

use App\Models\Odeljenje;
use Illuminate\Http\Request;

class OdeljenjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odeljenja = Odeljenje::all();
        return $odeljenja;
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
     * @param  \App\Models\Odeljenje  $odeljenje
     * @return \Illuminate\Http\Response
     */
    public function show($index)
    {
        $odeljenje = Odeljenje::find($index);
        return $odeljenje;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Odeljenje  $odeljenje
     * @return \Illuminate\Http\Response
     */
    public function edit(Odeljenje $odeljenje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Odeljenje  $odeljenje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Odeljenje $odeljenje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Odeljenje  $odeljenje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Odeljenje $odeljenje)
    {
        //
    }
}
