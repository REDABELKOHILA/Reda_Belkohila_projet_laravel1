<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SessionController extends Controller
{
    public function AfficherFormulaire(){
        Return view("formulaire.form");

    }

    public  function TriterFormulire(Request $request){
        $data =$request->only(['non', 'prenom', 'email', 'password', 'date_naissance', 'abonne']);
        session(['user' => $data]);

        return redirect()->back()->with('+++++++++');

        


        }
}
