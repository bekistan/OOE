<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certeficate;
class CerteficateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expertise.certeficate');
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
        $filenamewithext2=$request->file('certeficate')->getClientOriginalName();
        $filename2=pathinfo($filenamewithext2,PATHINFO_FILENAME);
        $ext2=$request->file('certeficate')->getClientOriginalExtension();
        $filenametostore2=$filename2.'_'.time().'.'.$ext2;
        $path2=$request->file('certeficate')->storeAs('public/certeficates',$filenametostore2);

        $certeficate =new Certeficate;
        $certeficate->certeficate=$filenametostore2;
        $certeficate->expertise_id=auth()->user()->id;
        $certeficate->save();

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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cert=Certeficate::where('id','=',$id)->get();
        return view('expertise.updatecerteficate')->with('cert',$cert);
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
        $filenamewithext2=$request->file('certeficate')->getClientOriginalName();
        $filename2=pathinfo($filenamewithext2,PATHINFO_FILENAME);
        $ext2=$request->file('certeficate')->getClientOriginalExtension();
        $filenametostore2=$filename2.'_'.time().'.'.$ext2;
        $path2=$request->file('certeficate')->storeAs('public/certeficates',$filenametostore2);

        $certeficate =Certeficate::find($id);
        $certeficate->certeficate=$filenametostore2;
        $certeficate->expertise_id=auth()->user()->id;
        $certeficate->save();

        
        return 11;
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
