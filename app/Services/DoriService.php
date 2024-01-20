<?php
namespace App\Services;
use App\Models\Dori;



class DoriService extends BaseService
{
    public function __construct(Dori $model)
    {
        $this->model = $model;
    }
}