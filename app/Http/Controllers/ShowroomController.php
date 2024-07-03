<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $showrooms = Showroom::all();
        return view('dashboard.showrooms.list' , compact('showrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.showrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'showroomname' => 'required',
        ]);
        // dd($request);
        $showroom = new Showroom();
        $showroom->ShowroomName = $request->showroomname;
        $showroom->ShowroomAddress = $request->showroomaddress;
        $showroom->PhoneNumber = $request->phonenumber;
        $showroom->Email = $request->email;
        $showroom->Remarks = $request->remarks;
        $showroom->MapAddress = $request->mapaddress;
        $showroom->Area = $request->area;
        $showroom->save();
        return redirect()->route('showrooms.index')->with('success','showroom added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $showroom = Showroom::findOrFail($id);
        return view('dashboard.showrooms.show',compact('showroom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $showroom = Showroom::findOrFail($id);
        return view('dashboard.showrooms.edit',compact('showroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $showroom = Showroom::findOrFail($id);
       
        $showroom->update([
        $showroom->ShowroomName = $request->showroomname,
        $showroom->ShowroomAddress = $request->showroomaddress,
        $showroom->PhoneNumber = $request->phonenumber,
        $showroom->Email = $request->email,
        $showroom->Remarks = $request->remarks,
        $showroom->MapAddress = $request->mapaddress,
        $showroom->Area = $request->area,
        ]);
         return redirect()->route('showrooms.index')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $showrooms = Showroom::findOrFail($id);
        $showrooms->delete($id);
        return redirect()->route('showrooms.index');
    }
}
