@extends('citas.mantenimiento_citas')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de citas<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/citas/{{$citas->id}}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar citas</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="id" name="id" placeholder="id" class="form-control" value="{{$citas->id}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Fecha" name="fecha" placeholder="Fecha " class="form-control" value="{{$citas->fecha}}" required>
                  </div>
            </div></br></br>

           <div class="form-group">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                <div class="col-md-6 col-xs-10">
                    <input id="hora" name="hora" placeholder="hora" class="form-control" value="{{$citas->hora}}" required>
                </div>
          </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select id="Estado" name="Estado" placeholder="Estado" class="form-control">
                        @if($citas->estado=="1")
                          <option selected>Habilitado</option>
                          <option>Deshabilitado</option>
                        @else
                          <option >Habilitado</option>
                          <option selected>Deshabilitado</option>
                        @endif
                      </select>

                  </div>
            </div></br></br>

            <div class="form-group">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                <div class="col-md-6 col-xs-10">
                    <select id="Estado" name="medicos_dni" placeholder="Codigo de Especialidad" class="form-control">
                      @foreach($medicos as $especialidad)
                        <option>{{$especialidad->dni}}</option>
                      @endforeach

                </select>

                </div>
          </div></br></br>

          <div class="form-group">
              <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

              <div class="col-md-6 col-xs-10">
                  <select id="Estado" name="pacientes_dni" placeholder="DNI del Paciente" class="form-control">
                    @foreach($pacientes as $pa)
                      <option>{{$pa->dni}}</option>
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
