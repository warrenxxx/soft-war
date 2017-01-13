@extends('historial_medico.mantenimiento_historial_medico')

@section('estilos')

<!-- DataTables CSS -->

    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
    <!-- DataTables Responsive CSS -->

    <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Historial Médico<a1>
@endsection

@section('Contenido')
        <div class="dataTable_wrapper table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Cirugias</th>
                                            <th>Alergias</th>
                                            <th>Antecedentes</th>
                                            <th>Tipo Sangre</th>
                                            <th>DNI Pacientes</th>
                                            <th>Fecha Apertura</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($historial_medico as $historial_medico)

                                        <tr class="odd gradeA" rol="row">
                                            <td>{{ $historial_medico-> id_historial_medico }}</td>
                                            <td>{{ $historial_medico-> cirugias}}</td>
                                            <td>{{ $historial_medico-> alergias }}</td>
                                            <td>{{ $historial_medico-> antecedentes }}</td>
                                            <td>{{ $historial_medico-> tipo_sangre }}</td>
                                            <td>{{ $historial_medico-> pacientes_dni }}</td>
                                            <td>{{ $historial_medico-> fecha_apertura }}</td>

                                            <td align="center">
                                                <button type="button" class="btn btn-success btn-xs"
                                                onClick="location.href='/historial_medico/{{ $historial_medico->id_historial_medico }}/edit'">
                                                Editar</button>


                                                  <form action="/historial_medico/{{ $historial_medico->id_historial_medico }}" method="post">
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
