<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use Illuminate\Http\Request;
use illuminate\view\view;

class NursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nurses=Nurse::latest()->paginate(5);
       return view('layouts.nurses.index',compact('nurses'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.nurses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'qualification' => 'required',
            'photo_path' => 'required',
            'register' => 'required'

        ]);
        Nurse::create($request->all());
        return redirect()->route('nurses.index')
                        ->with('success','nurse created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nurse $nurse)
    {
        return view('layouts.nurses.show',compact('nurse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nurse $nurse)
    {
        return view('layouts.nurses.edit',compact('nurse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request  $request, Nurse $nurse)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'qualification' => 'required',
            'photo_path' => 'required',
            'register' => 'required'

        ]);

          $nurse->update($request->all());
          return redirect()->route('nurses.index')
          ->with('success','nurse updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nurse $nurse)
    {
        //
        $nurse->delete();
        return redirect()->route('nurses.index')
        ->with('danger','nurse deleted successfully.');
    }
}
