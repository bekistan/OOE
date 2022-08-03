<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
       return view('users.index');
    }

    public function updateprofile(){
        return view('users.updateprofile');
     }
     
    
    public function users()
    {
        $users = User::where('role', '=', 2)->get();
        return view('users.expertiselist', compact('users'));
    }
    public function search()
    {
        $search_text=$_GET['query'];
        User::query()->where('name', 'LIKE', '%'.$search_text.'%')->get();
        return view('users.searchexpertise', compact('users'));
    }

    public function user($id)
    {
        $user = User::find($id);
        return view('users.viewexp', compact('user'));
    }
    public function ajaxRequest(Request $request){


        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);

        return response()->json(['success'=>$response]);
    }
}
