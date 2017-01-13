@extends('Personas.MantenimientoPersonas')

@section('estilos')

@endsection

@section('Titulo')
    <i class="fa fa-gear fa-fw"></i>
    <a1>Agregar Persona<a1>
@endsection

@section('Contenido')

    <form role="form" method="post" action="/personas">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
            <div class="text-center"><h2 align="center">Agregar Persona</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="DNI" name="DNI" placeholder="DNI" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Password" type="Password" name="Password" placeholder="Password" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Telefono" name="Telefono" placeholder="Teléfono" class="form-control" required>
                  </div>
            </div></br></br>
             <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="E_mail1" name="E_mail" placeholder="E-Mail" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Direccion" name="Direccion" placeholder="Dirección" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-check-circle" aria-hidden="true"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select id="Estado" name="Estado" placeholder="Estado" class="form-control">
                          <option>Habilitado</option>
                          <option>Deshabilitado</option>
                      </select>

                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-wheelchair" aria-hidden="true"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Historiales" name="Historiales" placeholder="Id-Historial" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <div class="col-md-12 text-center">
                      <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Agregar">
                      <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                  </div>
            </div></br></br>

            </fieldset>

       </form>

@endsection

@section('js')

@endsection

@section('js_scripts')

@endsection
