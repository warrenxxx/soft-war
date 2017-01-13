@extends('Pacientes.mantenimiento_pacientes')

@section('estilos')

<!-- DataTables CSS -->

    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
    <!-- DataTables Responsive CSS -->

    <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Pacientes<a1>
@endsection

@section('Contenido')
        <div class="dataTable_wrapper table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Tipo de paciente</th>
                        <th>Código</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Carrera Profesional</th>
                        <th>Estado</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($pacientes as $paciente)

                    <tr class="odd gradeA" rol="row">
                        <td>{{ $paciente-> dni }}</td>
                        <td>{{ $paciente-> tipo_paciente }}</td>
                        <td>{{ $paciente-> codigo }}</td>
                        <td>{{ $paciente-> nombres }}</td>
                        <td>{{ $paciente-> apellidos }}</td>
                        <td>{{ $paciente-> telefono }}</td>
                        <td>{{ $paciente-> direccion }}</td>
                        <td>{{ $paciente-> correo }}</td>
                        <td>{{ $paciente-> escuelas_profesionales_id }}</td>
                        <td>{{ $paciente-> estado }}</td>

                        <td align="center">
                            <button type="button" class="btn btn-success btn-xs"
                            onClick="location.href='/pacientes/{{ $paciente->dni }}/edit'">
                            Editar</button>


                              <form action="/pacientes/{{ $paciente->dni }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <button class="btn btn-danger btn-xs">Eliminar</button>
                              </form>
                        </td>
                    </tr>

                @endforeach



                </tbody>
            </table>
        </div>
@endsection

@section('js')
<!-- DataTables JavaScript -->
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
