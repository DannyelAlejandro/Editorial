<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="autors-table">
            <thead>
            <tr>
                <th>Aut Apellidos</th>
                <th>Aut Nombres</th>
                <th>Aut Sitio Web</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($autors as $autor)
                <tr>
                    <td>{{ $autor->aut_apellidos }}</td>
                    <td>{{ $autor->aut_nombres }}</td>
                    <td>{{ $autor->aut_sitio_web }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['autors.destroy', $autor->aut_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('autors.show', [$autor->aut_id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('autors.edit', [$autor->aut_id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $autors])
        </div>
    </div>
</div>
