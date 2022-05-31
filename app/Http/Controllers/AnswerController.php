<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AnswerController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        return view("answers.create", compact($id));
    }


    public function store(Request $request)
    {
        $datosAnswer = request()->except('_token');
        if(Auth::user()->id == $datosAnswer['user-id']) {
        Answer::insert($datosAnswer);
        return redirect("/posts/".$datosAnswer['post_id']);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Answer::findorFail($id);

        Answer::destroy($id);

        return redirect('/');
    }
}
