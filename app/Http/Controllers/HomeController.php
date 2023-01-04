<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('pages.home');
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
        
        /*dd($request->all());*/
        $request->validate([
            'selecttypedoc'=>'required',
            'selectref'=>'required',
            'selectdate'=>'required',
            'selectobj'=>'required',
            'selectserie'=>'',
            'custom'=>'',
            'selectcote'=>'required',
            'selectfile'=>'required|mimes:pdf,xlx,csv,docx,png,zip,rar,jpeg',
            'selectobs'=>'required'
        ]);
        //get filename 
        $fileName = time().'.'.$request->selectfile->extension();
        $request->selectfile->storeAs('uploads', $fileName);

            $serie="";
            if($request->input("customSerie")){
                 $serie = $request->input("customSerie");
             } else{
                 $serie = $request->input("selectserie");
            }

        $document = new Document();
        $document->typedoc=$request->input('selecttypedoc');
        $document->reference=$request->input('selectref');
        $document->datesaisie=$request->input('selectdate');
        $document->objet=$request->input('selectobj');
        $document->serie=$serie;
        $document->cote=$request->input('selectcote');
        $document->nomfichier=$fileName;
        $document->observations=$request->input('selectobs');
        $document->save();

        return back()->with('successMessage','Bravo! Votre document a été créé avec succès')
                     ->with('file',$fileName);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function voir(){
        $docs=DB::select('select * from document');
        return view('voirdocs',['docs'=>$docs]);
    }


    public function show($id)
    {
        //
      /*  $docs = Document::find($id);
        return view('voirdocs')->with('docs', $docs);*/
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
