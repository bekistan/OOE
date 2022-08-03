<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Contactus;
use App\Models\Conversation;
use DB;


class AdminpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $count=User::where('role','=',2)->get()->count();
        $count1=User::where('role','=',3)->get()->count();
        $count2 = DB::table('posts')->select(DB::raw('count(*) as count'))->where('id','!=',0)->first()->count;
        $count3 = DB::table('multimedia')->select(DB::raw('count(*) as count'))->where('id','!=',0)->first()->count;
        $contactus=Contactus::get()->count();
        $contact=Contactus::get();
        $users=DB::select("SELECT *FROM users WHERE role=2");
        $users3=DB::select("SELECT *FROM users WHERE role=3");
        return view('admindashboard')->with('count',$count)->with('count2',$count2)->with('users',$users)->with('users3',$users3)->with('count3',$count3)->with('count1',$count1)->with('contactus',$contactus)->with('contact',$contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        return 11;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pp=User::find($id);
        $pp->approve='approved';
        $pp->name=$request->input('name');
        $pp->password=$request->input('password');
        $pp->email=$request->input('email');
        $pp->role=$request->input('role');
        $pp->proffesion=$request->input('proffesion');
        $pp->phone_number=$request->input('phone_number');
        $pp->status=$request->input('status');
        $pp->gender=$request->input('gender');
        $pp->educational_status=$request->input('educational_status');
        $pp->address=$request->input('address');
            
        $pp->save();

        return redirect('http://localhost/OOE/public/dashboard')->with('success','successfully Approved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post=User::find($id);
        $post->delete();
        return redirect('http://localhost/OOE/public/dashboard')->with('success','successfully Deleted');
    }
}
