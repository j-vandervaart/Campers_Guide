<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Type;
use App\Activitie;
use Image;

class UsersController extends Controller
{
    
    public function usersList()
    {
        $users = User::get();
        //echo $users;
        return view('users.users', ['users' => $users]);
    }

    public function profile()
    {
        $username = auth()->user();
        return view('users.profile', ['username' => $username]);
    }

    public function specUser($id)
    {
        $user = User::find($id);
        return view('users.specprofile', ['user' => $user]);
    }

    public function prof_image(Request $request)
    {
        if($request->hasFile('prof_image')){
            $file = $request->file('prof_image');
            $filename = $file->getClientOriginalName();
            Image::make($file)->resize(200, 200)->save( public_path('/uploads/prof_image/'.$filename ));
            //$file->move('uploads/prof_image', $filename);

            $user = auth()->user();
            $user->prof_image = $filename;
            $user->save();
        }

        return view('users.profile', array('username' => auth()->user()));
    }
}
