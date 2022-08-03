<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multimedia;
use App\Models\Post;
use App\Models\Certeficate;
use DB;
class ExpertiseController extends Controller
{
    public function index(){
        $id=Auth()->id();
        $certeficate=Certeficate::where('expertise_id','=',$id)->get();
       return view('expertise.index')->with('certeficate',$certeficate);
    }
    public function view(){
        $id=Auth()->id();     
        $posts=Multimedia::where('_type','=','video')->where('expertise_id','=',$id)->get();
        $posts2=Multimedia::where('_type','=','audio')->where('expertise_id','=',$id)->get();
        return view('expertise.uploadedmultimedia')->with('multimedia',$posts)->with('multimedia2',$posts2);
    }
    public function view2(){
        $id=Auth()->id();
        $posts=Post::where('file_type','=','psychology')->where('expertise_id','=',$id)->get();
        $posts2=Post::where('file_type','=','educational')->where('expertise_id','=',$id)->get();
        $posts3=Post::where('file_type','=','fiction')->where('expertise_id','=',$id)->get();
        
        return view('expertise.uploadedbooks')->with('posts',$posts)->with('posts2',$posts2)->with('posts3',$posts3);
    }
}
