<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics_list = Comic::all();
        return view("comics.index", compact("comics_list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->headers->set('Content-Type','application/json');
        $data = $request->all();
        dd($request);

        $comic = new Comic();
        $comic->title= $data["title"];
        $comic->description= $data["description"];
        $comic->thumb= $data["thumb"];
        $comic->price= $data["price"];
        $comic->series= $data["series"];
        $comic->sale_date= $data["sale_date"];
        $comic->type= $data["type"];



        

        dd($comic);

        $comic->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comics = Comic::findOrFail($id);
        return view("comics.show", compact("comics"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}