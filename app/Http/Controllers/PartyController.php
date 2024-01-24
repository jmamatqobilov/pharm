<?php

namespace App\Http\Controllers;

use App\Services\PartiyService;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function __construct(protected PartiyService $service){

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
        return $this->service->update($request,$id);
    }

    public function destroy($id){
        return $this->service->delete($id);
    }
}
