<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothing;

class ClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clothings = Clothing::orderBy('id','desc')->get();
        // $clothing->all();
        return view('admin.clothing.add', ['clothings' => $clothings]); 
    //    return view('admin.clothing.add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'prix' => 'required|numeric|min:500'
        ]);
        $clothing = new Clothing;
        $clothing->create($request->all());
        // $clothing->save();

        return redirect()->back()->with('status', 'Vetements bien ajouter');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clothing = Clothing::find($id);
        return view('admin.clothing.edit', ['clothing' => $clothing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'prix' => 'required|numeric|min:500'
        ]);
        $clothing = Clothing::find($id);
        $clothing->update($request->all());
        return redirect('/dashboard/clothing')->with('update', 'Le vetement mis a jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clothing = Clothing::find($id);
        $clothing->delete();
        return redirect()->back()->with('delete', 'Vetement supprimer');
    }
}