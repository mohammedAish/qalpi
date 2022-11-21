<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\BaptismRequest;
use App\Models\Service;
use Illuminate\Http\Request;


class FinanceController extends Controller
{
    public function index(){
        $finance=BaptismRequest::all();
        return view('admin.finance.index',compact('finance'));
    }

    public function print($id){
        $finance = BaptismRequest::whereId($id)->first();
        return view('admin.finance.print',compact('finance'));
    }
    public function destroy($id){
         $finance=BaptismRequest::findOrFail($id);
         $finance->delete();
         return redirect()->route('finance.index')->with('success','تم الحذف بنجاح');
     }
     public function search(Request $request){
        // dd('ss');
         if($request->ajax()){

          $output="";

        $finance=BaptismRequest::where('patientsـname','LIKE','%'.$request->value."%")->
        orWhere('patientsـid','LIKE','%'.$request->value."%")->get();


        if($finance){
            $page = view('admin.finance.table')->with('finance',$finance)->render();
        // dd($page);
              return Response(['page'=>$page , 'success'=>true]);

             }
       }
     }
     public function edit($id){
        $finance=BaptismRequest::findOrFail($id);
        $services=Service::all();

        return view('admin.finance.edit',compact('finance','services'));
    }
    public function update(Request $request,$id){
        $data=$request->all();
        $finance = BaptismRequest::whereId($id)->update([
            'serviceـprovider' => $request->serviceـprovider,
                'serviceـname' => $request->serviceـname,
                'serviceـprice' => $request->serviceـprice,
                'patientsـname' => $request->patientsـname,
                'patientsـid' => $request->patientsـid,
                'patientsـphone' => $request->patientsـphone,
                'typeـdiagnosis' => $request->typeـdiagnosis,
                'user_name' => $request->user_name,
                'user_phone' => $request->user_phone,
                'status' => $request->status,
                'reservation_num' => $request->reservation_num,
        ]);
        return redirect()->route('finance.index')->with('success','تم الاضافة بنجاح');
        }
}
