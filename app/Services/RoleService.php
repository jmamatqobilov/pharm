<?php
namespace App\Services;

use App\Models\Party;
use Spatie\Permission\Models\Role;



class RoleService extends BaseService
{
    public function __construct(Role $model)
    {
        $this->model = $model;
    }
}