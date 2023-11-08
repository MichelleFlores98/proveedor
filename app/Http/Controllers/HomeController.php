<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\DatosProveedor;


use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){

        if(Auth::id()){

            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){
               // return view('dashboard');
               $user = auth()->user();
              // $datosproveedores= $user->datosproveedores;
             // $datosproveedores = auth()->user()->datosproveedores;
                $datosproveedores = DatosProveedor::where ('user_id', $user->id)->get();
                return view('dashboard')->with('datosproveedores',$datosproveedores);

            }
            else if($usertype=='admin'){
                $datosproveedores = DatosProveedor::all();
                return view('admin.adminhome')->with('datosproveedores',$datosproveedores);
            }
            else{
                return redirect()->back();
            }
        }
    }

}
