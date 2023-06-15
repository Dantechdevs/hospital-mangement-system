<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;
use illuminate\view\view;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prescriptions=Prescription::latest()->paginate(5);
       return view('layouts.prescriptions.index',compact('prescriptions'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.Prescriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
           
            'doctor_id' => 'required',
            'patients_id' => 'required',
            'appointments_id' => 'required',
            'medicines_issued' => 'required',
            'bp' => 'required',
            'cholestrol' => 'required',
            'blood_sugar' => 'required',
            'diagnosis' => 'required',
            'medicines' => 'required',

        ]);
        Prescription::create($request->all());
        return redirect()->route('prescriptions.index')
                        ->with('success','prescription created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return view('layouts.prescriptions.show',compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         return view('layouts.prescriptions.edit',compact('prescription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
           
            'doctor_id' => 'required',
            'patients_id' => 'required',
            'appointments_id' => 'required',
            'medicines_issued' => 'required',
            'bp' => 'required',
            'cholestrol' => 'required',
            'blood_sugar' => 'required',
            'diagnosis' => 'required',
            'medicines' => 'required',

        ]);
          //$Prescription->update($request->all());
         return redirect()->route('prescriptions.index')
         ->with('success','Prescription updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       // $prescription->delete();
        return redirect()->route('prescriptions.index')
                         ->with('success','prescription deleted successfully');
    }
}
