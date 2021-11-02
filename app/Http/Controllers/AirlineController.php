<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $airlines = Airline::all();
        return view('airlines.index', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('airlines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $airline = new Airline();
        $airline->name_airline = $request->name_airline;
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
            'name_airline' => 'required',
            'desc_business' => 'required',
            'disponibility' => 'required',
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


