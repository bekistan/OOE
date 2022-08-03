<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.payment');
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
        $filenamewithext2=$request->file('payment')->getClientOriginalName();
        $filename2=pathinfo($filenamewithext2,PATHINFO_FILENAME);
        $ext2=$request->file('payment')->getClientOriginalExtension();
        $filenametostore2=$filename2.'_'.time().'.'.$ext2;
        $path2=$request->file('payment')->storeAs('public/payment',$filenametostore2);

        $payment =new Payment;
        $payment->payment=$filenametostore2;
        $payment->customer_id=auth()->user()->id;
        $payment->save();

        return redirect('http://localhost/OOE/public/payment')->with('success','successfully sent');
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
