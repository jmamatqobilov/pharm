<?php

namespace App\Http\Controllers;

use App\Services\DoritypeService;
use App\Services\ProductTypeService;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function __construct(protected ProductTypeService $service)
    {
        
    }


    public function all(){
        return $this->service->getList();
    }

    public function create(Request $request){
        return $this->service->create($request->all());
    }

    public function update(Request $request,$id){
        return $this->service->update($request,$id);
    }

    public function delete($id){
        return $this->service->delete($id);
    }
}
