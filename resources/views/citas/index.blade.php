@extends('citas.Mantenimiento_citas')

@section('estilos')
      <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
      <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
      <i class="fa fa-gear fa-fw"></i>
      <a1>Mantenimiento de citas<a1>
@endsection

@section('Contenido')
      <div class="panel-body">
          <div class="dataTable_wrapper">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>FECHA</th>
                          <th>HORA</th>
                          <th>ESTADO</th>
                          <th>DNI DEL MEDICO</th>
                          <th>DNI DEL PACIENTE|</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($citas as $cita)
                      <tr class="odd gradeX">
                        <td>{{ $cita->id }}</td>
                        <td>{{ $cita->fecha }}</td>
                        <td>{{ $cita->hora }}</td>
                        @if($cita->estado=="1")
                        <td>Habilitado</td>
                        @else($cita->estado=="1")
                        <td>Deshabilitado</td>
                        @endif
                        <td>{{ $cita->medicos_dni }}</td>
                        <td>{{ $cita->pacientes_dni }}</td>

                          <td align="center">
                            <button type="button" class="btn btn-success btn-xs"
                            onClick="location.href='/citas/{{ $cita->id }}/edit'">
                            Editar</button>
                               <form action="/citas/{{ $cita->id }}" method="post">
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
