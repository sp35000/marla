<?php

namespace App\Http\Controllers;

use App\Models\AdvLnk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvLnkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advlnk = AdvLnk::orderBy('id')->take(100)->get();
        return view('AdvLnk.index',['advlnk' => $advlnk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdvLnk.create');
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
        AdvLnk::create([
          'origin_fk' => $request->origin_fk,
          'target_fk' => $request->target_fk
        ]);
            //return view('AdvLnk.show', ['advlnk' => $advlnk]);
            $advlnk = AdvLnk::orderBy('id')->take(100)->get();
            return view('AdvLnk.index',['advlnk' => $advlnk]);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvLnk  $advlnk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$advlnk = AdvLnk::findOrFail($id);
        //return view('AdvLnk.show', ['advlnk' => $advlnk]);
        $advlnk = AdvLnk::orderBy('id')->take(100)->get();
        return view('AdvLnk.index',['advlnk' => $advlnk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvLnk  $advlnk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advlnk = AdvLnk::findOrFail($id);
        return view('AdvLnk.edit', ['advlnk' => $advlnk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvLnk  $advlnk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $advlnk = AdvLnk::findOrFail($request->id);
        $advlnk->update([
          'origin_fk' => $request->origin_fk,
          'target_fk' => $request->target_fk
        ]);
            //return view('AdvLnk.show', ['advlnk' => $advlnk]);
            $advlnk = AdvLnk::orderBy('id')->take(100)->get();
            return view('AdvLnk.index',['advlnk' => $advlnk]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvLnk  $advlnk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->all());
        $advlnk = AdvLnk::findOrFail($request->id);
        $advlnk->delete();
        $advlnk = AdvLnk::orderBy('id')->take(100)->get();
        return view('AdvLnk.index',['advlnk' => $advlnk]);
    }
}
