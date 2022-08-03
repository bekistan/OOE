<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certeficate;
use App\Models\Feedback;
use App\Models\Post;
use App\Models\Multimedia;
use App\Models\Payment;
use DataTables;
class AdminController extends Controller
{
    public function index(){
       return view('admin.index');
    }
    public function multimedias(Request $request){     
        if ($request->ajax()) {
            $data = Multimedia::select('id','expertise_id','name','_type','cover','details','title')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="<a href="..\storage\multimedias\070813_fiction_saundersbabel_1654965345.mp3" class="btn btn-warning btn-sm">Download</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.multimedialist');
    }
    public function books(Request $request){     
        if ($request->ajax()) {
            $data = Post::select('id','expertise_id','file_name','file_type','cover','description','title')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="..\storage\books\book1_1655070062.pdf" class="btn btn-warning btn-sm">Download</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.booklist');
    }
    public function view(Request $request){     
        if ($request->ajax()) {
            $data = Certeficate::select('id','expertise_id','certeficate')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="..\storage\certeficates\expertisedashboard_1655067618.png" class="btn btn-warning btn-sm">Download</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.expertisecerteficate');
    }
    public function feedback(Request $request){     
        if ($request->ajax()) {
            $data = Feedback::select('id','user_id','content')->get();
            return Datatables::of($data)->addIndexColumn()
                ->make(true);
        }

        return view('admin.feedbacklist');
    }

    public function payment(Request $request){     
        if ($request->ajax()) {
            $data = Payment::select('id','customer_id','payment')->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="..\storage\payment\books_1655175414.png" class="btn btn-warning btn-sm">Download</a>';
                return $btn;
            })
                ->make(true);
        }

        return view('admin.payments');
    }

    }
