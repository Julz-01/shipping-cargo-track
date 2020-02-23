<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;

class SchedController extends Controller
{
public function scheduler(){
        $this-> validate(request(),
            [
                'vessel' => 'required',
                'voy' => 'required',
                'shihu' =>  'required|date|regex:/\d{1,2}\/\d{1,2}\/\d{4}/',
                'weitou' => 'required|date|regex:/\d{1,2}\/\d{1,2}\/\d{4}/',
                'xiamen' => 'required|date|regex:/\d{1,2}\/\d{1,2}\/\d{4}/',
                'north' => 'required|date|regex:/\d{1,2}\/\d{1,2}\/\d{4}/',
                'south' => 'required|date|regex:/\d{1,2}\/\d{1,2}\/\d{4}/',
            ]);
    
        schedule::create([
 'vessel' => request('vessel'),
 'voy' => request('voy'),
 'shihu' => request('shihu'),
 'weitou' => request('weitou'),
 'xiamen' => request('xiamen'),
 'north' => request('north'),
 'south' => request('south'),

        ]);
        return redirect('sclist');
}
  public function sclist(){
     $datas = schedule::paginate(7);
        return view('admin/sclist',compact('datas'));
    }
  public function scid(schedule $id){
    $datas = schedule::where('id', '=', $id->id)->first();
    return view('admin/view_id',compact('datas'));
  }
  public function up(schedule $id){
    $datas = schedule::where('id', '=', $id->id)->first();

    $datas->vessel = request('up_vessel');
    $datas->voy    = request('up_voy');
    $datas->shihu  = request('up_shihu');
    $datas->weitou = request('up_weitou');
    $datas->xiamen = request('up_xiamen');
    $datas->north  = request('up_north');
    $datas->south  = request('up_south');
    $datas->save();
        return redirect('sclist');
  }
}


