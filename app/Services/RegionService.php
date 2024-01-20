<?php
namespace App\Services;

use App\Models\Region;



class RegionService extends BaseService
{
    public function __construct(Region $model)
    {
        $this->model = $model;
    }
}