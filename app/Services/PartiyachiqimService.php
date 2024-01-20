<?php
namespace App\Services;
use App\Models\Dori;
use App\Models\Partiyaout;



class PartiyachiqimService extends BaseService
{
    public function __construct(Partiyaout $model)
    {
        $this->model = $model;
    }
}