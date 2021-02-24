<?php

namespace App\Http\Controllers;

use App\Models\AdvTgt;
use Illuminate\Http\Request;

class AdvTgtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
     * @param  \App\Models\AdvTgt  $advTgt
     * @return \Illuminate\Http\Response
     */
    public function show(AdvTgt $advTgt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvTgt  $advTgt
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvTgt $advTgt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvTgt  $advTgt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvTgt $advTgt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvTgt  $advTgt
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvTgt $advTgt)
    {
        //
    }
}
