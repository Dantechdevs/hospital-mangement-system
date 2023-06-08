<?php

namespace App\Http\Controllers\block;

use App\Models\block\Block;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlocksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blocks=Block::latest()->paginate(5);
        return view('blocks.index',[
            'blocks'=>$blocks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('blocks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'blockfloor' => 'required|unique:blocks,blockfloor,except,id',
            'blockcode' => 'required|numeric',
            ]);

        Block::create([
            'blockfloor'         => $request->blockfloor,
            'blockcode'         => $request->blockcode,
        ]);
        return redirect()->route('blocks.index')
        ->with('success','Block Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $block=Block::findOrFail($id);
        return view('blocks.show',[
            'block'=>$block,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $block = Block::findOrFail($id);
        return view('blocks.edit',[
            'block'=>$block
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $block = Block::findOrFail($id);
        $request->validate([
            'blockfloor' => 'required',
            'blockcode' => 'required|numeric',
            ]);

        $block->update([
            'blockfloor'         => $request->blockfloor,
            'blockcode'         => $request->blockcode,
        ]);
        return redirect()->route('blocks.index')
        ->with('success','Block Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $block=Block::findOrFail($id);
        $block->delete();
        return redirect()->route('blocks.index')
                        ->with('danger','Block deleted successfully');

    }
}
