<?php

namespace App\Services\Impl;

use App\Models\Area;
use App\Services\AreaService;
use Illuminate\Support\Arr;

class AreaServiceImpl implements AreaService
{
    function all()
    {
        return Area::all();
    }

    function show($id)
    {
        return Area::with(['teachers', 'courses'])->find($id);
    }

    function create(array $data)
    {
        return Area::create($data);
    }

    function update($id, array $request)
    {
        $area = Area::find($id);
        if(!$area){
            return null;
        }

        $area->update($id);
        return $area;
    }

    function delete($id)
    {
        $area = Area::find($id);
        if(!$area){
            return null;
        }

        return $area->delete();
    }
}
