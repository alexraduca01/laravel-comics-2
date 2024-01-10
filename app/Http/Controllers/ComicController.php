<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // inserire nuovo fumetto nel db
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
        // dd($request->all());
        // prendo i dati passati dal form dalla request
        // $request->validate([
        //     'title' => 'required|min:5|max:255|unique:comics',
        //     'type' => 'required|max:50',
        //     'price' => 'required|max:20',
        //     'series' => 'required|max:30',
        //     'sale_date' => 'required',
        //     'thumb' => 'url',

        // ]);
        $formData = $this->validation($request->all());
        $newComic = new Comic;
        // assegno i valori del form al nuovo prodotto
        $newComic->fill($formData);
        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->type = $formData['type'];
        // salvo il prodotto
        $newComic->save();
        // reindirizzo l'utente alla pagina del fumetto appena creato
        return to_route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // $formData = $request->all();
        $formData = $this->validation($request->all());
        // $comic->title = $formData['title'];
        // $comic->description = $formData['description'];
        // $comic->thumb = $formData['thumb'];
        // $comic->price = $formData['price'];
        // $comic->series = $formData['series'];
        // $comic->sale_date = $formData['sale_date'];
        // $comic->type = $formData['type'];
        $comic->fill($formData);
        $comic->update();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "Il fumetto $comic->title è stato eliminato");
    }
    /**
     * Summary of validation
     *
     */
    private function validation($data)
    {
        $validator = Validator::make($data, [

            'title' => 'required|min:5|max:255',
            'type' => 'required|max:50',
            'price' => 'required|max:20',
            'series' => 'required|max:30',
            'sale_date' => 'required',
            'thumb' => 'url',

        ],[
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'Il campo titolo deve avere massimo :max caratteri',
            'type.required' => 'Il campo tipo è obbligatorio',
            'type.max' => 'Il campo tipo deve avere massimo :max caratteri',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.max' => 'Il campo prezzo deve avere massimo :max caratteri',
            'series.required' => 'Il campo serie è obbligatorio',
            'series.max' => 'Il campo serie deve avere massimo :max caratteri',
            'sale_date.required' => 'Il campo data di uscita è obbligatorio',
            'thumb.url' => 'Il campo immagine deve essere un url',
        ])->validate();

        return $validator;
    }
}
