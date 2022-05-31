<?php

namespace App\Http\Controllers;

use App\Models\System;
use App\Models\Book;
use App\Models\Sub;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs['subs']=Sub::paginate(9);
        return view('subs.index',$subs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $sistemas = System::all();

        return view("subs.create", compact('sistemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosSub = request()->except('_token');

        Sub::insert($datosSub);
        return redirect("subs");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function show(Request $rq, $id)
    {
        $datos=Posts::all()->where('subs_id', $id);
        $datosSub=Sub::all();
        $sub=Sub::findorFail($id);
       return view ("subs.show", compact('datos','sub', 'id'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sistemas = System::all();
        $sub=Sub::findorFail($id);
        return view('subs.edit', compact('sub', 'sistemas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $datosSub = request()->except(['_token', '_method']);

            $sub=Sub::findorFail($id);

            $datosSub['file_path']=$request->file('file_path')->store('uploads','public');

        Sub::where('id','=',$id)->update($datosSub);
        return redirect('subs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $sub=Sub::findorFail($id);

            Sub::destroy($id);

            return redirect(route('subs.index'));
    }
}
}
