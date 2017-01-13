@extends('Especialidades.MantenimientoEspecialidades')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Especialidades<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/especialidades/{{ $especialidades->codigo }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar Especialidades</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="codigo" name="codigo" placeholder="codigo" class="form-control" value="{{$especialidades->codigo}}" required disabled="true">
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="nombre" name="nombre" placeholder="NOMBRE" class="form-control" value="{{$especialidades->nombre}}" required >
                  </div>
            </div></br></br>
            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <input id="nombre" name="habilitado" placeholder="Estado" class="form-control" value="{{$especialidades->habilitado}}" required >
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
