<?php
namespace App\Services;

use App\Models\Doritype;



class DoritypeService extends BaseService
{
    public function __construct(Doritype $model)
    {
        $this->model = $model;
    }
}