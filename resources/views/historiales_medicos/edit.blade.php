@extends('historiales_medicos.mantenimiento_historiales_medicos')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Historiales Médicos<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/historiales_medicos/{{$historiales_medicos->id }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar Historial Médico</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Id" name="Id" placeholder="ID" class="form-control" value="{{$historiales_medicos->id}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                    <input id="Nombres" name="Nombres" placeholder="Nombres" class="form-control"  value="{{$historiales_medicos->nombres}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Apellidos" name="Apellidos" placeholder="Apellidos" class="form-control" value="{{$historiales_medicos->apellidos}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                        <input id="Fecha_Naciminto" name="Fecha_Nacimiento" placeholder="Fecha_Nacimiento" class="form-control" value="{{$historiales_medicos->fecha_nacimiento}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Sexo" name="Sexo" placeholder="Sexo" class="form-control" value="{{$historiales_medicos->apellidos}}" required>

                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                    <input id="Estatura" name="Estatura" placeholder="Estatura" class="form-control"  value="{{$historiales_medicos->estatura}}" required>
                  </div>
           </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 cocvzl-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Peso" name="Peso" placeholder="Peso" class="form-control" value="{{$historiales_medicos->peso}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                        <input id="Tipo_Sangre" name="Tipo_Sangre" placeholder="Tipo_Sangre" class="form-control" value="{{$historiales_medicos->tipo_sangre}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                    <input id="Cirugias" name="Cirugias" placeholder="Cirugias" class="form-control"  value="{{$historiales_medicos->cirugias}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Alergias" name="Alergias" placeholder="Alergias" class="form-control" value="{{$historiales_medicos->alergias}}" required>
                  </div>
            </div></br></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                        <input id="Antecedentes" name="Antecedentes" placeholder="Antecedentes" class="form-control" value="{{$historiales_medicos->antecedentes}}" required>
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
