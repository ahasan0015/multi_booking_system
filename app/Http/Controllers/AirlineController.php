<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $airlines = Airline::all();

        $airlines = Airline::from( 'airlines as a')
        ->select('a.id', 'a.airline_name','a.country')
        ->orderBy('a.id','desc')
        ->paginate(5);

        // dd($airlines);
        return view('admin.pages.airlines.index',compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.airlines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'airline_name'=>'required|min:2|max:20',
            'country'=>'required|min:3|max:20',
        ]);
        $airline = Airline::create([
            'airline_name'=>$request->airline_name,
            'country' => $request->country,
        ]);
        return redirect()->route('airlines-index')->with('success','Airlines Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $airline = Airline::find($id);

        return view('admin.pages.airlines.show',compact('airline'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $airline = Airline::find($id);
        $page = request('page', 1);
        
        return view('admin.pages.airlines.edit',compact('airline','page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $airline =Airline::find($id);
        $page = request('page', 1);
        $request->validate([
            'airline_name'=>'required|min:5|max:20',
            'country'=> 'required|min:2|max:5'
        ]);
        $airline->update([
            'airline_name'=> $request->airline_name,
            'country'=>$request->country,
        ]);
        return redirect()->route('airlines-index')->with('success', 'Airlines updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $airline = Airline::find($id);
        $airline->delete();
        // dd('deleted');
        return redirect()->route('airlines-index')->with('success', 'User Deleted Successfully');
    }
}
