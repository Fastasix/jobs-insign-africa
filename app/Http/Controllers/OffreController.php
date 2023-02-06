<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::all();
        return view('accueil', compact('offres'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recherche(Request $request)
    {
        $fonctioncles = $request->input('fonction');
        $payscles = $request->input('pays');
        $research = Offre::where('fonction','LIKE',"%{$fonctioncles}%")->where('pays', 'LIKE', "%{$payscles}%")->get();
        return view('recherche', compact('research', 'fonctioncles', 'payscles'));
    }

    public function offrecountrech(){
        $offrescount = Offre::all()->count();
        $rechercherecent = Offre::orderBy('date_emission', 'DESC')->take(3)->get();
        return view('accueil', compact('offrescount','rechercherecent'));
    }

    public function rechoffre($id){
        $offreid = Offre::where('id', $id)->first();
        if($offreid){
            $offreidpre = Offre::where('id', '<', $offreid->id)->max('id');
            $offreidsuiv = Offre::where('id', '>', $offreid->id)->min('id');
            return view('offre', compact('offreid', 'offreidpre', 'offreidsuiv'));
        }
        else{
            return redirect()->route('accueil');
        }
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
