<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = comic::all();

        $data = [
            "catalogo" => $comicsList,
        ];

        return view("comics.index", $data);
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
        //recupero e valido tutti i dati
        $data = $request->validate([

            "title" => 'required|min:3|max:255',
            "description" => 'required',
            "thumb" => 'required',
            "price" => 'required',
            "series" => 'required',
            "sale_date" => 'required',
            "type" => 'required',
            "artists" => 'required',
            "writers" => 'required',

        ]);

        $data = $request->all();

        $new_comic = new comic();

        $new_comic->fill($data);
       

        $new_comic->save();

        // return redirect()->route("comics.show", $new_comic->id);
        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fumetto = comic::findOrFail($id);


        $data = [
            "fumetto" => $fumetto,
        ];

        return view("comics.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $allComics = comic::all();

        $data = [
            "comic" => $allComics[$id]
        ];

        return view("comics.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $comic = comic::find($id);

        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->thumb = $data["thumb"];
        $comic->price = $data["price"];
        $comic->series = $data["series"];
        $comic->sale_date = $data["sale_date"];
        $comic->type = $data["type"];
        $comic->artists = $data["artists"];
        $comic->writers = $data["writers"];

        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fumetto = comic::findOrFail($id);
        $fumetto->delete();
        
        return redirect()->route("comics.index");
    }
}
