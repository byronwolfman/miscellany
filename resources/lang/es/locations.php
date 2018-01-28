<?php

return [
    'attributes'    => [
        'actions'       => [
            'add'   => 'Añadir atributo',
        ],
        'create'        => [
            'description'   => 'Establece un atributo a un lugar',
            'success'       => 'Atributo añadido a :name',
            'title'         => 'Nuevo Atributo para :name',
        ],
        'destroy'       => [
            'success'   => 'Atributo del lugar para :name borrado.',
        ],
        'edit'          => [
            'success'   => 'Atributo del lugar para :name actualizado.',
            'title'     => 'Actualizar atributo para :name',
        ],
        'fields'        => [
            'attribute' => 'Atributo',
            'value'     => 'Valor',
        ],
        'placeholders'  => [
            'attribute' => 'Población, Numero de inundaciones, tamaño del ejercito',
            'value'     => 'Valor del atributo',
        ],
    ],
    'create'        => [
        'success'   => 'Lugar \':name\' creada.',
        'title'     => 'Crear nueva localización',
    ],
    'destroy'       => [
        'success'   => 'Lugar \':name\' borrada.',
    ],
    'edit'          => [
        'success'   => 'Lugar \':name\' actualizada.',
        'title'     => 'Editar Lugar :name',
    ],
    'fields'        => [
        'characters'    => 'Personajes',
        'description'   => 'Descripción',
        'history'       => 'Historia',
        'image'         => 'Imagen',
        'location'      => 'Lugar',
        'name'          => 'Nombre',
        'relation'      => 'Relación',
        'type'          => 'Tipo',
    ],
    'index'         => [
        'add'           => 'Nuevo Lugar',
        'description'   => 'Gestionar la localización de :name.',
        'header'        => 'Lugares en :name',
        'title'         => 'Lugares',
    ],
    'placeholders'  => [
        'location'  => 'Elige un lugar vinculado',
        'name'      => 'Nombre del lugar',
        'type'      => 'Ciudad, Reino, Ruinas',
    ],
    'show'          => [
        'description'   => 'Vista detallada del lugar',
        'tabs'          => [
            'attributes'    => 'Atributos',
            'characters'    => 'Personajes',
            'information'   => 'Información',
            'locations'     => 'Lugares',
            'relations'     => 'Relación',
        ],
        'title'         => 'Lugar :name',
    ],
];
