<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signup;
use Illuminate\Support\Facades\Hash;



class LogingOneController extends Controller
{
    public function singUpData(){
        return view('AdminForm');
    }

    public function saveTast(Request $request){
        $signup=new signup();
        $signup->userName=$request->username;
        $signup->email=$request->email;
        $signup->password=Hash::make($request->password);
        $signup->save();
        // $al=redirect()->back();
            
        echo "Sucsess";

        $notification=array(
            'message'=>'Added SucsessFully',
            'alert-type'=>'sucsess'
        );
         return back()->with($notification);
    }
}
