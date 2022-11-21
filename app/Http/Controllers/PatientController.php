<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Patient;
use App\Models\Service;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function index(){
        $patients=Patient::all();

        return view('admin.patients.index',compact('patients'));
    }
    public function create($id){
        $application = Application::whereId($id)->first();
        $services=Service::all();
        return view('admin.patients.create',compact('services','application'));
    }
    public function store(Request $request){

    $data=$request->all();
    $patients = Patient::create($data);
    return redirect()->route('patient.index')->with('success','تم الاضافة بنجاح');
    }
    public function print($id){
        $patient = Patient::whereId($id)->first();
        return view('admin.patients.print',compact('patient'));
    }
    public function destroy($id){
        // dd($id);
         $patient=Patient::findOrFail($id);
         $patient->delete();
         return redirect()->route('patient.index')->with('success','تم الحذف بنجاح');
     }
     public function search(Request $request){
        // dd('ss');
         if($request->ajax()){

          $output="";
        $patients=Patient::where('patient_name','LIKE','%'.$request->value."%")->
        orWhere('patient_ID','LIKE','%'.$request->value."%")->get();


        if($patients){
            $page = view('admin.patients.table')->with('patients',$patients)->render();
        // dd($page);
              return Response(['page'=>$page , 'success'=>true]);

             }
       }
     }
}
