<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table data-table" id="libros-table">
            <thead>
            <tr>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Tipo</th>
                <th>Publicacion Tipo</th>
                <th>Isbn</th>
                <th>Titulo</th>
                <th>Fecha Publicacion</th>
                <th>Edicion</th>
                <th>Paginas</th>
                <th>Tamano</th>
                <th>Precio</th>
                <th>Encuadernacion</th>
                <th>Soporte</th>
                <th>Idioma</th>
                <th>Estado</th>
                <th colspan="3">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($libros as $libros)
                <tr>
                    <td>{{ $libros->aut->aut_nombres . ' ' . $libros->aut->aut_apellidos }}</td>
                    <td>{{ $libros->edi->edi_nombre }}</td>
                    <td>{{ $libros->tip->tip_descripcion }}</td>
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
                    <td>{{ ($libros->lib_estado) ? 'Disponible' : 'Agotado' }}</td>
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
</div>
