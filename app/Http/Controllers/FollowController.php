<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Multimedia;
use DB;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=auth()->id();
        $eid=DB::select("SELECT * FROM followables WHERE user_id='".$id."'");
        return view('users.followedexpertise')->with('eid',$eid);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $multimedia=Multimedia::where('_type','=','video')->where('expertise_id','=',$id)->get();
        $multimedia2=Multimedia::where('_type','=','audio')->where('expertise_id','=',$id)->get();
        $books=DB::select("SELECT * FROM posts WHERE expertise_id='".$id."'");
        $expertise=User::where('id','=',$id)->get();
        return view('users.followedcontent')->with('multimedia',$multimedia)->with('multimedia2',$multimedia2)->with('books',$books)->with('expertise',$expertise);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
