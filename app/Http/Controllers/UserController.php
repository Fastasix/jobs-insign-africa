<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userpost;
use Exception;

class UserController extends Controller
{
    public function insertuser(Request $request){

        $error = null;

        $request->validate([
            'civilite' => 'required',
            'lastname' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'datenaissance' => 'required',
            'paysresidence' => 'required',
            'nationalite' => 'required',
        ]);
        try{
            $insuser = new Userpost;
            $insuser->civilite = $request->civilite;
            $insuser->lastname = $request->lastname;
            $insuser->name = $request->name;
            $insuser->email = $request->email;
            $insuser->phone = $request->phone;
            $insuser->datenaissance = $request->datenaissance;
            $insuser->paysresidence = $request->paysresidence;
            $insuser->nationalite = $request->nationalite;
            $insuser->offres_id = $request->iddeloffre;
            $insuser->save();
        }
        catch(Exception $e){
            $error = $e->getMessage();
        }

        return view('resultatformulaire', compact('error'));
    }
}
