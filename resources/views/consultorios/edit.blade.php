@extends('consultorios.MantenimientoConsultorios')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de consultorios<a1>

@endsection


@section('Contenido')


        <form method="POST" action="/consultorios/{{ $consultorios->id }}" autocomplete="off">

          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar consultorio</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="dni" name="id" placeholder="ID" class="form-control" value="{{$consultorios->id}}" required disabled="true">
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs
                  -1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                  <div class="col-md-6 col-xs-10">
                      <input id="Password"  name="ubicacion" placeholder="UBICACION" class="form-control" value="{{$consultorios->ubicacion}}" required>
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
