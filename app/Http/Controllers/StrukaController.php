<?php

namespace App\Http\Controllers;

use App\Models\Struka;
use Illuminate\Http\Request;

class StrukaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struke = Struka::all();
        return $struke;
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
     * @param  \App\Models\Struka  $struka
     * @return \Illuminate\Http\Response
     */
    public function show($index)
    {
        $struka = Struka::find($index);
        return $struka; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Struka  $struka
     * @return \Illuminate\Http\Response
     */
    public function edit(Struka $struka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struka  $struka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struka $struka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struka  $struka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struka $struka)
    {
        //
    }
}
