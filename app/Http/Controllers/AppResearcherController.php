<?php

namespace App\Http\Controllers;
use App\Models\Application;

use App\Models\AppResearcher;
use App\Models\MemberFamily;
use Illuminate\Http\Request;

class AppResearcherController extends Controller
{
    public function print($id,$app){
//dd($id);
    $application = Application::whereId($app)->with('comments')->first();

        $researcher = AppResearcher::whereId($id)->with('familyMembers')->first();
        return view('admin.applications.print_researcher',compact('researcher','application'));
    }
    public function store(Request $request,$id){
      
      
        foreach ($request->except('company_registered') as $data => $value) {
            $valids[$data] = "required";
          }

          $request->validate($valids);
        // $request->validate([
        //     '*' => 'required',
        // ]);
        $data=$request->all();

        $data['aplication_id']=$id;
        $researcher =AppResearcher::create($data);
      //  dd($request->all());
      $familyMmember = $request->familyMmember;

      foreach ($familyMmember as $familyMmembers) {
        $familyMmembers = MemberFamily::create([
            'name_member' => $familyMmembers['name_member'],
            'relative_member' => $familyMmembers['relative_member'],
            'age_member' => $familyMmembers['age_member'],
            'status_member' => $familyMmembers['status_member'],
            'socical_status_member' => $familyMmembers['socical_status_member'],
            'education_member' => $familyMmembers['education_member'],
            'salary_member' =>$familyMmembers['salary_member'],
            'researchers_id' => $researcher->id,
        ]);
        //dd($researcher->id);
    }
    return  redirect()->route('researcher.print',[$researcher->id,$id])->with('success' ,'تم  بنجاح');
}
}
