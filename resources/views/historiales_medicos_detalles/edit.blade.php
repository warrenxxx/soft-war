@extends('historiales_medicos_detalles.mantenimiento_historiales_medicos_detalles')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Historiales Médicos Detalles<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/historiales_medicos_detalles/{{$historiales_medicos_detalles->id_historial_medico }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar Historial Médico Detalles</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                    <select id="Id" name="Id" placeholder="ID" class="form-control">
                      @foreach($historial_medico as $historial_medico)
                          @if($historial_medico->id_historial_medico== $historiales_medicos_detalles->id_historial_medico)
                              <option selected>{{$historial_medico->id_historial_medico}}</option>
                          @else
                              <option>{{$historial_medico->id_historial_medico}}</option>
                          @endif
                      @endforeach
                    </select>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                    <input id="Estatura" name="Estatura" placeholder="Estatura" class="form-control"  value="{{$historiales_medicos_detalles->estatura}}" required>
                  </div>
           </div></br></br>

           <div class="form-group">
                 <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                 <div class="col-md-6 col-xs-10">
                   <input id="Peso" name="Peso" placeholder="Peso" class="form-control" value="{{$historiales_medicos_detalles->peso}}" required>
                 </div>
          </div></br></br>

          <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                        <input id="Presion" name="Presion" placeholder="Presión" class="form-control" value="{{$historiales_medicos_detalles->presion}}" required>
                  </div>
          </div></br></br>

          <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                        <input id="Fecha" name="Fecha" placeholder="Fecha" class="form-control" value="{{$historiales_medicos_detalles->fecha}}" required>
                  </div>
          </div></br></br>

          <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                    <select id="Medicos_DNI" name="Medicos_DNI" placeholder="Medicos_DNI" class="form-control">
                      @foreach($medicos as $medico)
                          @if($medico->dni==$historiales_medicos_detalles-> medicos_dni)
                              <option selected>{{$historiales_medicos_detalles-> medicos_dni}}</option>
                          @else
                              <option>{{$historiales_medicos_detalles-> medicos_dni}}</option>
                          @endif
                      @endforeach
                    </select>
                  </div>
          </div></br></br>

            <div class="form-group">
                  <div class="col-md-12 text-center">
                      <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                      <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                  </div>
            </div></br></br>

            </fieldset>


       </form>
@endsection
