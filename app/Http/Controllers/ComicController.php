<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.comicList', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.comicCreate');
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
        $sentData= $request->all();

        $comic = new Comic();
        // $comic->title= $sentData['title'];
        // $comic->description= $sentData['description'];
        // $comic->thumb= $sentData['thumb'];
        // $comic->price= $sentData['price'];
        // $comic->series= $sentData['series'];
        // $comic->sale_date= $sentData['sale_date'];
        // $comic->type= $sentData['type'];

        $lastID = Comic::query()->orderBy('id', 'desc')->first();
        $sentData['slug'] = Str::slug( $sentData['title'] , '-') . "-" . ( $lastID->id +1 );
        $comic->create($sentData);

        return redirect()->route('comics.index',compact('comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show( $slug)
    {
        //
        $comic = Comic::where('slug', $slug)->first();
        return view('comics.comic', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $slug)
    {
        //
        $comic = Comic::where('slug', $slug)->first();
        return view('comics.comicEdit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //
        $sentData= $request->all();

        $comic = Comic::where('slug', $slug)->first();


        // $comic->title= $sentData['title'];
        // $comic->description= $sentData['description'];
        // $comic->thumb= $sentData['thumb'];
        // $comic->price= $sentData['price'];
        // $comic->series= $sentData['series'];
        // $comic->sale_date= $sentData['sale_date'];
        // $comic->type= $sentData['type'];


        $sentData['slug'] = Str::slug( $sentData['title'] , '-') . "-" . ( $comic->id );
        $comic->update($sentData);

        return redirect()->route('comics.show', $comic->slug);
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        $comic = Comic::where('slug', $slug)->first();
        Comic::destroy($comic->id);
        return redirect()->route('comics.index');
    }
}
