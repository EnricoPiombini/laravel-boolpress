<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view("admin.users.index", compact("users"));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view("admin.users.edit", compact("user"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $user = User::findOrFail($id);

        if (!$user->details) {
            $userDetails = new UserDetail();
            
            $userDetails->user_id = $user->id;
            $userDetails->fill($data);
            $userDetails->save();
        } else {
            $user->details->update($data);
        }



        // 

        $user->update($data);

       return redirect()->route("admin.users.edit", $user->id);
    }
    # code...
}
