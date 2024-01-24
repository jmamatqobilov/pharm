<?php
namespace App\Services;

use App\Models\Party;



class PartiyService extends BaseService
{
    public function __construct(Party $model)
    {
        $this->model = $model;
    }
}