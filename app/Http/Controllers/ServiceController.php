<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    //

    public function index(){
        $services=Service::all();
        return view('admin.services.index',compact('services'));
    }
    public function create(){
        return view('admin.services.create');
    }
    public function store(Request $request){

        $service = $request->services;

        foreach ($service as $services) {
            $service = Service::create([
                'serviceـprovider' => $request->serviceـprovider,
                    'serviceـname' => $services['serviceـname'],
                    'serviceـprice' => $services['serviceـprice'],
            ]);
        }
    return redirect()->route('services.index')->with('success','تم الاضافة بنجاح');

    }
    public function edit($id){
        $service=Service::findOrFail($id);
        return view('admin.services.edit',compact('service'));
    }
    public function update(Request $request,$id){
        $service=Service::findOrFail($id);
       $service = Service::whereId($id)->update([
        'serviceـprovider' => $request->serviceـprovider,
            'serviceـname' => $request->serviceـname,
            'serviceـprice' => $request->serviceـprice,
    ]);

return redirect()->route('services.index')->with('success' ,'تم التعديل بنجاح');
    }
    public function destroy($id){
       // dd($id);
        $service=Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('success','تم الحذف بنجاح');
    }


}
