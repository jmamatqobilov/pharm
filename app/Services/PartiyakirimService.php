<?php
namespace App\Services;

use App\Models\Partiyainput;



class PartiyakirimService extends BaseService
{
    public function __construct(Partiyainput $model)
    {
        $this->model = $model;
    }
}