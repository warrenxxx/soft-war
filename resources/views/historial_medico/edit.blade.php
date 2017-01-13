@extends('historial_medico.mantenimiento_historial_medico')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Historial Médico<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/historial_medico/{{$historial_medico->id_historial_medico }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar Historial Médico</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Id" name="Id" placeholder="ID" class="form-control" value="{{$historial_medico->id_historial_medico}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                    <input id="Cirugias" name="Cirugias" placeholder="Cirugias" class="form-control"  value="{{$historial_medico->cirugias}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Alergias" name="Alergias" placeholder="Alergias" class="form-control" value="{{$historial_medico->alergias}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                        <input id="Antecedentes" name="Antecedentes" placeholder="Antecedentes" class="form-control" value="{{$historial_medico->antecedentes}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                        <input id="Tipo_Sangre" name="Tipo_Sangre" placeholder="Tipo_Sangre" class="form-control" value="{{$historial_medico->tipo_sangre}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                    <select id="Pacientes_DNI" name="Pacientes_DNI" placeholder="DNI Pacientes" class="form-control">
                      @foreach($pacientes as $paciente)
                          @if($paciente->dni==$historial_medico->pacientes_dni)
                              <option selected>{{$paciente->dni}}</option>

                          @else
                              <option>{{$paciente->dni}}</option>
                          @endif
                      @endforeach
                    </select>

                    </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                        <input id="Fecha_Apertura" name="Fecha_Apertura" placeholder="Fecha_Apertura AAAA-MM-DD" class="form-control" value="{{$historial_medico->fecha_apertura}}" required>
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
