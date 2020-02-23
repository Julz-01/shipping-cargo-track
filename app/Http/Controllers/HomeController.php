<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tracking;
use App\schedule;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function upload()
    {
        return view('admin.uploads');
    }
    public function changelocale(){
          \Session::put('locale', 'zh-CN');
          return redirect()->back();
    }
    public function updates(){
        return view('admin.update');
    }
    public function uplist(){
      $data = tracking::paginate(10);
      return view('admin.uplist', compact('data'));
    }
    public function upid(tracking $id){
      $data = tracking::where('id', '=', $id->id)->first();
      return view('admin/view_update',compact('data'));
    }
    public function up(tracking $id){
      $datas = tracking::where('id', '=', $id->id)->first();

      $datas->blnumber = request('up_bl');
      $datas->container = request('up_container');
      $datas->consignee = request('up_consignee');
      $datas->port = request('up_port');
      $datas->discharge = request('up_discharge');
      $datas->save();
          return redirect('uplist');
    }
    public function sched(){
        return view('admin.schedule');
    }
}
