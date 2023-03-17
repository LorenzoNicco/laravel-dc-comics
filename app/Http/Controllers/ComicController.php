<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// models
use App\Models\Comic;

// utilities
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    private function validateData($data) {
        $validator = Validator::make($data, [
            'title' => 'required|string',
            'description' => 'nullable',
            'thumb' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'price' => 'required|numeric|decimal:2',
        ], [
            'title.required' => 'Ci vuole un titolo',
            'price.numeric' => 'Il prezzo va scritto in numeri, non in lettere'
        ]) -> validate();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', [
            'comics' => $comics
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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

        $this->validateData($data);

        $singleComic = new Comic();
        $singleComic->title = $data['title'];
        $singleComic->description = $data['description'];
        $singleComic->thumb = $data['thumb'];
        $singleComic->series = $data['series'];
        $singleComic->sale_date = $data['sale_date'];
        $singleComic->type = $data['type'];
        $singleComic->price = $data['price'];
        $singleComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', [
            'comic' => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);   
        return view('comics.edit', [
            'comic' => $comic
        ]);
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
        $comic = Comic::findOrFail($id);
        $data = $request->all();

        $this->validateData($data);

        $comic->update($data);
        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
