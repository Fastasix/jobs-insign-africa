<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function insertuser(Request $request){

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

        $insuser = new User;
        $insuser->civilite = $request->civilite;
        $insuser->lastname = $request->lastname;
        $insuser->name = $request->name;
        $insuser->email = $request->email;
        $insuser->phone = $request->phone;
        $insuser->datenaissance = $request->datenaissance;
        $insuser->paysresidence = $request->paysresidence;
        $insuser->nationalite = $request->nationalite;
        $insuser->save();
        return view('resultatformulaire');

    }
}
