<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ArchiveController extends Controller
{
    public function index(Request $request){
            $applications=Application::where('archive','1')->whereNotNull('files_patients')->paginate(20);
            return view('admin.archive.index',compact('applications'));

    }
    public function search(Request $request){
        // dd('ss');
         if($request->ajax()){

          $output="";
        $applications=Application::whereNotNull('files_patients')->where('patient_name','LIKE','%'.$request->value."%")->
        orWhere('id_number','LIKE','%'.$request->value."%")->get();


        if($applications){
            $page = view('admin.archive.table')->with('applications',$applications)->render();
        // dd($page);
              return Response(['page'=>$page , 'success'=>true]);


            }
       }

     }
     public function show($id){
        $application = Application::whereId($id)->with('comments')->first();
        $nutreatmentـnumberm = Application::where('phone',$application->phone)->count();
        return view('admin.archive.edit',compact('application','nutreatmentـnumberm'));
    }
    public function print($id){
        $application = Application::whereId($id)->first();
        return view('admin.archive.print',compact('application'));
    }

    public function archive($id){
        $application = Application::whereId($id)->with('comments')->first();
        return view('admin.archive.edit_archive',compact('application'));
    }
    public function status(Request $request,$id){

        $application = Application::whereId($id)->update([
            'archive' => $request->archive,
        ]);

        if(!empty($request->comment)){
            $comment = Comment::create([
                'comment' => $request->comment,
                'aplication_id' => $id,
                'user_id' => Auth::user()->id,
            ]);
        }
    return  redirect()->route('applications.index')->with('success' ,'تم  بنجاح');

    }
}
