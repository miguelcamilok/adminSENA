<?php

namespace App\Services\Impl;

use App\Models\TrainingCenter;
use App\Services\TrainingCenterService;

class TrainingCenterServiceImpl implements TrainingCenterService
{
   function all()
    {
        return TrainingCenter::included()->filter()->sort()->getOrPaginate();
    }

    function show($id)
    {
        return TrainingCenter::with(['teachers', 'courses'])->find($id);
    }

    function create(array $data)
    {
        return TrainingCenter::create($data);
    }

    function update($id, array $data)
    {
        $trainingCenter = TrainingCenter::find($id);
        if (!$trainingCenter) {
            return null;
        }

        $trainingCenter->update($data);
        return $trainingCenter;
    }

    function delete($id)
    {
        $trainingCenter = TrainingCenter::find($id);
        if (!$trainingCenter) {
            return false;
        }

        return $trainingCenter->delete();
    }
}
