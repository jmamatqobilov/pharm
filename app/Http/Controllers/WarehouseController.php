<?php

namespace App\Http\Controllers;

use App\Services\PartiyService;
use App\Services\WarehouseService;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function __construct(
        protected WarehouseService $service,
        protected PartiyService $partiyService)
    {
        
    }

    public function productout(Request $request,$id){
        return $this->partiyService->update($request,$id);
    }


    public function index(){
        return $this->service->getList();
    }

    public function show($id){
        return $this->service->getById($id);
    }

    public function store(Request $request){
        return $this->service->create($request->all());
    }

    public function update(Request $request,$id){
        return $this->service->update($request->all(),$id);
    }

    public function destroy($id){
        return $this->service->delete($id);
    }



}
