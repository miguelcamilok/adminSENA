<?php

namespace App\Services;

use Illuminate\Support\Arr;

interface ApprenticeService
{
    function all();
    function show($id);
    function create(array $data);
    function update($id, array $data);
    function delete($id);
}
