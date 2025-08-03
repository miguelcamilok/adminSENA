<?php

namespace App\Services;

interface ComputerService
{
    function all();
    function show($id);
    function create(array $data);
    function update($id, array $data);
    function delete($id);
}
