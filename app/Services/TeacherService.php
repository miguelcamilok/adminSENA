<?php

namespace App\Services;

interface TeacherService
{
    function all();
    function show($id);
    function create(array $data);
    function update($id, array $data);
    function delete($id);
}
