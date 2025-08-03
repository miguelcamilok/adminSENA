<?php

namespace App\Services\Impl;

use App\Models\Computer;
use App\Services\ComputerService;

class ComputerServiceImpl implements ComputerService
{
    function all()
    {
        return Computer::included()->filter()->sort()->getOrPaginate();
    }

    function show($id)
    {
        return Computer::with(['apprentice'])->find($id);
    }

    function create(array $data)
    {
        return Computer::create($data);
    }

    function update($id, array $data)
    {
        $computer = Computer::find($id);
        if (!$computer) {
            return null;
        }

        $computer->update($data);
        return $computer;
    }

    function delete($id)
    {
        $computer = Computer::find($id);
        if (!$computer) {
            return false;
        }

        return $computer->delete();
    }
}
