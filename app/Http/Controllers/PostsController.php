<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $posts=DB::select("SELECT *FROM posts WHERE file_type='psychology'");
        $posts2=DB::select("SELECT *FROM posts WHERE file_type='educational'");
        $posts3=DB::select("SELECT *FROM posts WHERE file_type='fiction'");
        return view('materials')->with('posts',$posts)->with('posts2',$posts2)->with('posts3',$posts3);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expertise.upload_books');
    }

     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filenamewithext=$request->file('book')->getClientOriginalName();
        $filename=pathinfo($filenamewithext,PATHINFO_FILENAME);
        $ext=$request->file('book')->getClientOriginalExtension();
        $filenametostore=$filename.'_'.time().'.'.$ext;
        $path=$request->file('book')->storeAs('public/books',$filenametostore);
    

        $filenamewithext2=$request->file('cover')->getClientOriginalName();
        $filename2=pathinfo($filenamewithext2,PATHINFO_FILENAME);
        $ext2=$request->file('cover')->getClientOriginalExtension();
        $filenametostore2=$filename2.'_'.time().'.'.$ext2;
        $path2=$request->file('cover')->storeAs('public/books',$filenametostore2);
   

    $book =new Post;
    $book->file_name=$filenametostore;
    $book->cover=$filenametostore2;
    $book->file_type=$request->input('type');
    $book->description=$request->input('details');
    $book->title=$request->input('title');
    $book->expertise_id=auth()->user()->id;
    $book->save();

    return redirect('http://localhost/OOE/public/posts/create')->with('success','successfully Uploaded');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        $exid=$post->expertise_id;
        $exp=User::find($exid);
        return view('details')->with('post',$post)->with('exp',$exp);
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
