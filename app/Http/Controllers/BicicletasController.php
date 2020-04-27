<?php

namespace App\Http\Controllers;

use App\Bicicletas;
use App\Imgbicicletas;
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
use Illuminate\Support\Str;
use File;

class BicicletasController extends Controller
{
    // Leer Registros (Read) 
    public function index()
    {
    	$bicicletas = Bicicletas::select('id', 'nombre', 'precio', 'stock', 'imagenes', 'url')->with('imagenesbicicletas:nombre')->get();

        //$ib = Bicicletas::find(3)->imagenesbicicletas;

        //dd($ib);

        // $imagenes = Bicicletas::find(3)->imagenesbicicletas;

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
        $bicicletas->imagenes = date('dmyHi');
        $bicicletas->url = Str::slug($request->nombre, '-');  // Acá generamos la URL amigable a partir del nombre y la guardamos en la Base de Datos

        $bicicletas->save();

        $ci = $request->file('img');

        // Validamos que el nombre y el formato de imagen esten presentes, tu puedes validar mas campos si deseas 
        $this->validate($request, [

            'nombre' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);        

        // Recibimos una o varias imágenes y las guardamos en la carpeta 'uploads'
        foreach($request->file('img') as $image)
            {
                $imagen = $image->getClientOriginalName();
                $formato = $image->getClientOriginalExtension();
                $image->move(public_path().'/uploads/', $imagen);

                // Guardamos el nombre de la imagen en la tabla 'img_bicicletas'
                DB::table('img_bicicletas')->insert(
				    [
				    	'nombre' => $imagen, 
				    	'formato' => $formato,
				    	'bicicletas_id' => $bicicletas->id,
				    	'created_at' => date("Y-m-d H:i:s"),
				    	'updated_at' => date("Y-m-d H:i:s")
				    ]
				);

            }         

        // Redireccionamos con mensaje 
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

        $imagenes = Bicicletas::find($id)->imagenesbicicletas;

        return view('admin/bicicletas.actualizar', compact('imagenes'), ['bicicletas' => $bicicletas]);
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequest $request, $id)
    {        
        $bicicletas= Bicicletas::find($id);
        $bicicletas->nombre = $request->nombre;
        $bicicletas->precio = $request->precio;
        $bicicletas->stock = $request->stock;
        
        $bicicletas->save();

        $ci = $request->file('img');

        // Si la variable '$ci' no esta vacia, actualizamos el registro con las nuevas imágenes
        if(!empty($ci)){

            // Validamos que el nombre y el formato de imagen esten presentes, tu puedes validar mas campos si deseas 
            $this->validate($request, [

                'nombre' => 'required',
                'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

            ]);        

            // Recibimos una o varias imágenes y las actualizamos 
            foreach($request->file('img') as $image)
                {
                    $imagen = $image->getClientOriginalName();
                    $formato = $image->getClientOriginalExtension();
                    $image->move(public_path().'/uploads/', $imagen);

                    // Actualizamos el nuevo nombre de la(s) imagen(es) en la tabla 'img_bicicletas'
                    DB::table('img_bicicletas')->insert(
                        [
                            'nombre' => $imagen, 
                            'formato' => $formato,
                            'bicicletas_id' => $bicicletas->id,
                            'created_at' => date("Y-m-d H:i:s"),
                            'updated_at' => date("Y-m-d H:i:s")
                        ]
                    );

                } 

        }

        // Redireccionamos con mensaje  
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/bicicletas');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $bicicletas = Bicicletas::find($id);

        // Selecciono las imágenes a eliminar 
        $imagen = DB::table('img_bicicletas')->where('bicicletas_id', '=', $id)->get();        
        $imgfrm = $imagen->implode('nombre', ',');  
        //dd($imgfrm);        

        // Creamos una lista con los nombres de las imágenes separadas por coma
        $imagenes = explode(",", $imgfrm);
        
        // Recorremos la lista de imágenes separadas por coma
        foreach($imagenes as $image){
            
            // Elimino la(s) imagen(es) de la carpeta 'uploads'
            $dirimgs = public_path().'/uploads/'.$image;
            
            // Verificamos si la(s) imagen(es) existe(n) y procedemos a eliminar  
            if(File::exists($dirimgs)) {
                File::delete($dirimgs);                
            }

        }    

        
        // Borramos el registro de la tabla 'bicicletas'
        Bicicletas::destroy($id); 

        // Borramos las imágenes de la tabla 'img_bicicletas' 
        $bicicletas->imagenesbicicletas()->delete();

        // Redireccionamos con mensaje 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/bicicletas');
    }

    // Eliminar imagen de un Registro
    public function eliminarimagen($id, $bid)
    {
        $bicicletas = Imgbicicletas::find($id);

        $bi = $bid;

        // Elimino la imagen de la carpeta 'uploads'
        $imagen = Imgbicicletas::select('nombre')->where('id', '=', $id)->get();
        $imgfrm = $imagen->implode('nombre', ', ');
        //dd($imgfrm);
        Storage::delete($imgfrm);

        Imgbicicletas::destroy($id);

        // Redireccionamos con mensaje 
        Session::flash('message', 'Imagen Eliminada Satisfactoriamente !');
        return Redirect::to('admin/bicicletas/actualizar/'.$bi.'');
    }

    // Detalles del Producto
    public function detallesproducto($id)
    {
        // Seleccionar un registro por su 'id' 
        $bicicletas = Bicicletas::where('id','=', $id)->firstOrFail();

        // Seleccionamos las imágenes por su 'id' 
        $imagenes = Bicicletas::find($id)->imagenesbicicletas;

        return view('admin/bicicletas.detallesproducto', compact('bicicletas', 'imagenes'));
    }

}
