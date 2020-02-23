<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\tracking;

class PagesController extends Controller
{
    public function index(){
      $sched = schedule::orderBy('updated_at','DESC')->limit(5)->get();
      $update = tracking::orderBy('updated_at','DESC')->limit(5)->get();
      return view('index', compact('sched', 'update'));
    }

    public function update(){
      $data = tracking::paginate(10);
      return view('updates', compact('data'));
    }

    public function schedule(){
      $data = schedule::paginate(10);
      return view('vessel', compact('data'));
    }
      public function tracker(){
        $data = tracking::where('blnumber','=',request('bl_no'))->get();
        $bl_no = request('bl_no');
        return view('track',compact('data','bl_no'));
    }
}
