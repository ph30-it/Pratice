<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\Profile;

class UserController extends Controller
{
    public function index()
    {
    	// \DB::enableQueryLog();

     //    $userAdmin= User::isAdmin('admin', 'abc', 'abc@gmail.com')->get();

     //    dd($userAdmin);
     //    dd(\DB::getQueryLog());

        // $user = User::create(
        //         [
        //             'name' => 'abc',
        //             'email' => 'abc'.rand(1,1000).'@gmail.com',
        //             'password' => '11111'
        //         ]
        //     );
        // dd($user);

        $user= User::all();
        // $user->delete();
        dd($user->last());
    	// $user = User::find(3);
     //    $profiles = $user->profiles;
        // dd($profiles);
    	// $profile= Profile::where('user_id', 3)->first();

        // $user = User::with('profiles')
        //             ->where('id', 3)
        //             ->first();

        // dd($user->profiles, $user->profiles[1]->address);
        // $user= User::create(['email' => 'abc'.rand(1,1000).'@gmail.com', 'name' => 'aa', 'password' => '1111']);
        // $user = User::find(1)->images()->create(['path'=> 'image/user1.png']);

        // $user = Profile::find(2)->user;



    	dd($user);
    }

    public function editRoles()
    {
        // $roleuser= \App\RoleUser::all();
        // dd($roleuser);
        $user= User::find(1);
        // $user->roles()->attach(1);
        $user->roles()->sync(2);
        // dd('q',$user);
    }

    public function listOrderItem($userId)
    {
        $user= User::find($userId);
        // \DB::enableQueryLog();
        $orderItems= $user->orderItems;
        // dd(\DB::getQueryLog());
        dd($orderItems);
    }
}
