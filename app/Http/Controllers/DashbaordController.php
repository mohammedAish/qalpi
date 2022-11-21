<?php

namespace App\Http\Controllers;


use App\Models\Application;
use App\Models\AppMovement;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashbaordController extends Controller
{
    //
    public function index(){
        if(Auth::guard('application')->check()){
            $application = Application::where('id_number',Auth::guard('application')->user()->id_number)->get();
        }else{
            $application ="";
        }
        $users_count =User::all()->count();
        $service_count =Service::all()->count();
        $app_new =Application::all()->count();
        
        if(Auth::user()->type == "باحث اجتماعي"){
            $app_new = Application::where('status','قيد التدقيق')->count();
        }
        if(Auth::user()->type == "سكرتير العلاج"){
            $app_new = Application::where('status','قيد المراجعة')->count();
        }
        if(Auth::user()->type == "اللجنة الطبية"){
            $app_new = Application::where('status','قيد اتخاذ القرار')->count();
        }
        if(Auth::user()->type == "منسق العلاج"){
            $app_new = Application::where('status','جديد')->count();
            $appMomvement= AppMovement::where('user_id',Auth::user()->id)->where('status','قيد التدقيق')->count();

        }else{
        $appMomvement= AppMovement::where('user_id',Auth::user()->id)->count();
        }


        return view('home',compact('users_count','service_count','app_new','appMomvement','application'));
    }
}
