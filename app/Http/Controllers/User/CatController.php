<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Cat;
use App\Breed;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats= Cat::with('breed')->get();
        // dd($cats);
        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breedIds= Breed::pluck('name', 'id');
        // dd($breedIds);
        return view('cats.create', compact('breedIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data= $request->all();
        // dd($data);
        Cat::create($data);
        return redirect()->route('list-cats');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::find($id);
        // dd($cat);
        return view('cats.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat= Cat::with('breed')->find($id);
        // dd($cat);
        $breedIds= Breed::pluck('name', 'id');
        return view('cats.edit', compact('cat', 'breedIds'));
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
        // dd($request->all(), $id);
        $cat = Cat::find($id);
        $data= $request->all();
        $cat->update($data);
        return redirect()->route('list-cats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // cach 1
        $cat= Cat::find($id);
        $cat->delete();

        //cach 2 
        // Cat::destroy($id);
        return redirect()->route('list-cats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listCatByBreedId($id)
    {
        
    }
}
