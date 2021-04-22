<?php 
namespace App\Repositories;

interface RepositoryInterface
{
    public function all($query = null, $paginate = true);

    public function create(array $data);

    public function update(array $data, $id);

    public function updateOrCreate(array $data);

    public function delete($id);

    public function find($id);
}