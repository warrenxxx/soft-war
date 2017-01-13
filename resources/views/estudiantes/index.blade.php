@extends('estudiantes.Mantenimiento')

@section('estilos')
      <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
      <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
      <i class="fa fa-gear fa-fw"></i>
      <a1>Mantenimiento de estudiantes<a1>
@endsection

@section('Contenido')
      <div class="panel-body">
          <div class="dataTable_wrapper">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                        <th>DNI</th>
                        <th>Contraseña</th>
                        <th>Codigo</th>
                          <th>Telefono</th>
                          <th>Email</th>
                          <th>Dirección</th>
                          <th>Estado</th>
                          <th>Id Escuela Profecional</th>
                          <th>Id Historial Medico</th>
                          <th>Operaciones</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($estudiantes as $estudiante)
                      <tr class="odd gradeX">
                          <td>{{ $estudiante->dni }}</td>
                          <td>{{ $estudiante->contraseña }}</td>
                          <td>{{ $estudiante->codigo }}</td>
                          <td>{{ $estudiante->telefono }}</td>
                          <td>{{ $estudiante->correo }}</td>
                          <td>{{ $estudiante->direccion }}</td>
                        @if($estudiante->habilitado=="1")
                          <td>Habilitado</td>
                        @else
                          <td>Deshabilitado</td>
                        @endif
                        <td>{{ $estudiante->escuelas_profesionales_id }}</td>
                        <td>{{ $estudiante->historiales_medicos_id }}</td>

                          <td align="center">
                            <button type="button" class="btn btn-success btn-xs"
                            onClick="location.href='/estudiantes/{{ $estudiante->dni }}/edit'">
                            Editar</button>
                               <form action="/estudiantes/{{ $estudiante->dni }}" method="post">
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
