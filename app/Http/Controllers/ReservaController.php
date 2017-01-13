<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservas.reserva');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function mostrar()
     {
         $especialidades = DB::table('especialidades')->get();
         return view('reservas.reserva',['especialidades'=>$especialidades]);
     }

     public function bloques(Request $request)
     {
       $especialidad = $request->input('Especialidad');

       $especialidades = DB::table('especialidades')->get();
       foreach($especialidades as $esp)
       {
         if($especialidad==$esp->nombre){
             $Cod_Especialidad = $esp->codigo;
         }
       }

       $bloques = DB::select("SELECT * FROM `bloques` B,`medicos` M WHERE B.medicos_dni=M.dni AND M.especialidades_codigo=?",[$Cod_Especialidad]);
        return view('reservas.bloques',['bloques'=>$bloques]);
     }

    public function create()
    {
        //
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



         $Bloque = DB::table('bloques')->where('idbloques',$id)->first();

         DB::table('bloques')->where('idbloques',$id)
          ->update([
          'estado'=>0
         ]);

         setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
         date_default_timezone_set("America/Lima");
         $Cita_Id = date("Y-m-d h:i:sa");



         return date('D');


         DB::table('citas')->insert([
         'id'=> $Cita_Id,
         'fecha'=>$nombre
         ]);


     }
 		public function Recuperar_Bloque()
 		{


 			$id = Input::get("Id");

 			$Bloque = DB::table('bloques')->where('idbloques',$id)->first();

 			$Medico = DB::table('medicos')->where('dni',$Bloque->medicos_dni)->first();

 			$Especialidad = DB::table('especialidades')->where('codigo',$Medico->especialidades_codigo)->first();

 			$Consultorio = DB::table('consultorios')->where('id',$Especialidad->consultorios_id)->first();

 			$Datos_Bloque = array(
 				$Bloque->hora_inicio,
 				$Bloque->hora_fin,
 				$Bloque->dia_id,
 				$Medico->nombres.' '.$Medico->apellidos,
 				$Especialidad->nombre,
 				$Consultorio->id
 				);

 			return $Datos_Bloque;
 		}

    public function horario(Request $request)
    {
          $especialidad = $request->input('Especialidad');
          $medicos=db::table('medicos')->where('especialidades_codigo',$especialidad)->first();

          $prog_dias=[];
          $prog_fecha=[];
          $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
          $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
          $fecha =date('Y-m-j');
          $estado=[];
          $id=[];
          for($i=0;$i<7;$i++){
            $estado[$i]=db::table('bloques')
            ->where('medicos_dni',$medicos->dni)
            ->where('dia',$dias[date('w',strtotime($fecha))])
            ->orderBy('hora_inicio')
            ->get();
            $prog_dias[]=$dias[date('w',strtotime($fecha))];
            $prog_fecha[]=date('d',strtotime($fecha)).
            ' de '.
            $meses[date('n',strtotime($fecha))-1].
            ' del '.
            $prog_y[]=date('Y',strtotime($fecha));
            $nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
            $fecha = date ( 'Y-m-j' , $nuevafecha );
          }

          $res=[];
          for($i=0;$i<7;$i++){
            $aux=$estado[$i];
            for($j=0;$j<24;$j++){
              $res[$i.'-'.$j]=$aux[$j];
            }
          }

//          $wa[1]=db::table('bloques')->where('dia',$dias[date('w',strtotime($fecha))])->where('medicos_dni','12386321')->get();
          return view('reservas.index',[
            'dias'=>$prog_dias,
            'fecha'=>$prog_fecha,
            'estado'=>$estado,
            'res'=>$res
          ]);
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
    public function citas(Request $request)
    {
      return $request->input('id');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
