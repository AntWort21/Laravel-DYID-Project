<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function insert(Request $request){
        $member = new Member();
        $member->memberName = $request->name;
        $member->genderId = $request->genderId;
        $member->memberAddress = $request->address;
        $member->memberEmail = $request->email;
        $member->memberPassword = $request->password;
        $member->roleId = $request->roleId;

        $member->save();


        // dd($member);
        return view('dataInserted');

        // 'memberName',
        // 'genderId',
        // 'memberAddress',
        // 'memberEmail',
        // 'memberPass',
        // 'roleId'
    }
}
