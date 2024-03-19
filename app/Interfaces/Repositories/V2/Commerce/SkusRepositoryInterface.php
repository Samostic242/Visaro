<?php
namespace App\Interfaces\Repositories\V2\Commerce;

Interface SkusRepositoryInterface
{
    public function create(array $data);

    public function update(string $id, array $data);
}
