<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugos;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class JugosController extends Controller
{
    // Leer Registros (Read) 
    public function index()
    {
    	$jugos = Jugos::all();
        //$ijg = DB::table('jugos')->select('img')->get();
        $someArray = json_decode($jugos, true);

        dd($someArray);



        return view('admin.jugos.index', compact('jugos', 'ijg', 'ip')); 
    }

    // Crear un Registro (Create) 
    public function crear()
    {
        $jugos = Jugos::all();
        return view('admin.jugos.crear', compact('jugos'));
    }

    // Proceso de Creación de un Registro 
    public function store(ItemCreateRequest $request)
    {
        $jugos = new Jugos;
        $jugos->nombre = $request->nombre;
        $jugos->precio = $request->precio;
        $jugos->stock = $request->stock;
        $ci = $request->file('img');

        $this->validate($request, [

            'nombre' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);        

        if($request->hasfile('img'))
        {

            $id = 0;
            
            foreach($request->file('img') as $image)
            {
                $imagen = $image->getClientOriginalName();
                $formato = $image->getClientOriginalExtension();
                $image->move(public_path().'/uploads/', $imagen);

                /*
                $af = array(
                    "main_array" => array(
                        "sub_array" => array(
                            "id" => array("value1"),
                            "imagen" => array("value2"),
                            "formato" => array("value3"),
                        )
                    )
                );
                */

                $af[] = array (
                    'id' => $data[] = $id++,
                    'imagen' => $data[] = $imagen,
                    'formato' => $data[] = $formato

                );                
                
            }
        }

        //$jugos->img = json_encode($data);

        $jugos->img = $af;

        $jugos->save();
        return redirect('admin/jugos')->with('message','Guardado Satisfactoriamente !');
    }

    // Leer un Registro específico (Leer)
    public function show($id)
    {
        //
    }

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $jugos = Jugos::find($id);
        return view('admin/jugos.actualizar',['jugos'=>$jugos]);
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequest $request, $id)
    {        
        $jugos = Jugos::find($id);
        $jugos->nombre = $request->nombre;
        $jugos->precio = $request->precio;
        $jugos->stock = $request->stock;
        if ($request->hasFile('img')) {
            $jugos->img = $request->file('img')->store('/');
        }
        $jugos->save();
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/jugos');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $jugos = Jugos::find($id);

        // Elimino la imagen de la carpeta 'uploads'
        $imagen = explode(",", $jugos->img);
        Storage::delete($imagen);
        
        Jugos::destroy($id);        
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/jugos');
    }

}
