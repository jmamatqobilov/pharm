<?php

namespace App\Http\Controllers;


use App\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(protected ClientService $service)
    {
        $this->middleware('permission:create-product|edit-product|delete-product', ['only' => ['index','show']]);
        $this->middleware('permission:create-product', ['only' => ['create','store']]);
        $this->middleware('permission:edit-product', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-product', ['only' => ['destroy']]);
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
