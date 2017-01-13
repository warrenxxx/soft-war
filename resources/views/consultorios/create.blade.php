@extends('Consultorios.MantenimientoConsultorios')

@section('estilos')

@endsection

@section('Titulo')
    <i class="fa fa-gear fa-fw"></i>
    <a1>Agregar Consultorio<a1>
@endsection

li>
@section('Contenido')

    <form role="form" method="post" action="/consultorios">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
            <div class="text-center"><h2 align="center">Agregar Consultorio</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Dni" name="id" placeholder="id" class="form-control" required>
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="Dni" name="ubicacion" placeholder="Nombre" class="form-control" required>
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
