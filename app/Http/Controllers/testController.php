<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{
    public function index(){
        $user = User::first();
//        $user->attachRole(2);
//        $admin = Role::find(2);
//        $admin->attachPermission(Permission::first());

        dd($user->can('create-post'));
    }
}
