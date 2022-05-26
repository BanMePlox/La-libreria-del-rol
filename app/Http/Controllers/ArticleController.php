<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['name']=Article::paginate(9);
        return view('articles.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosArticulo = request()->except('_token');
        if ($request->hasFile('file_path')){
            $datosArticulo['file_path']=$request->file('file_path')->store('uploads','public');
        }
        Article::insert($datosArticulo);
        return redirect("articles");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $datos=article::all()->where('id', $id);
           return view ("articles.show", compact('datos', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article=Article::findorFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosArticle = request()->except(['_token', '_method']);
        if ($request->hasFile('file_path')){
            $article=Article::findorFail($id);
            Storage::delete('public/'.$article->file_path);

            $datosArticle['file_path']=$request->file('file_path')->store('uploads','public');
        }
        Article::where('id','=',$id)->update($datosArticle);
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::findorFail($id);

        if(Storage::delete('public/'.$article->file_path)) {
            Article::destroy($id);
        }

        return redirect('articles');
    }
}
