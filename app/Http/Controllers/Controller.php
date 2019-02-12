<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
        $username=$req->input('username');
        $email=$req->input('email');
        $password=$req->input('password');

        $data=array('username'=>$username,'email'=>$email,'password'=>$password);
        DB::table('users')->insert($data);

        echo "success";
    }
}

