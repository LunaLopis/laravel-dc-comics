<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);
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
        $form_data = $this->validation($request->all());


        // $request->validate();
        // $form_data = $request->all();
        $comic = new Comic();
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->cover_image = $form_data['cover_image'];
        $comic->thumb2 = $form_data['thumb2'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = $form_data['artists'];
        $comic->writers = $form_data['writers'];
        
         $comic->save();
         return redirect()-> route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $form_data = $this->validation($request->all());
        return view('comics.edit', compact('comic'));
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
        $form_data = $request->except('_token');
        $comic->update($form_data);
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
       
       $comic->delete(); 
       return redirect()->route('comics.index');
    }   

    private function validation($data){
        $validator = Validator::make($data,
                [
                    'title' => 'required|max:255',
                    'description' => 'required',
                    'thumb' => 'nullable|url|max:255',
                    'cover_image' => 'nullable|max:255',
                    'thumb2' => 'nullable|url|max:255',
                    'price'=> 'required',
                    'series'=>'required',
                    'sale_date'=> 'required|date',
                    'type'=>'required',
                    'artists' => 'required',
                    'writers' => 'required',
        
                ],
                [
                    'title.required'=> 'il titolo è obbligatorio',
                    'title.max'=> 'max 255',
                    'description.required' => 'descrizione obbligatoria',
                    'thumb.required' => 'url non valido',
                    'thumb.max'=> 'max 255',
                    'price.required' => 'il prezzo è obbligatorio',
                    'series.required' => 'campo obbligatorio',
                    'sale_date.required' => 'campo obbligatorio',
                    'sale_date.date' => 'inserisci una data valida',
                    'type.required' => 'campo obbligatorio',
                    'artists.required' => 'campo obbligatorio, inserisci i dati nel seguente formato: ["Artist1", "Artist2", "Artist3"]',
                    'writers.required' => 'campo obbligatorio, inserisci i dati nel seguente formato: ["Artist1", "Artist2", "Artist3"]',

                ]

            )->validate();
            return $validator;
    }
}
