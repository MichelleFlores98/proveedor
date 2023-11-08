<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ShowUserAdminController extends Controller
{
    //
    public function index() {
    $administradores = User::where('usertype', 'admin')->get(['id', 'name']);
    
    return view('user.create', compact('administradores'));
}
}
