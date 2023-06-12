<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines=Medicine::latest()->paginate(5);
       return view('layouts.medicines.index',compact('medicines'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.medicines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'price' => 'required',
            'quantity' => 'required',
            'code' => 'required',

        ]);
        Medicine::create($request->all());
        return redirect()->route('medicines.index')
                        ->with('success','medicine created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        return view('layouts.medicines.show',compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        return view('layouts.medicines.edit',compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
           
            'price' => 'required',
            'quantity' => 'required',
            'code' => 'required',

        ]);
        $medicine->update($request->all());
        return redirect()->route('medicines.index')
                        ->with('success','Medicine updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('medicines.index')
                        ->with('success','Medicine deleted successfully');
    }
}
