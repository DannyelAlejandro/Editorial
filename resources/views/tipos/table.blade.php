<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="tipos-table">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Siglas</th>
                <th>Estado</th>
                <th colspan="3">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tipos as $tipos)
                <tr>
                    <td>{{ $tipos->tip_descripcion }}</td>
                    <td>{{ $tipos->tip_siglas }}</td>
                    <td>{{ ($tipos->tip_estado) ? 'Activo' : 'Inactivo' }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['tipos.destroy', $tipos->tip_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tipos.show', [$tipos->tip_id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tipos.edit', [$tipos->tip_id]) }}"
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


</div>
