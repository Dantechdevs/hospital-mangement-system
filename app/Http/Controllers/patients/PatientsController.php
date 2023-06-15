<?php

namespace App\Http\Controllers\patients;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientsFormRequest;
use App\Http\Requests\UpdatepatientsFormRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('patients.index', [
            'patients' => Patient::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientsFormRequest $request)
    {
        //
        $request->validated();
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('patients/images'), $imageName);
        Patient::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'age' => $request->age,
            'birthplace' => $request->birthplace,
            'nationality' => $request->nationality,
            'occupation' => $request->occupation,
            'image' => $imageName,
            'CivilStatus' => $request->CivilStatus,
            'religion' => $request->religion,
            'guardian' => $request->gaurdian
        ]);
        return redirect(route('patients.index'))
            ->with('success', 'New Patient added successfully ');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $patient=Patient::findOrFail($id);
        return view('patients.show',[
            'patient'=>$patient,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $patient=Patient::findOrFail($id);
        return view('patients.edit',[
            'patient'=>$patient,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepatientsFormRequest $request, string $id)
    {
        //
        $request->validated();
        $patient=Patient::findOrFail($id);
        $imageName = $patient->image;
        $patient->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'age' => $request->age,
            'birthplace' => $request->birthplace,
            'nationality' => $request->nationality,
            'occupation' => $request->occupation,
            'image' => $imageName,
            'CivilStatus' => $request->CivilStatus,
            'religion' => $request->religion,
            'guardian' => $request->gaurdian

       ] );
       return redirect(route('patients.index'))
       ->with('success', 'Patient Updated successfully ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $patient=Patient::findOrFail($id);
        $patient->delete();
        return redirect(route('patients.index'))
        ->with('danger', 'Patient Updated successfully ');
    }
}
