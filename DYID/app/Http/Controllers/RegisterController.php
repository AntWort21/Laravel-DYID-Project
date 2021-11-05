<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function insert(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->gender_id = $request->gender;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        $user->save();


        // dd($user);
        return redirect('mainpage');

        // 'memberName',
        // 'genderId',
        // 'memberAddress',
        // 'memberEmail',
        // 'memberPass',
        // 'roleId'
    }
}
