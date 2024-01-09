<?php

namespace App\Http\Controllers;

use App\Models\Airpot;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $airports = Airpot::all();
        $initialMarkers = [];
        foreach ($airports as $airport) {
            $initialMarkers[] = [
                'id' => $airport->id,
                'name' => $airport->airport_name,
                'type' => $airport->airport_type,
                'website'=>$airport->website,
                'Owner'=>$airport->owner,
                'City'=>$airport->city,
                'Address'=>$airport->address,
                'OpenDate'=>$airport->opdate,
                'altitude'=>$airport->altitude,
                'RunWayLength'=>$airport->rwl,
                'RunWaySurface'=>$airport->rws,
                'Number'=>$airport->number,
                'GeometryLatitude'=>$airport->geometrylat,
                'GeometryLongitude'=>$airport->geometrylng,
                'position' => [
                    'lat' => $airport->geometrylat,
                    'lng' => $airport->geometrylng,
                ],
                'draggable' => false,

            ];
        }
        return view('dashboard', compact('initialMarkers','airport'));
    }

}
