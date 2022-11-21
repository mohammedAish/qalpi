<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\AppMovement;

use App\Exports\ِApplicationExport;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Facades\Excel;
use TaqnyatSms;

use function PHPSTORM_META\type;

class ApplicationController extends Controller
{
    public function index(Request $request){
      if(Auth::user()->type == "منسق العلاج" || Auth::user()->type == "أدمن"){
$applications=Application::WhereNotNull('medical_specialty')->whereNull('files_patients')->paginate(20);

}
    else{
        $applications=Application::where('status','قيد التدقيق')->orWhere('status','قيد اتخاذ القرار')
        ->orWhere('status','قيد التدقيق')->orWhere('status','تم التدقيق')->orWhere('status','مرجع')
        ->orWhere('status','قيد المراجعة')->orWhere('status','مرفوض من اللجنة الطبية')->orWhere('status','الموافقة')
        ->orWhere('status','مرفوض من منسق العلاج')->paginate(20);
    }
    $applications_archive=Application::where('archive','0')->whereNotNull('files_patients')->paginate(20);

        return view('admin.applications.index',compact('applications','applications_archive'));
    }
    public function search(Request $request){
       // dd('ss');
        if($request->ajax()){

         $output="";
       $applications=Application::where('patient_name','LIKE','%'.$request->value."%")->
       orWhere('id_number','LIKE','%'.$request->value."%")->get();


       if($applications){
           $page = view('admin.applications.table')->with('applications',$applications)->render();
       // dd($page);
             return Response(['page'=>$page , 'success'=>true]);

            }
      }
    }
    public function store(Request $request){
        $application=Application::where('id_number', $request->id_number)->latest()->first();
        if($application == null){
            $data=$request->all();
        $data['code']=rand(1000,9999);
        $data['status']='جديد';
       Session::put('phone', $request->phone);
        $application = Application::create($data);
        $bearer = '84cef96abb3271ac54da5d378d33c5fc';

        $taqnyt = new TaqnyatSms($bearer);

         $body = "كود التفعيل  :: $application->code ";
         $recipients = [$request->phone];
         $sender = 'QALBI';


$message =$taqnyt->sendMsg($body, $recipients, $sender);

        $details = [
            'title' => 'كود التفعيل',
            'body' =>$application->code ,
        ];
        Mail::to($application->email)->send(new \App\Mail\MyTestMail($details));

        return response()->json(['status'=>true,'application',$application]);
        }else{
        $now = Carbon::now()->format('d-m-Y');
        $date1=date_create($now);
        $date2=$application->created_at ;
        
        $diff=date_diff($date2,$date1);
        $date=$diff->format("%a");
        if($date <= "30"){
     
         return response()->json(['status'=>false]);
         }else{
    
    $data=$request->all();

    $data['code']=rand(1000,9999);
    $data['status']='جديد';
   Session::put('phone', $request->phone);
    $application = Application::create($data);
    $bearer = '84cef96abb3271ac54da5d378d33c5fc';

    $taqnyt = new TaqnyatSms($bearer);

     $body = "كود التفعيل  :: $application->code ";
     $recipients = [$request->phone];
     $sender = 'QALBI';


$message =$taqnyt->sendMsg($body, $recipients, $sender);

    $details = [
        'title' => 'كود التفعيل',
        'body' =>$application->code ,
    ];
    Mail::to($application->email)->send(new \App\Mail\MyTestMail($details));

    return response()->json(['status'=>true,'application',$application]);
        
    }
}
        //return $application;
   //  dd($application);

    }
    public function storecode(Request $request){
       // dd('code');
          $session =  Session::get('phone');
//dd($session);
        $application = Application::where('phone',$session)->latest()->first();
        if($application->code == $request->code){
            return response()->json(['status'=>true]);

        }else
        //dd($data['code']);
    //    $session =  Session::get('phone');
    //    dd($session);
    return response()->json(['status'=>false]);
    //  return redirect()->back()->with('success','تم الاضافة بنجاح');

    }
    public function storeother(Request $request){
        $session =  Session::get('phone');
       $application = Application::where('phone',$session)->latest()->first();
       $data=$request->all();
       if($request->hasFile('other'))
        {
            $file=$request->file('other');
            $image1 = uniqid().'.'. $request->other->extension();
            $file->move(public_path('img'), $image1);
            $other= $image1;
            $data['other']=$other;
        }
        if($request->hasFile('visa_photo'))
        {
            $file=$request->file('visa_photo');
            $image1 = uniqid().'.'. $request->visa_photo->extension();
            $file->move(public_path('img'), $image1);
            $visa_photo= $image1;
            $data['visa_photo']=$visa_photo;
        }
        if($request->hasFile('definition_salary'))
        {
            $file=$request->file('definition_salary');
            $image1 = uniqid().'.'. $request->definition_salary->extension();
            $file->move(public_path('img'), $image1);
            $definition_salary= $image1;
            $data['definition_salary']=$definition_salary;
        }
        if($request->hasFile('id_photo'))
        {
            $file=$request->file('id_photo');
            $image1 = uniqid().'.'. $request->id_photo->extension();
            $file->move(public_path('img'), $image1);
            $id_photo= $image1;
            $data['id_photo']=$id_photo;
        }
        if($request->hasFile('medical_report'))
        {
            $file=$request->file('medical_report');
            $image2 = uniqid().'.'. $request->medical_report->extension();
            $file->move(public_path('img'), $image2);
            $medical_report= $image2;
            $data['medical_report']=$medical_report;
        }
        if($request->hasFile('housing_contract'))
        {
            $file=$request->file('housing_contract');
            $image3 = uniqid().'.'. $request->housing_contract->extension();
            $file->move(public_path('img'), $image3);
            $housing_contract= $image3;
            $data['housing_contract']=$housing_contract;
        }
        $application = Application::whereId($application->id)->update($data);
            $user = User::where('type', "منسق العلاج")->latest()->first();

        $details = [
            'title' => 'تم اضافة طلب جديد',
            'body' =>'يرجي فحص صفحة الطلبات لديك' ,
        ];
        Mail::to($user->email)->send(new \App\Mail\MyTestMail($details));
          return response()->json(['status'=>true]);
    }
    public function show($id){
        $application = Application::whereId($id)->with('comments')->first();
         $nutreatmentـnumberm = Application::where('id_number',$application->id_number)->count();
        return view('admin.applications.edit',compact('application','nutreatmentـnumberm'));
    }
    public function edit_admin($id){
        $application = Application::whereId($id)->with('comments')->first();
        return view('admin.applications.edit_admin',compact('application'));
    }
    public function post_admin(Request $request,$id){
     //   dd($request->all());

        $data=$request->except(['_token','comment']);
        $data['patient_name']=$request->patient_name;
        
        if(!empty($request->comment)){
            $comment = Comment::create([
                'comment' => $request->comment,
                'aplication_id' => $id,
                'user_id' => Auth::user()->id,
            ]);
        }
        if(!empty($request->comment)){
            $comment = Comment::create([
                'comment' => $request->comment,
                'aplication_id' => $id,
                'user_id' => Auth::user()->id,
            ]);
        }
        if($request->hasFile('other'))
        {
            $file=$request->file('other');
            $image1 = uniqid().'.'. $request->other->extension();
            $file->move(public_path('img'), $image1);
            $other= $image1;
            $data['other']=$other;
        }
        if($request->hasFile('visa_photo'))
        {
            $file=$request->file('visa_photo');
            $image1 = uniqid().'.'. $request->visa_photo->extension();
            $file->move(public_path('img'), $image1);
            $visa_photo= $image1;
            $data['visa_photo']=$visa_photo;
        }
        if($request->hasFile('definition_salary'))
        {
            $file=$request->file('definition_salary');
            $image1 = uniqid().'.'. $request->definition_salary->extension();
            $file->move(public_path('img'), $image1);
            $definition_salary= $image1;
            $data['definition_salary']=$definition_salary;
        }
        if($request->hasFile('id_photo'))
        {
            $file=$request->file('id_photo');
            $image1 = uniqid().'.'. $request->id_photo->extension();
            $file->move(public_path('img'), $image1);
            $id_photo= $image1;
            $data['id_photo']=$id_photo;
        }
        if($request->hasFile('medical_report'))
        {
            $file=$request->file('medical_report');
            $image2 = uniqid().'.'. $request->medical_report->extension();
            $file->move(public_path('img'), $image2);
            $medical_report= $image2;
            $data['medical_report']=$medical_report;
        }
        if($request->hasFile('housing_contract'))
        {
            $file=$request->file('housing_contract');
            $image3 = uniqid().'.'. $request->housing_contract->extension();
            $file->move(public_path('img'), $image3);
            $housing_contract= $image3;
            $data['housing_contract']=$housing_contract;
        }
        $application = Application::whereId($id)->update($data);

      
        return redirect()->route('applications.index')->with('success','تم  بنجاح');

    }
    public function print($id){
        $application = Application::whereId($id)->first();
        return view('admin.applications.print',compact('application'));
    }

    public function export()
    {
        return Excel::download(new ِApplicationExport, 'app.xlsx');
    }

    public function comment(Request $request,$id){
        $application = Application::whereId($id)->first();
        if($request->hasFile('file_researcher'))
        {
            $file=$request->file('file_researcher');
            $image1 = uniqid().'.'. $request->file_researcher->extension();
            $file->move(public_path('img'), $image1);
            $file_researcher= $image1;
        }else{
        $file_researcher = $application->file_researcher;
    }
         if($request->hasFile('files_patients')){

        $file=$request->file('files_patients');
            $image1 = uniqid().'.'. $request->files_patients->extension();
            $file->move(public_path('img'), $image1);
            $files_patients= $image1;

            $application = Application::whereId($id)->update([
                'files_patients' => $files_patients
            ]);

    }else{
        $application = Application::whereId($id)->update([
            'status' => $request->status,
            'file_researcher' =>$file_researcher
        ]);

        if(!empty($request->comment)){
            $comment = Comment::create([
                'comment' => $request->comment,
                'aplication_id' => $id,
                'user_id' => Auth::user()->id,
            ]);
        }

             if($request->status == 'قيد التدقيق'){
        $user = User::where('type','باحث اجتماعي')->latest()->first();
        $details = [
            'title' => 'تم اضافة طلب جديد',
            'body' =>'يرجي فحص صفحة الطلبات لديك' ,
        ];
        Mail::to($user->email)->send(new \App\Mail\MyTestMail($details));

        }
        if(($request->status == 'تم التدقيق' ) || ($request->status == 'مرجع') || ($request->status == 'مرفوض من اللجنة الطبية') || ($request->status == 'مرفوض من منسق العلاج')){
            $user = User::where('type','منسق العلاج')->latest()->first();
            if($request->status == 'مرفوض من منسق العلاج'){
                $application = Application::whereId($id)->first();

                $details = [
                    'title' => 'تم رفض طلب ',
                    'body' => "$request->comment",
                ];
                Mail::to($application->email)->send(new \App\Mail\MyTestMail($details));

            }
            }
        if( ($request->status == 'قيد المراجعة') || ($request->status == 'الموافقة')){
            $user = User::where('type','سكرتير العلاج')->latest()->first();
            if($request->status == 'الموافقة'){
                $application = Application::whereId($id)->first();

                $details = [
                    'title' => 'تم موافقة طلب ',
                    'body' =>'تم موافقة طلب ',
                ];
                Mail::to($application->email)->send(new \App\Mail\MyTestMail($details));
//  $bearer = '84cef96abb3271ac54da5d378d33c5fc';

//         $taqnyt = new TaqnyatSms($bearer);

//          $body ="طلب مرفوض   جمعية قلبي";
//          $recipients = [$application->phone];
//          $sender = 'QALBI';


// $message =$taqnyt->sendMsg($body, $recipients, $sender);
            }
            }
            if($request->status == 'قيد اتخاذ القرار'){
                $user = User::where('type','اللجنة الطبية')->latest()->first();
                $details = [
                    'title' => 'تم اضافة طلب جديد',
                    'body' =>'يرجي فحص صفحة الطلبات لديك' ,
                ];
                Mail::to($user->email)->send(new \App\Mail\MyTestMail($details));
            }
 $appMomvement= AppMovement::create([
                'user_id' =>  Auth::user()->id,
                'application_id' => $id,
                'status' => $request->status,
            ]);
    }
        return  redirect()->route('applications.index')->with('success' ,'تم  بنجاح');
    }
    public function researcher($id){
        $application = Application::whereId($id)->first();

        return view('admin.applications.researcher',compact('application'));
    }
    public function destroy($id){
        // dd($id);
         $service=Application::findOrFail($id);
         $service->delete();
         return redirect()->route('applications.index')->with('success','تم الحذف بنجاح');
     }
     public function git_admin(){
        return view('admin.applications.create_admin');

     }
     public function create_admin(Request $request){
        foreach ($request->except('id_photo','medical_report','housing_contract',
        'definition_salary','visa_photo','other') as $data => $value) {
            $valids[$data] = "required";
          }

          $request->validate($valids);
        $data=$request->all();
        
        if($request->hasFile('other'))
         {
             $file=$request->file('other');
             $image1 = uniqid().'.'. $request->other->extension();
             $file->move(public_path('img'), $image1);
             $other= $image1;
             $data['other']=$other;
         }
         if($request->hasFile('visa_photo'))
         {
             $file=$request->file('visa_photo');
             $image1 = uniqid().'.'. $request->visa_photo->extension();
             $file->move(public_path('img'), $image1);
             $visa_photo= $image1;
             $data['visa_photo']=$visa_photo;
         }
         if($request->hasFile('definition_salary'))
         {
             $file=$request->file('definition_salary');
             $image1 = uniqid().'.'. $request->definition_salary->extension();
             $file->move(public_path('img'), $image1);
             $definition_salary= $image1;
             $data['definition_salary']=$definition_salary;
         }
         if($request->hasFile('id_photo'))
         {
             $file=$request->file('id_photo');
             $image1 = uniqid().'.'. $request->id_photo->extension();
             $file->move(public_path('img'), $image1);
             $id_photo= $image1;
             $data['id_photo']=$id_photo;
         }
         if($request->hasFile('medical_report'))
         {
             $file=$request->file('medical_report');
             $image2 = uniqid().'.'. $request->medical_report->extension();
             $file->move(public_path('img'), $image2);
             $medical_report= $image2;
             $data['medical_report']=$medical_report;
         }
         if($request->hasFile('housing_contract'))
         {
             $file=$request->file('housing_contract');
             $image3 = uniqid().'.'. $request->housing_contract->extension();
             $file->move(public_path('img'), $image3);
             $housing_contract= $image3;
             $data['housing_contract']=$housing_contract;
         }
         $application = Application::create($data);
         return redirect()->route('applications.index')->with('success','تم  بنجاح');

     }
}

