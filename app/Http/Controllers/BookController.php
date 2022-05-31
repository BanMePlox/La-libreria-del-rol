<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['books']=Book::paginate(9);
        return view('books.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $sistemas = System::all();

        return view("books.create", compact('sistemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosLibro = request()->except('_token');
        if ($request->hasFile('file_path')){
            $datosLibro['file_path']=$request->file('file_path')->store('uploads','public');
        }
        Book::insert($datosLibro);
        return redirect("systems");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos=Book::all()->where('id', $id);
       return view ("books.show", compact('datos', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sistemas = System::all();
        $libro=Book::findorFail($id);
        return view('books.edit', compact('sistemas', 'libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosLibro = request()->except(['_token', '_method']);
        if ($request->hasFile('file_path')){
            $libro=Book::findorFail($id);
            Storage::delete('public/'.$libro->file_path);

            $datosLibro['file_path']=$request->file('file_path')->store('uploads','public');
        }
        Book::where('id','=',$id)->update($datosLibro);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro=Book::findorFail($id);

        if(Storage::delete('public/'.$libro->file_path)) {
            Book::destroy($id);
        }

        return redirect('books');
    }
}
