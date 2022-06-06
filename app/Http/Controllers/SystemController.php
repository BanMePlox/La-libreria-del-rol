<?php

namespace App\Http\Controllers;

use App\Models\System;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['systems']=System::paginate(9);
        return view('systems.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("systems.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosSistema = request()->except('_token');
        if ($request->hasFile('file_path')){
            $datosSistema['file_path']=$request->file('file_path')->store('uploads','public');
        }
        System::insert($datosSistema);
        return redirect('systems');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function show(Request $rq, $id)
    {

        $datos=Book::all()->where('system_id', $id);
        $datosSistema=System::all();
        $sistema=System::findorFail($id);


       return view ("systems.show", compact('datos', 'sistema', 'datosSistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sistema=System::findorFail($id);
        return view('systems.edit', compact('sistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosSistema = request()->except(['_token', '_method']);
        if ($request->hasFile('file_path')){
            $sistema=System::findorFail($id);
            Storage::delete('public/'.$sistema->file_path);

            $datosSistema['file_path']=$request->file('file_path')->store('uploads','public');
        }
        System::where('id','=',$id)->update($datosSistema);
        return redirect('systems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $sistema=System::findorFail($id);

        if(Storage::delete('public/'.$sistema->file_path)) {
            System::destroy($id);
        }

        return redirect('systems');
    }
}
