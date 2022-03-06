<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class dbtestController extends Controller
{
    public function index()
    {
        // $user = new User();
        // $user -> name = "Saleh";
        // $user->email = "saleh404@yahoo.com";
        // $user->password = "s123123";
        // $user->save();
        // return $user;


        // $data1 = ['name'=>"Mohammed Jaber",'email'=>"M15jj@google.com",'password'=>"ali@123"];
        //         $data2 = ['name'=>"Luqman",'email'=>"luqman124@google.com",'password'=>bcrypt("ali@123")];
        //         $dataList =[$data1,$data2];
        // User::create($data1);
        //  User::create($data2);
// User::where('id',13)->update(['name'=>'Luqman Al-thwaimer']);
// User::where('id',13)->delete();

        $user = User::all();

        // return $user;
        return view('dbtest')->with('users',$user);
    }
}
