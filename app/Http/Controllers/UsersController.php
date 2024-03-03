<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function method2()
    {
        DB::table('users')->insert([
            'login' => 'user1',
            'password' => 'password1',
            'email' => 'email1@gmail.com'
        ]);
        $users=DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
    public function method3()
    {
        DB::table('users')->insert([
            [
                'login' => 'user2',
                'password' => 'password2',
                'email' => 'email2@gmail.com',
            ],
            [
                'login' => 'user3',
                'password' => 'password3',
                'email' => 'email3@gmail.com',
            ],
            [
                'login' => 'user4',
                'password' => 'password4',
                'email' => 'email4@gmail.com',
            ],
        ]);
        $users=DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
    public function method4()
    {
        DB::table('users')->where('login','user1')->update(
            [
                'login' => 'newLogin1',
                'email' => 'newEmail1@gmail.com',
            ]
        );
        $users=DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
    public function method5()
    {
        DB::table('users')->where('login','newLogin1')->delete();
        $users=DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
    public function delete(){
        DB::table('users')->delete();
        $users=DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
}
