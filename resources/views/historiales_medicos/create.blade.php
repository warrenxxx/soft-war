@extends('historiales_medicos.mantenimiento_historiales_medicos')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Historiales Médicos<a1>
@endsection
@section('Contenido')
      <form role="form" method="post" action="/historiales_medicos" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Historial Médico</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Id" name="Id" placeholder="ID" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Nombres" name="Nombres" placeholder="Nombres" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Apellidos" name="Apellidos" placeholder="Apellidos" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha_Nacimiento AAAA-MM-DD" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Sexo" name="Sexo" placeholder="Sexo" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Estatura" name="Estatura" placeholder="Estatura" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Peso" name="Peso" placeholder="Peso" class="form-control" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Tipo_Sangre" name="Tipo_Sangre" placeholder="Tipo_Sangre" class="form-control" required>
                  </div>
            </div></br></br>

           <div class="form-group">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                <div class="col-md-6 col-xs-10">
                    <input id="Cirugias" name="Cirugias" placeholder="Cirugias" class="form-control" required>
                </div>
          </div></br></br>


          <div class="form-group">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                <div class="col-md-6 col-xs-10">
                    <input id="Alergias" name="Alergias" placeholder="Alergias" class="form-control" required>
                </div>
          </div></br></br>

             <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Antecedentes" name="Antecedentes" placeholder="Antecedentes" class="form-control" required>
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
