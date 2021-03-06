<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::query()->whereHas('roles',function($q){
            $q->where('roles.name','admin');
        })->get();
         return view('admin.admins.users.all',compact('users'));
    }
}
