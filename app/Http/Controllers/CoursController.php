<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('cours.cours');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cours = new Cours;

    $cours->chapitre = request('chapitre');
     $cours->contenu= request('contenu');
     $cours->description=request('description');
     $cours->module= request('module');

     $cours->title =  $cours->contenu->getClientOriginalName();
     $cours->contenu->storeAs("./coursFile",$title);
    
            ////
            //  move_uploaded_file($contenu, $directionid);
                DB::insert('INSERT INTO cours(description,chapitre,contenu,module) VALUES (:description,:chapitre,:contenu,:module)',[
                        'module'=>$module,
                        'description'=>$description,
                        'chapitre'=>$chapitre,
                        'contenu'=>$title
                     ]);

          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
