<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Breed;
use App\Cat;
use App\Http\Controllers\Controller;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breeds= Breed::all(); // lấy all data bảng breeds
        return view('breeds.index', compact('breeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Cat::where('breed_id', 5)
                    ->where('name', 'abc')
                    ->orderBy('name', 'desc')
                    ->get();
        return view('breeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Breed::create($data);
        return redirect()->route('list-breeds');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listCatsByBreedId($id)
    {
        $breed= Breed::find($id);
        $cats= Cat::where('breed_id', $id)->get();

        return view('breeds.list_cats', compact('cats', 'breed'));
    }

    
}
