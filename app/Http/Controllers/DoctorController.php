<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use illuminate\view\view;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $doctors=Doctor::latest()->paginate(5);
       return view('layouts.doctors.index',compact('doctors'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'department' => 'required'
        ]);
        Doctor::create([
            'name'=>$request->name,
            'detail'=>$request->detail,
            'department'=>$request->department,
        ]);
        return redirect()->route('doctors.index')
                        ->with('success','doctor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('layouts.doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('layouts.doctors.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $doctor->update($request->all());
        return redirect()->route('doctors.index')
                        ->with('success','Doctor updated successfully');
                        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')
                        ->with('danger','Doctor deleted successfully');
    }
}
