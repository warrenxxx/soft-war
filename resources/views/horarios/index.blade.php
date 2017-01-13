@extends('horarios.Mantenimiento')

@section('estilos')
      <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
      <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
      <i class="fa fa-gear fa-fw"></i>
      <a1>Mantenimiento de horarios<a1>
@endsection

@section('Contenido')
      <div class="panel-body">
          <div class="dataTable_wrapper">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Fecha</th>
                          <th>Hora de Entrada</th>
                          <th>Hora de Salida</th>
                          <th>Dni del  Medico</th>
                          <th>Id del Consultorio</th>
                          <th>Operaciones</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($horarios as $horario)
                      <tr class="odd gradeX">
                          <td>{{ $horario->id }}</td>
                          <td>{{ $horario->fecha }}</td>
                          <td>{{ $horario->hora_entrada }}</td>
                          <td>{{ $horario->hora_salida }}</td>
                          <td>{{ $horario->medicos_dni }}</td>
                          <td>{{ $horario->consultorios_id }}</td>

                          <td align="center">
                            <button type="button" class="btn btn-success btn-xs"
                            onClick="location.href='/horarios/{{ $horario->id }}/edit'">
                            Editar</button>
                               <form action="/horarios/{{ $horario->id }}" method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('DELETE')}}
                                 <button class="btn btn-danger btn-xs">Eliminar</button>
                               </form>

                           </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div
      </div>
@endsection

@section('js')
      <script src={{ URL::asset('bower_components/DataTables/media/js/jquery.dataTables.min.js') }}></script>
      <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}></script>
@endsection

@section('js_scripts')
      <script>
      $(document).ready(function() {
          $('#dataTables-example').DataTable({
                  responsive: true
          });
      });
      </script>
@endsection
