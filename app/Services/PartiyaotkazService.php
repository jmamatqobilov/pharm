<?php
namespace App\Services;

use App\Models\Partiyabrak;



class PartiyaotkazService extends BaseService
{
    public function __construct(Partiyabrak $model)
    {
        $this->model = $model;
    }
}