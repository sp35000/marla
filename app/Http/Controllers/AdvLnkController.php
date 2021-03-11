<?php

namespace App\Http\Controllers;

use App\Models\AdvSrc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvSrcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advsrc = AdvSrc::orderBy('id')->take(100)->get();
        return view('AdvSrc.index',['advsrc' => $advsrc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdvSrc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        AdvSrc::create(['name' => $request->name]);
            //return view('AdvSrc.show', ['advsrc' => $advsrc]);
            $advsrc = AdvSrc::orderBy('id')->take(100)->get();
            return view('AdvSrc.index',['advsrc' => $advsrc]);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvSrc  $advsrc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$advsrc = AdvSrc::findOrFail($id);
        //return view('AdvSrc.show', ['advsrc' => $advsrc]);
        $advsrc = AdvSrc::orderBy('id')->take(100)->get();
        return view('AdvSrc.index',['advsrc' => $advsrc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvSrc  $advsrc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advsrc = AdvSrc::findOrFail($id);
        return view('AdvSrc.edit', ['advsrc' => $advsrc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvSrc  $advsrc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $advsrc = AdvSrc::findOrFail($request->id);
        $advsrc->update(['name' => $request->name]);
            //return view('AdvSrc.show', ['advsrc' => $advsrc]);
            $advsrc = AdvSrc::orderBy('id')->take(100)->get();
            return view('AdvSrc.index',['advsrc' => $advsrc]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvSrc  $advsrc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->all());
        $advsrc = AdvSrc::findOrFail($request->id);
        $advsrc->delete();
        $advsrc = AdvSrc::orderBy('id')->take(100)->get();
        return view('AdvSrc.index',['advsrc' => $advsrc]);
    }
}
