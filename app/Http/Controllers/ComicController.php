<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
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
        $request->validate(
            [
                'title' => 'required|max:50',
                'thumb' => 'max:255',
                'price' => 'decimal:2',
                'series' => 'max:255',
                'sale_date' => 'date',
                'type' => 'required|max:50'
            ],
            [
                'title.required' => 'Il titolo del fumetto è obbligatorio',
                'title.max' => 'Il titolo del fumetto deve essere lungo al massimo 50 caratteri',
                'thumb.max' => "L'URL del fumetto deve essere lungo al massimo 50 caratteri",
                'price.decimal' => 'Inserisci il prezzo con un massimo di due decimali',
                'series.max' => 'Il nome della serie deve avere un massimo di 255 lettere',
                'sale_date.date' => 'Per favore, inserire una data valida',
                'type.required' => 'Il tipo del fumetto è obbligatorio',
                'type.max' => 'Il tipo del fumetto deve essere lungo al massimo 50 caratteri',
            ]
        );


        $form_data  = $request->all();

        $comic = new Comic();

        $comic->title = $form_data['title'];
        $comic->thumb = $form_data['thumb'];
        $comic->description = $form_data['description'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];

        $comic->save();

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
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate(
            [
                'title' => 'required|max:50',
                'thumb' => 'max:255',
                'price' => 'decimal:2',
                'series' => 'max:255',
                'sale_date' => 'date',
                'type' => 'required|max:50'
            ],
            [
                'title.required' => 'Il titolo del fumetto è obbligatorio',
                'title.max' => 'Il titolo del fumetto deve essere lungo al massimo 50 caratteri',
                'thumb.max' => "L'URL del fumetto deve essere lungo al massimo 50 caratteri",
                'price.decimal' => 'Inserisci il prezzo con un massimo di due decimali',
                'series.max' => 'Il nome della serie deve avere un massimo di 255 lettere',
                'sale_date.date' => 'Per favore, inserire una data valida',
                'type.required' => 'Il tipo del fumetto è obbligatorio',
                'type.max' => 'Il tipo del fumetto deve essere lungo al massimo 50 caratteri',
            ]
        );

        $form_data  = $request->all();


        $comic->title = $form_data['title'];
        $comic->thumb = $form_data['thumb'];
        $comic->description = $form_data['description'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];

        $comic->update();

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
