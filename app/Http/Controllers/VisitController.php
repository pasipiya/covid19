<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use Stevebauman\Location\Facades\Location;



class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        if ($position = Location::get('103.244.172.139')) {
            // Successfully retrieved position.
             $position->longitude;
             $position->latitude;
        } else {
            // Failed retrieving position.
        }

        return view('pages.addVisit', compact('position'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        if ($position = Location::get('103.244.172.139')) {
        // Successfully retrieved position.
         $position->longitude;
         $position->latitude;
    } else {
        // Failed retrieving position.
    }


        return view('pages.addVisit', compact('position'));

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $position = Location::get('103.244.172.139');
        $visit = new Visit();
        $visit->date = request('date');
        $visit->time = request('time');
        $visit->duration = request('duration');
        $visit->longitude = $position->longitude;
        $visit->latitude = $position->latitude;
        $visit->save();
        

        return redirect('/add-visit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $visit = Visit::find($id);
        $visit->date = request('date');
        $visit->time = request('time');
        $visit->duration = request('duration');
        $visit->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visit = Visit::find($id);
        $visit->delete();
        
        return redirect('/');
    }
}
