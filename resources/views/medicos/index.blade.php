@extends('medicos.mantenimiento_medicos')

@section('estilos')

<!-- DataTables CSS -->

    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
    <!-- DataTables Responsive CSS -->

    <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Médicos<a1>
@endsection

@section('Contenido')
        <div class="dataTable_wrapper table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>DNI</th>
                                            <th>Código</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($medicos as $medico)

                                        <tr class="odd gradeA" rol="row">
                                            <td>{{ $medico-> dni }}</td>
                                            <td>{{ $medico-> codigo }}</td>
                                            <td>{{ $medico-> nombres }}</td>
                                            <td>{{ $medico->apellidos }}</td>
                                            <td>{{ $medico->correo }}</td>
                                            <td>{{ $medico->telefono }}</td>

                                            <td align="center">
                                                <button type="button" class="btn btn-success btn-xs"
                                                onClick="location.href='/medicos/{{ $medico->dni }}/edit'">
                                                Editar</button>


                                                  <form action="/medicos/{{ $medico->dni }}" method="post">
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
