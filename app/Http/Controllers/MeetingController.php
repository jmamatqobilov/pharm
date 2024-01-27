<?php

namespace App\Http\Controllers;

use App\Services\MeetingService;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function __construct(protected MeetingService $service)
    {
        
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
