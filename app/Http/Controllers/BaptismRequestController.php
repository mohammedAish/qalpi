<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\BaptismRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class BaptismRequestController extends Controller
{
    //
    public function index(){
        $baptism_request=BaptismRequest::where('status','موافقة')->orWhere('status','رفض')->get();

        return view('admin.baptism_request.index',compact('baptism_request'));
    }
    public function create($id){
        $application = Application::whereId($id)->first();
        $services=Service::all();
        return view('admin.baptism_request.create',compact('services','application'));
    }
    public function store(Request $request){
    $data=$request->all();
    $baptism_request = BaptismRequest::create($data);
    return redirect()->route('baptism_request.index')->with('success','تم ارسال الطلب الي المالية بنجاح');
    }
    public function print($id){
        $baptism_request = BaptismRequest::whereId($id)->first();
        return view('admin.baptism_request.print',compact('baptism_request'));
    }
    public function destroy($id){
         $baptism_request=BaptismRequest::findOrFail($id);
         $baptism_request->delete();
         return redirect()->rourlute('baptism_request.index')->with('success','تم الحذف بنجاح');
     }
     public function search(Request $request){
        // dd('ss');
         if($request->ajax()){

          $output="";
        $baptism_request=BaptismRequest::where('patientsـname','LIKE','%'.$request->value."%")->
        orWhere('patientsـid','LIKE','%'.$request->value."%")->get();


        if($baptism_request){
            $page = view('admin.baptism_request.table')->with('baptism_request',$baptism_request)->render();
        // dd($page);
              return Response(['page'=>$page , 'success'=>true]);

             }
       }
     }
     public function edit($id){
        $baptism_request=BaptismRequest::findOrFail($id);
        $services=Service::all();

        return view('admin.baptism_request.edit',compact('baptism_request','services'));
    }
    public function update(Request $request,$id){
        $data=$request->all();
        $baptism_request = BaptismRequest::whereId($id)->update([
            'serviceـprovider' => $request->serviceـprovider,
                'serviceـname' => $request->serviceـname,
                'serviceـprice' => $request->serviceـprice,
                'patientsـname' => $request->patientsـname,
                'patientsـid' => $request->patientsـid,
                'patientsـphone' => $request->patientsـphone,
                'typeـdiagnosis' => $request->typeـdiagnosis,
                'user_name' => $request->user_name,
                'user_phone' => $request->user_phone,
        ]);
        return redirect()->route('baptism_request.index')->with('success','تم الاضافة بنجاح');
        }

}
