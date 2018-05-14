@extends('layouts.app', [
    'title' => trans('locations.map.points.title', ['name' => $location->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => route('locations.index'), 'label' => trans('locations.index.title')],
        ['url' => route('locations.show', $location->id), 'label' => $location->name]
    ]
])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('locations.show', [$location, '#tab_map']) }}" class="btn btn-default">
                        <i class="fa fa-arrow-left"></i> {{ trans('locations.map.points.return', ['name' => $location->name]) }}
                    </a>

                    <p class="help-block">{{ trans('locations.map.helper') }}</p>
                    @include('partials.errors')

                    <div class="map map-admin" id="location-map-admin">
                        <div id="draggable-map">
                            <img src="/storage/{{ $location->map }}" alt="{{ $location->name }}" id="location-map-image" data-url="{{ route('locations.map_points.create', $location) }}" />
                            @foreach ($location->mapPoints()->with('target')->get() as $point)
                                <div class="point" style="top: {{ $point->axis_y }}px; left: {{ $point->axis_x }}px; background-color: {{ $point->colour }};" data-toggle="tooltip" title="{{ $point->target->name }}" data-url="{{ route('locations.map_points.edit', [$location, $point]) }}">
                                    <i class="fa fa-map-marker" style="@if ($point->colour == 'white') color: black; @endif"></i>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="point-location" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('locations.map.modal.title') }}</h4>
                </div>
                <div class="modal-body" id="map-point-body">

                </div>
            </div>
        </div>
    </div>
@endsection
