<?php
namespace App\Services;
use App\Models\Doctor;




class DoctorService extends BaseService
{
    public function __construct(Doctor $model)
    {
        $this->model = $model;
    }
}