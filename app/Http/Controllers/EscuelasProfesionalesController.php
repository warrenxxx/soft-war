<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class EscuelasProfesionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $escuelas_profesionales = DB::table('escuelas_profesionales')->get();
      return view('escuelas_profesionales.index',['escuelas_profesionales' => $escuelas_profesionales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $escuelas_profesionales = DB::table('escuelas_profesionales')->get();
            return view('escuelas_profesionales.create',['escuelas_profesionales' => $escuelas_profesionales]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $id = $request->input('id');
    $nombre = $request->input('nombre');

    DB::table('escuelas_profesionales')->insert([
      'id'=> $id,
      'nombre'=>$nombre
      ]);

      return $this->index();

      return redirect('escuelas_profesionales');
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
      $escuela_profesional = DB::table('escuelas_profesionales')->where('id',$id)->first();

    return view('escuelas_profesionales.edit',['escuela_profesional'=>$escuela_profesional]);
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
      $id = $request->input('id');
  $nombre = $request->input('nombre');

  DB::table('escuelas_profesionales')->where('id',$id)
    ->update([
    'id'=> $id,
    'nombre'=>$nombre
  ]);
  return redirect('escuelas_profesionales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('escuelas_profesionales')->where('id',$id)->delete();
      return redirect('escuelas_profesionales');
    }
}
