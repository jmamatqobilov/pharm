<?php
namespace App\Services;
use App\Models\Apteka;




class AptekaService extends BaseService
{
    public function __construct(Apteka $model)
    {
        $this->model = $model;
    }
}