@extends('citas.mantenimiento_citas')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Citas<a1>
@endsection
@section('Contenido')
      <form role="form" method="post" action="/citas" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Cita</h2>
            </div></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="id" name="id" placeholder="Id" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="fecha" name="fecha" type="date" placeholder="Fecha " class="form-control" required>
                  </div>
            </div></br></br>

           <div class="form-group">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                <div class="col-md-6 col-xs-10">
                    <input id="hora" name="hora" placeholder="Hora" type="time" class="form-control" required>
                </div>
          </div></br></br>

          <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select id="Estado" name="estado" placeholder="estado" class="form-control">
                          <option value="1">Habilitado</option>
                          <option value ="0">Deshabilitado</option>
                      </select>

                  </div>
            </div></br></br>

          <div class="form-group">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>

                <div class="col-md-6 col-xs-10">
                    <select id="Estado" name="medicos_dni" placeholder="Codigo de Especialidad" class="form-control">
                      @foreach($medicos as $medico)
                        <option>{{$medico->dni}}</option>
                      @endforeach

                </select>

                </div>
          </div></br></br>

             <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <select id="Estado" name="pacientes_dni" placeholder="Codigo de Especialidad" class="form-control">
                        @foreach($pacientes as $paciente_dni)
                          <option>{{$paciente_dni->dni}}</option>
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
