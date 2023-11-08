<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CuentasContables;

class CuentasContablesController extends Controller
{
    //

    public function index(){
        $combinaciones = CuentasContables::select('sitio', 'empresa')->distinct()->get();
        return view('admin/datosadmin', compact('combinaciones'));
    }
}
