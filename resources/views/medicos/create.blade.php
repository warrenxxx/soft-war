@extends('medicos.mantenimiento_medicos')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Médicos<a1>
@endsection
@section('Contenido')
      <form role="form" method="post" action="/medicos" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Médico</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="dni" name="dni" placeholder="DNI" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Password" type="Password" name="contraseña" placeholder="Password" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Codigo" name="codigo" placeholder="Código" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Nombres" name="nombres" placeholder="Nombres" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Apellidos" name="apellidos" placeholder="Apellidos" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Fecha_Nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="form-control" required>
                  </div>
            </div></br></br>

           <div class="form-group">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                <div class="col-md-6 col-xs-10">
                    <input id="Sexo" name="sexo" placeholder="Sexo" class="form-control" required>
                </div>
          </div></br></br>


          <div class="form-group">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>

                <div class="col-md-6 col-xs-10">
                    <input id="Telefono" name="telefono" placeholder="Teléfono" class="form-control" required>
                </div>
          </div></br></br>

             <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="E_mail" name="correo" placeholder="E-Mail" class="form-control" required>
                  </div>
            </div></br></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Direccion" name="direccion" placeholder="Dirección" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select id="Estado" name="estado" placeholder="Estado" class="form-control">
                          <option>Habilitado</option>
                          <option>Deshabilitado</option>
                      </select>

                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select id="Especialidad" name="especialidades_codigo" placeholder="Especialidad" class="form-control">
                        @foreach($especialidades as $especialidad)
                                <option value="{{$especialidad->codigo}}"">{{$especialidad->nombre}}</option>
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
