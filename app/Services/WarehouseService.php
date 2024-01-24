<?php
namespace App\Services;

use App\Models\Apteka;
use App\Models\Warehouse;



class WarehouseService extends BaseService
{
    public function __construct(Warehouse $model,Apteka $aptekamodel)
    {
        $this->model = $model;
    }
}