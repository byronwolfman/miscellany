<?php

namespace App\Http\Controllers\Maps;

use App\Datagrids\Bulks\MapBulk;
use App\Datagrids\Filters\MapFilter;
use App\Datagrids\Sorters\MapMapSorter;
use App\Http\Controllers\CrudController;
use App\Http\Requests\StoreMap;
use App\Models\Map;
use App\Traits\TreeControllerTrait;

class MapController extends CrudController
{
    use TreeControllerTrait;

    /**
     * @var string
     */
    protected $view = 'maps';
    protected $route = 'maps';

    /**
     * Crud models
     */
    protected $model = \App\Models\Map::class;

    /** @var string Filter */
    protected $filter = MapFilter::class;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMap $request)
    {
        return $this->crudStore($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $map
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map)
    {
        return $this->crudShow($map);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Map $map
     * @return \Illuminate\Http\Response
     */
    public function edit(Map $map)
    {
        return $this->crudEdit($map);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Map $map
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMap $request, Map $map)
    {
        return $this->crudUpdate($request, $map);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $map)
    {
        return $this->crudDestroy($map);
    }

    /**
     * @param Map $map
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function maps(Map $map)
    {
        return $this->datagridSorter(MapMapSorter::class)
            ->menuView($map, 'maps');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function mapPoints(Map $map)
    {
        return $this->menuView($map, 'map-points', true);
    }
}
