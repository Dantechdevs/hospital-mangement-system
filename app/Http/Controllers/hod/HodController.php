<?php

namespace App\Http\Controllers\hod;

use App\Models\hod\Hod;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor;

class HodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $hods=Hod::with(['department','doctor'])->latest()->paginate(5);
        return view('hods.index',[
            'hods'=>$hods,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $doctors=Doctor::all();
        return view('hods.create',[
            'doctors'=>$doctors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'doctor' => 'required|numeric|unique:hods,doctor_id,except,id',
            ]);
            
        Hod::create([
            'doctor_id'         => $request->doctor,
        ]);
        return redirect()->route('hods.index')
        ->with('success','Hod  Created successfully');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $hod=Hod::findOrFail($id);
      //  $hodp=Hod::whereBelongsTo('department')->get();
        return view('hods.show',[
            'hod'=>$hod,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $doctor=Doctor::findOrFail($id);
        return view('hods.edit',[
            'doctor'=>$doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'doctor' => 'required|numeric|unique:hods,doctor_id,except,id',
            ]);
            $hod=Doctor::findOrFail($id);
        $hod->update([
            'doctor_id'         => $request->doctor,
        ]);
        return redirect()->route('hods.index')
        ->with('success','Hod  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $hod=Hod::findOrFail($id);
        $hod->delete();
        return redirect()->route('hods.index')
                        ->with('danger','Hod  deleted successfully');
    }
}
