<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

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

        $data = [
            'comics' => $comics
        ];
        
        return view('comics.index', $data);
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
        $formData = $request->all();
        $newComic= new Comic();
        // $newComic->title = $formData['title'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->type = $formData['type'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->description = $formData['description'];
        $newComic->fill($formData);
        $this->validation($formData);
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
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

        $data = [
            'comic' => $comic
        ];
        
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrfail($id);
        
        $data = [
            'comic' => $comic
        ];

        return view('comics.edit', $data);        
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
        $formData = $request->all();
        $this->validation($formData);
        


        $comic->update($formData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
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

    private function validation($data) {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|min:3|max:225',
                'thumb' => 'required|min:10|max:255',
                'type' => 'required',
                'price' => 'required|max:6',
                'sale_date' => 'required|max:50',
                'series' => 'required|max:50',
                'description' => 'nullable|min:50|max:500'
            ],
            [
                'title.required' => 'Titolo obbligatorio',
                'title.min' => 'Il titolo deve avere almeno 3 caratteri',
                'title.max' => 'Il titolo può avere un massimo di 225 caratteri',
                'thumb.required' => 'Il campo immagine è obbligatorio',
                'thumb.min' => 'Inserisci un link immagine valido',
                'thumb.max' => 'Il link immagine non può essere lungo più di 255 caratteri.',
                'type.required' => 'Il campo tipo è obbligatorio',
                'price.required' => 'Il campo prezzo è obbligatorio',
                'price.min' => 'devi inserire almeno un numero che abbia una cifra',
                'price.max' => 'il prezzo non può superare le sei cifre',
                'sale_date.required' => 'inserisci una data valida',
                'series.required' => 'inserisci la serie o il volume del Manga/Novel che vuoi creare',
                'description.min' => 'La descrizione deve essere lunga almeno 50 caratteri' ,
                'description.max' => 'La descrizione non può superare i 5000 caratteri'
            ]
          
        )->validate();

        return $validator;
    }



}
