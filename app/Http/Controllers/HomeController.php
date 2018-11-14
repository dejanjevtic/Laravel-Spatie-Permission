<?php

namespace App\Http\Controllers;

use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        //Role::create(['name'=>'writer']);
        //$permission = Permission::create(['name'=>'edit post']);
        $role = Role::findById(1); 
        $permission = Permission::find(1);
        //$role->givePermissionTo($permission);
        //$permission->removeRole($role);
        $role->revokePermissionTo($permission); */
        //Role::create(['name'=>'writer']);
         //$permission = Permission::create(['name'=>'write post']);
         //$role = Role::findById(1); 
         //$role->givePermissionTo($permission);
        //auth()->user()->givePermissionTo('edit post');
        //auth()->user()->assignRole('writer');
        //return auth()->user()->getAllPermissions();
        //return User::permission('write post')-> get();
        return auth()->user()->revokePermissionTo('edit post');
        return auth()->user()->removeRole('writer');
        return view('home');
    }
}
