<?php

namespace App\Http\Controllers;

use App\Models\LatestNew;
use Illuminate\Http\Request;

class LatestNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $latest_new = LatestNew::all();
        return view('latestNew.index');
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
     * @param  \App\Models\LatestNew  $latestNew
     * @return \Illuminate\Http\Response
     */
    public function show(LatestNew $latestNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LatestNew  $latestNew
     * @return \Illuminate\Http\Response
     */
    public function edit(LatestNew $latestNew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LatestNew  $latestNew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LatestNew $latestNew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LatestNew  $latestNew
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatestNew $latestNew)
    {
        //
    }
}
