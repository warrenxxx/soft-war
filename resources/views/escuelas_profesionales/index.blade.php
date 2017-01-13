@extends('escuelas_profesionales.mantenimiento_escuelas_profesionales')

@section('estilos')

<!-- DataTables CSS -->

    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
    <!-- DataTables Responsive CSS -->

    <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Escuelas Profesionales<a1>
@endsection

@section('Contenido')
        <div class="dataTable_wrapper table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nombre</th>
                                            </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($escuelas_profesionales as $escuela_profesional)

                                        <tr class="odd gradeA" rol="row">
                                            <td>{{$escuela_profesional-> id }}</td>
                                            <td>{{$escuela_profesional-> nombre }}</td>

                                            <td align="center">
                                                <button type="button" class="btn btn-success btn-xs"
                                                onClick="location.href='/escuelas_profesionales/{{ $escuela_profesional->id }}/edit'">
                                                Editar</button>


                                                  <form action="/escuelas_profesionales/{{ $escuela_profesional->id }}" method="post">
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
