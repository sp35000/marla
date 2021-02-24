<?php

namespace App\Http\Controllers;

use App\Models\AdvSrc;
use Illuminate\Http\Request;

class AdvSrcController extends Controller
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
     * @param  \App\Models\AdvSrc  $advSrc
     * @return \Illuminate\Http\Response
     */
    public function show(AdvSrc $advSrc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvSrc  $advSrc
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvSrc $advSrc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvSrc  $advSrc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvSrc $advSrc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvSrc  $advSrc
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvSrc $advSrc)
    {
        //
    }
}
