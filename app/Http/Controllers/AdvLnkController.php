<?php

namespace App\Http\Controllers;

use App\Models\AdvLnk;
use Illuminate\Http\Request;

class AdvLnkController extends Controller
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
     * @param  \App\Models\AdvLnk  $advLnk
     * @return \Illuminate\Http\Response
     */
    public function show(AdvLnk $advLnk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvLnk  $advLnk
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvLnk $advLnk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvLnk  $advLnk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvLnk $advLnk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvLnk  $advLnk
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvLnk $advLnk)
    {
        //
    }
}
