<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coche;
use App\Models\Usuario;

class CochesController extends Controller
{

    // public function propietariosVista(){
    //     $usuariosConCoches = Usuario::with('coches')->get();
    //     return view('propietarios', ['usuarios' => $usuariosConCoches]);
    // }
    public function propietariosVista()
{
    $usuarios = Usuario::all();
    return view('propietarios', compact('usuarios'));
}

    /*********MOSTRAR TODO*********/
    public function index(){ 
    
        $coches = Coche::all();
        return $coches;
    }
    public function indexVista(){ 
    
        $coches = Coche::all();
        return view('inicio')->with('coches',$coches) ;
    }

    /*********MOSTRAR COCHE*********/
    public function show($id){
        $coche = Coche::find($id);
        if(!$coche) {
            return response()->json(['Error' => 'Coche no encontrado'], 404);
        }
        return $coche;
    }
    public function showVista($id){
        $coche = Coche::find($id);
        if(!$coche) {
            return response()->json(['Error' => 'Coche no encontrado'], 404);
        }
        return view('ver')->with('coche', $coche);
    }

    
    /*********INSERTAR COCHE*********/
    public function storeuno() {
        return view('insertar');
    }
    public function storeVista(Request $request)
    {
        $coche = new Coche();
        $coche->modelo = $request->input('modelo');
        $coche->matricula = $request->input('matricula');
        $coche->save();
        return view('inicio')->with('coches', Coche::all());
    }
    
    public function store(Request $request){
        $coche = new Coche();
        $coche->modelo = $request->input('modelo');
        $coche->matricula = $request->input('matricula');
        $coche->save();
        return response()->json($coche, 201);
    }
    
    
    /*********ACTUALIZAR COCHE*********/
    public function updateVistaUno($id){
        $car=Coche::findOrFail($id); 
        return view('actualizar')->with('coche',$car);

    }
    public function updateVistaDos(Request $request, $id){
        $coche = Coche::find($id);
        if(!$coche) {
            return response()->json(['error' => 'Coche no encontrado'], 404);
        }
        $coche->modelo = $request->input('modelo');
        $coche->matricula = $request->input('matricula');
        $coche->save();
        return view('inicio')->with('coches', Coche::all());
    }
    public function update(Request $request, $id){
        $coche = Coche::find($id);
        if(!$coche) {
            return response()->json(['error' => 'Coche no encontrado'], 404);
        }
        $coche->modelo = $request->input('modelo');
        $coche->matricula = $request->input('matricula');
        $coche->save();
        return response()->json($coche, 200);
    }


    /*********ELIMINAR*********/
    public function deleteVista($id) {
        $coche = Coche::find($id);
        if(!$coche) {
            return response()->json(['error' => 'Coche no encontrado'], 404);
        }
        $coche->delete();
        return redirect()->route('coches.indexVista')->with('success', 'Coche eliminado exitosamente!');
    }
    public function delete($id){
        $coche = Coche::find($id);
        if(!$coche) {
            return response()->json(['error' => 'Coche no encontrado'], 404);
        }
        $coche->delete();
        return response()->json(['mensaje' => 'Coche eliminado'], 200);
    }

}
