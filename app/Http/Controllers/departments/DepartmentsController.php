<?php

namespace App\Http\Controllers\departments;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\block\Block;
use App\Models\hod\Hod;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departments=Department::latest()->paginate(5);
        return view('departments.index',[
          'departments'=>$departments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blockids=Block::all();
        $hodids=Hod::all();
        return view('departments.create',[
            'blockids'=> $blockids,
            'hods'=>$hodids,
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:30',
            'description' => 'required',
            'hodid' => 'required|numeric|unique:departments,hod_id,except,id',
            'blockid' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('department/images'), $imageName);
            
            Department::create([
                'name'        => $request->name,
                'block_id'   => $request->blockid,
                'description' => $request->description,
                'hod_id' => $request->hodid,
                'photo_path'  => $imageName,
            ]);
            return redirect(route('departments.index'))
            ->with('success','Department successfully added'); 
      
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
       // dd($id);
        $department=Department::findOrFail($id);
        return view('departments.show',[
            'department'=>$department,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $blockids=Block::all();
        $hodids=Hod::all();
        $department=Department::findOrFail($id);
        return view('departments.edit',[
            'blockids'=> $blockids,
            'hods'=>$hodids,
            'department'=>$department
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:30',
            'description' => 'required',
            'hodid' => 'required|numeric|unique:departments,hod_id,except,id',
            'blockid' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('department/images'), $imageName);
            $department=Department::findOrFail($id);
            $department->update([
                'name'        => $request->name,
                'block_id'   => $request->blockid,
                'description' => $request->descriptions,
                'hod_id' => $request->hodid,
                'photo_path'  => $imageName,
            ]);
            return redirect(route('departments.index'))
            ->with('success','Department successfully Updated'); 
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $department=Department::findOrFail($id);
        $department->delete();
        return redirect()->route('departments.index')
                        ->with('danger','Doctor deleted successfully');

    }
}
