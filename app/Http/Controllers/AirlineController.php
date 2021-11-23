<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\City;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Airline $airlines){
        $airlines = $airlines->all();
      return view('airlines.index', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Airline $airlines, City $cities){
        $airlines = $airlines->all();
        $cities = $cities->all();
        return view('airlines.create', compact('airlines', 'cities')); 
       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, City $cities){

        $request->validate([
            'name_airline' => 'required|string|max:255',
            'desc_business' => 'required|string|max:255',
            'disponibility' => 'required|boolean',
        ]);

        $airline = new Airline();
        $airline->name_airline = $request->name_airline;
        $airline->city_id = $request->city_id;
       //  $airline->name_city = $request->name_city;
        $airline->desc_business = $request->desc_business;
        $airline->disponibility = $request->disponibility;
        $airline->save();
        return redirect()->route('airlines.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline) {
        return view('airlines.show', compact('airline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline){
        return view('airlines.edit', compact('airline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $airline) {
        $request->validate([
            'name_airline' => 'required|string|max:255',
            'desc_business' => 'required|string|max:255',
            'disponibility' => 'required|boolean',
        ]);

        $airline->update($request->all());

        return redirect()->route('airlines.index')->with('success', 'Airline updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $airline){
        $airline->delete();
        return redirect()->route('airlines.index')
            ->with('success','airlines deleted successfully');
    }
}


