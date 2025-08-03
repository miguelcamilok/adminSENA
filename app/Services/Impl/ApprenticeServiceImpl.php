<?php

namespace App\Services\Impl;

use App\Models\Apprentice;
use App\Services\ApprenticeService;

class ApprenticeServiceImpl implements ApprenticeService
{
    function all()
    {
        return Apprentice::all();
    }

    function show($id)
    {
        return Apprentice::with(['course', 'computer'])->find($id);
    }

    function create(array $data)
    {
        return Apprentice::create($data);
    }

    function update($id, array $data)
    {
        $apprentice = Apprentice::find($id);
        if (!$apprentice) {
            return null;
        }

        $apprentice->update($data);
        return $apprentice;
    }

    function delete($id)
    {
        $apprentice = Apprentice::find($id);
        if (!$apprentice) {
            return false;
        }

        return $apprentice->delete();
    }
}
