<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="editorials-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Ruc</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Pais</th>
                <th>Provincia</th>
                <th>Ciudad</th>
                <th>Codigo Postal</th>
                <th>Sitio Web</th>
                <th>Instagram</th>
                <th>Facebook</th>
                <th colspan="3">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($editorials as $editorial)
                <tr>
                    <td>{{ $editorial->edi_nombre }}</td>
                    <td>{{ $editorial->edi_ruc }}</td>
                    <td>{{ $editorial->edi_direccion }}</td>
                    <td>{{ $editorial->edi_telefono }}</td>
                    <td>{{ $editorial->edi_celular }}</td>
                    <td>{{ $editorial->edi_pais }}</td>
                    <td>{{ $editorial->edi_provincia }}</td>
                    <td>{{ $editorial->edi_ciudad }}</td>
                    <td>{{ $editorial->edi_codigo_postal }}</td>
                    <td>{{ $editorial->edi_sitio_web }}</td>
                    <td>{{ $editorial->edi_instagram }}</td>
                    <td>{{ $editorial->edi_facebook }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['editorials.destroy', $editorial->edi_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('editorials.show', [$editorial->edi_id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('editorials.edit', [$editorial->edi_id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $editorials])
        </div>
    </div>
</div>
