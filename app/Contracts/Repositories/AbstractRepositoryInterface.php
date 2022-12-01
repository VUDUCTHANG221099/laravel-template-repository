<?php

namespace App\Contracts\Repositories;

interface AbstractRepositoryInterface
{
    public function getByIdDESCAll();
    public function getByIdASCAll();
    public function getById($id);
    public function deleteById($id);
    public function insert(array $data);
    public function update($id,array $data);
}
