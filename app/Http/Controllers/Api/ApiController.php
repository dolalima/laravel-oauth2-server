<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ApiController extends BaseController
{

    public function __construct()
    {
        //$this->middleware('guest');
        $this->middleware('oauth');
        $this->middleware('oauth-user');
    }

    protected function getAll(){}

    protected function getById($id){}

    protected function getByIds($ids){}

    protected function create(){}

    protected function edit(){}

    protected function delete(){}

    public function reponse($success = false,$mensage = '',$data = null){
        $result = array();
        $result['success'] = $success;
        $result['mensage'] = $mensage;
        $result['data'] = data;
        die(json_encode());
    }


}