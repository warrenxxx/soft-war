@extends('principal')

@section('Mantenimiento')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
              @yield('Titulo')
              <i class="fa fa-gear fa-fw"></i>
              <a1>Reservar Cita<a1>
        </div>
        <div class="panel-body">
            <div >
                @yield('Contenido')
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>idBloque</th>
                                    <th>hora_inicio</th>
                                    <th>hora_fin</th>
                                    <th>dia_id</th>
                                    <th>medicos_dni</th>
                                    <th>estado</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($bloques as $bloque)
                                <tr class="odd gradeX">
                                    <td>{{ $bloque->idbloques }}</td>
                                    <td>{{ $bloque->hora_inicio }}</td>
                                    <td>{{ $bloque->hora_fin }}</td>
                                    <td>{{ $bloque->dia_id }}</td>
                                    <td>{{ $bloque->medicos_dni }}</td>
                                    <td>{{ $bloque->estado }}</td>
                                  </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
  @yield('js')
@endsection

@section('js_scripts')
  @yield('js_scripts')
@endsection
