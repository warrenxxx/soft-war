@extends('Personas.MantenimientoPersonas')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Personas<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/personas/{{ $personas->dni }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar Persona</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="dni" name="dni" placeholder="DNI" class="form-control" value="{{$personas->dni}}" required disabled="true">
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Password" type="Password" name="Password" placeholder="contraseña" class="form-control" value="{{$personas->contraseña}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="telefono" name="telefono" placeholder="telefono" class="form-control" value="{{$personas->telefono}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="correo" name="correo" placeholder="correo" class="form-control" value="{{$personas->correo}}" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="direccion" name="direccion" placeholder="direccion" class="form-control" value="{{$personas->direccion}}" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select id="Estado" name="Estado" placeholder="Estado" class="form-control">
                        @if($personas->habilitado=="1")
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
                    <input id="historial_medicos_id" name="historial_medicos_id" placeholder="historial_medicos_id" class="form-control" value="{{$personas->historiales_medicos_id}}" required>
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
