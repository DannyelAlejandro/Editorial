<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="libros-table">
            <thead>
            <tr>
                <th>Aut Id</th>
                <th>Edi Id</th>
                <th>Usu Id</th>
                <th>Tip Id</th>
                <th>Lib Publicacion Tipo</th>
                <th>Lib Isbn</th>
                <th>Lib Titulo</th>
                <th>Lib Fecha Publicacion</th>
                <th>Lib Edicion</th>
                <th>Lib Paginas</th>
                <th>Lib Tamano</th>
                <th>Lib Precio</th>
                <th>Lib Encuadernacion</th>
                <th>Lib Soporte</th>
                <th>Lib Idioma</th>
                <th>Lib Estado</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($libros as $libros)
                <tr>
                    <td>{{ $libros->aut_id }}</td>
                    <td>{{ $libros->edi_id }}</td>
                    <td>{{ $libros->usu_id }}</td>
                    <td>{{ $libros->tip_id }}</td>
                    <td>{{ $libros->lib_publicacion_tipo }}</td>
                    <td>{{ $libros->lib_isbn }}</td>
                    <td>{{ $libros->lib_titulo }}</td>
                    <td>{{ $libros->lib_fecha_publicacion }}</td>
                    <td>{{ $libros->lib_edicion }}</td>
                    <td>{{ $libros->lib_paginas }}</td>
                    <td>{{ $libros->lib_tamano }}</td>
                    <td>{{ $libros->lib_precio }}</td>
                    <td>{{ $libros->lib_encuadernacion }}</td>
                    <td>{{ $libros->lib_soporte }}</td>
                    <td>{{ $libros->lib_idioma }}</td>
                    <td>{{ $libros->lib_estado }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['libros.destroy', $libros->lib_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('libros.show', [$libros->lib_id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('libros.edit', [$libros->lib_id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $libros])
        </div>
    </div>
</div>
