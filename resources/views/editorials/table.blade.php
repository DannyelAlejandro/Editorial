<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="editorials-table">
            <thead>
            <tr>
                <th>Edi Nombre</th>
                <th>Edi Ruc</th>
                <th>Edi Direccion</th>
                <th>Edi Telefono</th>
                <th>Edi Celular</th>
                <th>Edi Pais</th>
                <th>Edi Provincia</th>
                <th>Edi Ciudad</th>
                <th>Edi Codigo Postal</th>
                <th>Edi Sitio Web</th>
                <th>Edi Instagram</th>
                <th>Edi Facebook</th>
                <th colspan="3">Action</th>
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
