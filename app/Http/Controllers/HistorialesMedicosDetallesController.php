<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class HistorialesMedicosDetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $historiales_medicos_detalles = DB::table('historiales_medicos_detalles')->get();
      return view('historiales_medicos_detalles.index',['historiales_medicos_detalles' =>$historiales_medicos_detalles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $historial_medico = DB::table('historial_medico')->get();
      $medicos = DB::table('medicos')->get();
        return view('historiales_medicos_detalles.create',['historial_medico'=>$historial_medico],['medicos'=>$medicos]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('Id');
        $estatura = $request->input('Estatura');
        $peso = $request->input('Peso');
        $presion = $request->input('Presion');
        $fecha = $request->input('Fecha');
        $medicos_dni = $request->input('Medicos_DNI');

      $historial_medico = DB::table('historial_medico')->get();
      foreach($historial_medico as $historial)
      {
        if($id==$historial->id_historial_medico){
          $id = $historial->id_historial_medico;
        }
      }

      $medicos = DB::table('medicos')->get();
      foreach($medicos as $medico)
      {
        if($medicos_dni==$medico->dni){
        $medicos_dni = $medico->dni;
        }
      }

      DB::table('historiales_medicos_detalles')->insert([
      'id_historial_medico'=> $id,
      'estatura'=>$estatura,
      'peso'=>$peso,
      'presion'=>$presion,
      'fecha'=>$fecha,
      'medicos_dni'=>$medicos_dni,

    ]);

    return redirect('historiales_medicos_detalles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $historiales_medicos_detalles = DB::table('historiales_medicos_detalles')->where('id_historial_medico',$id)->first();
      $historial_medico= DB::table('historial_medico')->get();
      $medicos = DB::table('medicos')->get();
      return view('historiales_medicos_detalles.edit',['historiales_medicos_detalles'=>$historiales_medicos_detalles,'historial_medico'=>$historial_medico,'medicos'=>$medicos]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $estatura = $request->input('Estatura');
      $peso = $request->input('Peso');
      $presion = $request->input('Presion');
      $fecha = $request->input('Fecha');
      $medicos_dni = $request->input('Medicos_DNI');

    $historial_medico = DB::table('historial_medico')->get();
    foreach($historial_medico as $historial)
    {
      if($id==$historial->id_historial_medico){
        $id = $historial->id_historial_medico;
      }
    }

    $medicos = DB::table('medicos')->get();
    foreach($medicos as $medico)
    {
      if($medicos_dni==$medico->dni){
      $medicos_dni = $medico->dni;
      }
    }

    DB::table('historiales_medicos_detalles')->where('id_historial_medico',$id)
      ->update([
    'estatura'=>$estatura,
    'peso'=>$peso,
    'presion'=>$presion,
    'fecha'=>$fecha,
    'medicos_dni'=>$medicos_dni,

  ]);

  return redirect('historiales_medicos_detalles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('historiales_medicos_detalles')->where('id_historial_medico',$id)->delete();
    return redirect('historiales_medicos_detalles');
    }
}
