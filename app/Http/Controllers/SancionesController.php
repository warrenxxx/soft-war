<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class SancionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sanciones = DB::table('sanciones')->get();
      return view('sanciones.index',['sanciones'=>$sanciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sanciones.create');
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
      $descripcion = $request->input('Descripcion');

      DB::table('sanciones')->insert([
        'id'=> $id,
        'descripcion'=>$descripcion,
      ]);

      return redirect('sanciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sanciones = DB::table('sanciones')->where('id',$id)->first();
      return view('sanciones.edit',['sanciones'=>$sanciones]);
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
      $descripcion = $request->input('Descripcion');

      DB::table('sanciones')->where('id',$id)
        ->update([
      'descripcion'=>$descripcion,
      ]);

      return redirect('sanciones');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('sanciones')->where('id',$id)->delete();
    return redirect('sanciones');
    }
}
