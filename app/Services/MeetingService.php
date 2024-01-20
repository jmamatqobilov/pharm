<?php
namespace App\Services;

use App\Models\Meeting;



class MeetingService extends BaseService
{
    public function __construct(Meeting $model)
    {
        $this->model = $model;
    }
}