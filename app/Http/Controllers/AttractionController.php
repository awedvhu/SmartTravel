<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attractions = DB::table('attractions')
            ->get();
        return view('attraction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('attraction.create');
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
        /*$request->validate([
            //'sid' => 'required',
            'title' => 'required',
            'information' => 'required',
            'date' => 'required',
            //'photo_path' => 'required|image|max:2048'
        ]);

        // * 讀取 upload file
        $image = $request->file('photo');
        // * 存檔 image
        $new_name = 'attraction_' . now()->format('YmdHis') . rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        // * 更新對應欄位

        $attraction = new Attraction([
            'title' => $request->get('title'),
            'information' => $request->get('information'),
            'date' => $request->get('date'),
            //'photo_path' => $new_name
        ]);
        //
        try {
            $attraction->save();
            return redirect('/attractions')->with('success', '推薦圖書資料已成功儲存!');
        } catch (\Exception $ex) {
            return redirect('/attractions')->with('fail', '錯誤: ' . $ex->getMessage());
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show(Attraction $attraction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Attraction $attraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attraction $attraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        //
    }
}
