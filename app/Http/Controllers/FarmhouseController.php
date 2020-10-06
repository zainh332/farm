<?php

namespace App\Http\Controllers;

use App\Models\farmhouse;
use App\Models\image;
use Illuminate\Http\Request;

class FarmhouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $farmhouse = farmhouse::find(1)->images;
       //$farmhouse = farmhouse::with(['images'])->get();
        //farmhouse = image::with(['farmhouse'])->get();
        // $image = image::all();
        //$farmhouse = farmhouse::all();
        //$img = image::all();
        //$farmhouse = new farmhouse();
        //$images = image::all();
        //$data = farmhouse::with('images')->get();


        //$farmhouse = farmhouse::with('image')->get();
        $farmhouse = farmhouse::all();
        return view('farmhouse', compact('farmhouse'));
         //return $farmhouse;
        //return  farmhouse::find(1)->images;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('farmhouse');
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
        // $farms = new farmhouse();
        // $farms->name = $request->name;
        // $save = $farms->save();
        // if ($save){
        //     return redirect()->route('farmhouse.index');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farmhouse  $farmhouse
     * @return \Illuminate\Http\Response
     */
    public function show(farmhouse $farmhouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farmhouse  $farmhouse
     * @return \Illuminate\Http\Response
     */
    public function edit(farmhouse $farmhouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farmhouse  $farmhouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farmhouse $farmhouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farmhouse  $farmhouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(farmhouse $farmhouse)
    {
        //
    }

    public function farmfilter(Request $req)
    { 
        if (empty($req->input('rooms'))) { 
        $minprice = $req->input('price-min');
        $maxprice = $req->input('price-max');
        $farmhouse = farmhouse::whereBetween('price', [$minprice, $maxprice])->get();
        return view('farmhouse', compact('farmhouse'));
    }

    if(empty($req->input('price-min'))){
        $number_of_rooms = $req->input('rooms');
        $minprice = 0;
        $maxprice = $req->input('price-max');
        $farmhouse = farmhouse::where('rooms', $number_of_rooms)->whereBetween('price', [$minprice, $maxprice])->get();
         return view('farmhouse', compact('farmhouse'));

    }
        

        $number_of_rooms = $req->input('rooms');
        $minprice = $req->input('price-min');
        $maxprice = $req->input('price-max');
        $farmhouse = farmhouse::where('rooms', $number_of_rooms)->whereBetween('price', [$minprice, $maxprice])->get();
         return view('farmhouse', compact('farmhouse', $farmhouse));



        // $minprice = $req->input('price-min');
        //$maxprice = $req->input('price-max');
        //$farmhouse = farmhouse::whereBetween('price', [$minprice, $maxprice])->get();
         //return $req;
        
    }

    // public function blabla(){
    //     return "hahahaahha";
    // }
}
