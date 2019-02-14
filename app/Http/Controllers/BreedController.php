<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;
use App\Cat;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $breeds= Breed::all();

        // $data= [
        //     [
        //         'name' => 'Breed 50',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Breed 51',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ];

    
        // $breed= Breed::find(10);
        // $breed->delete();
        // $breeds= Breed::find(1);

        // $breeds->forceDelete();

        // $cat= Cat::find(1);
        // $cat->forceDelete();

        \DB::enableQueryLog();
        $cat = Cat::breedIdIsFive()->get();
        dd(\DB::getQueryLog());
        dd($cat);
        exit;
        // $breeds->restore();
        // $breeds= Breed::onlyTrashed()->orderBy('id', 'desc')->first();
        // dd($breeds->last());
        // $breeds= $breeds->last();
        $breeds->restore();
        dd($breeds);

        // \DB::enableQueryLog();
        $breed= Breed::insert($data);
        // dd(\DB::getQueryLog());

        dd($breed);
        // dd($breeds);
        return view('breeds.index', compact('breeds', 'cats'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listAllCatByBreedId($id)
    {
        $cats= Cat::where('breed_id', $id)->get();
        return view('cats.list-by-breed', compact('cats'));
    }
}
