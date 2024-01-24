<?php
namespace App\Services;
use App\Models\ProductType;



class ProductTypeService extends BaseService
{
    public function __construct(ProductType $model)
    {
        $this->model = $model;
    }
}