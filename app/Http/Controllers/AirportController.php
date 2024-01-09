<?php

namespace App\Http\Controllers;


use App\Models\Airpot;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination\Paginator;


class AirportController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:airport-list|airport-create|airport-edit|airport-delete', ['only' => ['index','show']]);
        $this->middleware('permission:airport-create', ['only' => ['create','store']]);
        $this->middleware('permission:airport-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:airport-delete', ['only' => ['destroy']]);
    }

    public function index(): View
    {
        paginator::useBootstrap();
        $airports = Airpot::latest()->paginate(5);
        return view('airports.index',compact('airports'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(): View
    {
        return view('airports.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'airport_name' => 'required',
            'airport_type' => 'required',
            'owner' => 'required',
            'city' => 'required',
            'address' => 'required',
            'opdate' => 'required',
            'altitude' => 'required',
            'website' => 'required',
            'rwl' => 'required',
            'rws' => 'required',
            'number' => 'required',
            'geometrylat' => 'required',
            'geometrylng' => 'required',
        ]);
        $input = $request->all();

        Airpot::create($input);

        return redirect()->route('airports.index')
            ->with('success','Airport created successfully.');
    }
    public function show(Airpot $airport): View
    {
        return view('airports.show',compact('airport'));
    }

    public function edit(Airpot $airport): View
    {
        return view('airports.edit',compact('airport'));
    }
    public function update(Request $request, Airpot $airport): RedirectResponse
    {
        request()->validate([
            'airport_name' => 'required',
            'airport_type' => 'required',
            'owner' => 'required',
            'city' => 'required',
            'address' => 'required',
            'opdate' => 'required',
            'altitude' => 'required',
            'website' => 'required',
            'rwl' => 'required',
            'rws' => 'required',
            'number' => 'required',
            'geometrylat' => 'required',
            'geometrylng' => 'required',
        ]);
        $input = $request->all();
        $airport->update($input);
        return redirect()->route('airports.index')
            ->with('success','Airport updated successfully');
    }
    public function destroy(Airpot $airport): RedirectResponse
    {
        $airport->delete();

        return redirect()->route('airports.index')
            ->with('success','Airport deleted successfully');
    }
}
