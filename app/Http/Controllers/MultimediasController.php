<?php

namespace App\Http\Controllers;
use App\Models\Multimedia;
use App\Models\User;
use DB;

use Illuminate\Http\Request;

class MultimediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=DB::select("SELECT *FROM multimedia WHERE _type='video'");
        $posts2=DB::select("SELECT *FROM multimedia WHERE _type='audio'");
        return view('multimedia')->with('posts',$posts)->with('posts',$posts)->with('posts2',$posts2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('expertise.upload_multimedia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          
                $filenamewithext=$request->file('multimedia')->getClientOriginalName();
                $filename=pathinfo($filenamewithext,PATHINFO_FILENAME);
                $ext=$request->file('multimedia')->getClientOriginalExtension();
                $filenametostore=$filename.'_'.time().'.'.$ext;
                $path=$request->file('multimedia')->storeAs('public/multimedias',$filenametostore);
            
        
                $filenamewithext2=$request->file('cover')->getClientOriginalName();
                $filename2=pathinfo($filenamewithext2,PATHINFO_FILENAME);
                $ext2=$request->file('cover')->getClientOriginalExtension();
                $filenametostore2=$filename2.'_'.time().'.'.$ext2;
                $path2=$request->file('cover')->storeAs('public/multimedias',$filenametostore2);
           

            $multimedia =new Multimedia;
            $multimedia->name=$filenametostore;
            $multimedia->cover=$filenametostore2;
            $multimedia->_type=$request->input('type');
            $multimedia->details=$request->input('details');
            $multimedia->title=$request->input('title');
            $multimedia->expertise_id=auth()->user()->id;
            $multimedia->save();

            return redirect('http://localhost/OOE/public/multimedia/create')->with('success','successfully Uploaded');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Multimedia::find($id);
        $exid=$post->expertise_id;
        $exp=User::find($exid);
        return view('details2')->with('post',$post)->with('exp',$exp);
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
