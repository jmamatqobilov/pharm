<?php

namespace App\Http\Controllers;

use App\Services\DoriService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(protected ProductService $service)
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