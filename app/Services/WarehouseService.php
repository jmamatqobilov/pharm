<?php
namespace App\Services;

use App\Models\Warehouse;



class WarehouseService extends BaseService
{
    public function __construct(Warehouse $model)
    {
        $this->model = $model;
    }
}