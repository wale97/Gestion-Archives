<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resultssearch');
    }

    public function search (Request $request)
    {
        $data = Document::select("objet","cote","reference","datesaisie")/*(['objet','cote','reference'])*/
                    ->where('objet', 'LIKE', '%'.$request->get('search').'%')
                    ->orwhere('cote','LIKE','%'.$request->get('search').'%')
                    ->orwhere('reference','LIKE','%'.$request->get('search').'%')
                    ->orwhere('datesaisie','LIKE','%'.$request->get('search').'%')
                    ->get();
     
        return view('voirdocs',['docs'=>$data]);    }
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
        //
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
