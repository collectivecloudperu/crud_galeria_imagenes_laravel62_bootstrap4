<?php

namespace App\Http\Controllers;

use App\Bicicletas;
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

class Bicicletas extends Controller
{
    // Leer Registros (Read) 
    public function index()
    {
    	$bicicletas = Bicicletas::all();

        return view('admin.bicicletas.index', compact('bicicletas')); 
    }

    // Crear un Registro (Create) 
    public function crear()
    {
        $bicicletas = Bicicletas::all();
        return view('admin.bicicletas.crear', compact('bicicletas'));
    }

    // Proceso de Creación de un Registro 
    public function store(ItemCreateRequest $request)
    {
        $bicicletas= new Bicicletas;
        $bicicletas->nombre = $request->nombre;
        $bicicletas->precio = $request->precio;
        $bicicletas->stock = $request->stock;
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

        //$bicicletas->img = json_encode($data);

        $bicicletas->img = $af;

        $bicicletas->save();
        return redirect('admin/bicicletas')->with('message','Guardado Satisfactoriamente !');
    }

    // Leer un Registro específico (Leer)
    public function show($id)
    {
        //
    }

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $bicicletas = Bicicletas::find($id);
        return view('admin/bicicletas.actualizar',['bicicletas'=>$bicicletas]);
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequest $request, $id)
    {        
        $bicicletas= Bicicletas::find($id);
        $bicicletas->nombre = $request->nombre;
        $bicicletas->precio = $request->precio;
        $bicicletas->stock = $request->stock;
        if ($request->hasFile('img')) {
            $bicicletas->img = $request->file('img')->store('/');
        }
        $bicicletas->save();
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/bicicletas');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $bicicletas = Bicicletas::find($id);

        // Elimino la imagen de la carpeta 'uploads'
        $imagen = explode(",", $bicicletas->img);
        Storage::delete($imagen);
        
        Bicicletas::destroy($id);        
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/bicicletas');
    }

}
