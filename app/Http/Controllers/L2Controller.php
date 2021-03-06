<?php

namespace App\Http\Controllers;

use App\Models\L2;
use Illuminate\Http\Request;

class L2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l2s = L2::get();
                $l2s->load('client');
      return view('pages.l2',compact('l2s'));
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
     * @param  \App\Models\L2  $l2
     * @return \Illuminate\Http\Response
     */
    public function show(L2 $l2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\L2  $l2
     * @return \Illuminate\Http\Response
     */
    public function edit(L2 $l2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\L2  $l2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, L2 $l2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\L2  $l2
     * @return \Illuminate\Http\Response
     */
    public function destroy(L2 $l2)
    {
        //
    }
}
