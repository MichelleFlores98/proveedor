<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Models\DatosProveedor;
use App\Http\Requests\ProveedorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CuentasContables;

class DatosproveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* public function redireccionar(): View
     {
     

        $datosproveedores = DatosProveedor::all();
        return view('admin/datosadmin')->with('datosproveedores',$datosproveedores);
    /*$registro = DatosProveedor::find($id);
    return view('admin/datosadmin', ['registro' => $registro]);*/
   // }
    public function index(): View
    {
        //

        $user = auth()->user();
        // $datosproveedores= $user->datosproveedores;
       // $datosproveedores = auth()->user()->datosproveedores;
          $datosproveedores = DatosProveedor::where ('user_id', $user->id)->get();
          return view('dashboard')->with('datosproveedores',$datosproveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request): RedirectResponse
    {
        // base 64 convertir

        $request->validate([
            'constancia' => 'required|mimes:pdf',
            'cumpli' => 'required|mimes:pdf',
            'estado_cuenta' => 'required|mimes:pdf',
            'nombre' => 'required|string',
            'rfc' => 'required|string',
            'ciudad' => 'required|string',
            'cp' => 'required|integer',
            'banco' => 'required|string',
            'cuenta' => 'min:11',
            'clabe' => 'min:18',
        ]); 
        
        $admin_user = $request->get('admin_id');
        $adminName = User::find($admin_user)->name;

        $datosproveedores = new DatosProveedor;
        $datosproveedores->nombre = $request->get('nombre');
        $datosproveedores->rfc = $request->get('rfc');
        $datosproveedores->calle = $request->get('calle');
        $datosproveedores->colonia = $request->get('colonia');
        $datosproveedores->delegacion = $request->get('delegacion');
        $datosproveedores->ciudad = $request->get('ciudad');
        $datosproveedores->estado = $request->get('estado');
        $datosproveedores->cp = $request->get('cp');
        $datosproveedores->banco = $request->get('banco');
        $datosproveedores->cuenta = $request->get('cuenta');
        $datosproveedores->clabe = $request->get('clabe');
        $datosproveedores->admin_user = $admin_user;
        $datosproveedores->nombre_admin = $adminName;

        if($request->hasFile('constancia')){
            $const = $request->file('constancia');
            $const->move(public_path().'/archivos',$const->getClientOriginalName());
            $datosproveedores->constancia=$const->getClientOriginalName();
           // $constancia= base64_encode(file_get_contents($const));
           // $datosproveedores->constancia=$constancia;
        }

        if($request->hasFile('cumpli')){
            $cump = $request->file('cumpli');
            $cump->move(public_path().'/archivos',$cump->getClientOriginalName());
            $datosproveedores->cumpli=$cump->getClientOriginalName();
        }

        if($request->hasFile('estado_cuenta')){
            $cuenta = $request->file('estado_cuenta');
            $cuenta->move(public_path().'/archivos',$cuenta->getClientOriginalName());
            $datosproveedores->estado_cuenta=$cuenta->getClientOriginalName();
        }

        $datosproveedores['user_id'] = auth()->id();
  
        $exito = $datosproveedores->save();

        if($exito){
            return redirect()->route('home')->with([
                'mensaje' => 'Registro guardado exitosamente.',
                'exito' => true,
            ]);
        }else{
            return redirect()->route('home')->with([
                'mensaje'=> 'Algo aocurrio',
                'exito'=> false,
            ]);
        }
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        //
        $combinaciones = CuentasContables::select('sitio', 'empresa')->distinct()->get();
        $datosproveedor =DatosProveedor::findOrFail($id); 
        return view('admin.datosadmin',compact('datosproveedor', 'combinaciones'));
    }

    /*public function showcuentas($id): View
    {
        //
        $combinaciones = CuentasContables::select('sitio', 'empresa')->distinct()->get();
        return view('admin/datosadmin', compact('combinaciones'));
    }*/


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        //
        //$this->authorize('edit', $id);
        $datosproveedor =DatosProveedor::findOrFail($id); 
        return view('user.edit',compact('datosproveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
        $datosProveedor = request()->except(['_token','_method']);
        DatosProveedor::where('id','=','$id')->update($datosProveedor);

        $datosproveedor = DatosProveedor::find($id); 
        $datosproveedor->nombre = $request->get('nombre');
        $datosproveedor->rfc = $request->get('rfc');
        $datosproveedor->calle = $request->get('calle');
        $datosproveedor->colonia = $request->get('colonia');
        $datosproveedor->delegacion = $request->get('delegacion');
        $datosproveedor->ciudad = $request->get('ciudad');
        $datosproveedor->estado = $request->get('estado');
        $datosproveedor->cp = $request->get('cp');
        $datosproveedor->banco = $request->get('banco');
        $datosproveedor->cuenta = $request->get('cuenta');
        $datosproveedor->clabe = $request->get('clabe');

        
        if($request->hasFile('constancia')){
            $const = $request->file('constancia');
            $const->move(public_path().'/archivos',$const->getClientOriginalName());
            $datosproveedor->constancia=$const->getClientOriginalName();
           // $constancia= base64_encode(file_get_contents($const));
           // $datosproveedores->constancia=$constancia;
        }

        if($request->hasFile('cumpli')){
            $cump = $request->file('cumpli');
            $cump->move(public_path().'/archivos',$cump->getClientOriginalName());
            $datosproveedor->cumpli=$cump->getClientOriginalName();
        }

        if($request->hasFile('estado_cuenta')){
            $cuenta = $request->file('estado_cuenta');
            $cuenta->move(public_path().'/archivos',$cuenta->getClientOriginalName());
            $datosproveedor->estado_cuenta=$cuenta->getClientOriginalName();
        }

        $datosproveedor->save();

        return redirect('/home');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        //
    }*/
}
