<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="multimedia-table">
            <thead>
            <tr>
                <th>Lib Id</th>
                <th>Mlt Tipo</th>
                <th>Mlt Multimedia</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($multimedia as $multimedia)
                <tr>
                    <td>{{ $multimedia->lib_id }}</td>
                    <td>{{ $multimedia->mlt_tipo }}</td>
                    <td>{{ $multimedia->mlt_multimedia }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['multimedia.destroy', $multimedia->mlt_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('multimedia.show', [$multimedia->mlt_id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('multimedia.edit', [$multimedia->mlt_id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $multimedia])
        </div>
    </div>
</div>
