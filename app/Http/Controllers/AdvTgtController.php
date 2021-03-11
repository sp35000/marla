<?php

namespace App\Http\Controllers;

use App\Models\AdvTgt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvTgtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advtgt = AdvTgt::orderBy('id')->take(100)->get();
        return view('AdvTgt.index',['advtgt' => $advtgt]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdvTgt.create');
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
        AdvTgt::create([
          'url' => $request->url,
          'advtext' => $request->advtext
        ]);
            //return view('AdvTgt.show', ['advtgt' => $advtgt]);
            $advtgt = AdvTgt::orderBy('id')->take(100)->get();
            return view('AdvTgt.index',['advtgt' => $advtgt]);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvTgt  $advtgt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$advtgt = AdvTgt::findOrFail($id);
        //return view('AdvTgt.show', ['advtgt' => $advtgt]);
        $advtgt = AdvTgt::orderBy('id')->take(100)->get();
        return view('AdvTgt.index',['advtgt' => $advtgt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvTgt  $advtgt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advtgt = AdvTgt::findOrFail($id);
        return view('AdvTgt.edit', ['advtgt' => $advtgt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvTgt  $advtgt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $advtgt = AdvTgt::findOrFail($request->id);
        $advtgt->update([
          'url' => $request->url,
          'advtext' => $request->advtext
        ]);
            //return view('AdvTgt.show', ['advtgt' => $advtgt]);
            $advtgt = AdvTgt::orderBy('id')->take(100)->get();
            return view('AdvTgt.index',['advtgt' => $advtgt]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvTgt  $advtgt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->all());
        $advtgt = AdvTgt::findOrFail($request->id);
        $advtgt->delete();
        $advtgt = AdvTgt::orderBy('id')->take(100)->get();
        return view('AdvTgt.index',['advtgt' => $advtgt]);
    }
}
