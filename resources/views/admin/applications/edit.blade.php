<x-dashboard>
<style>
    .labelborder{
        border: 1px solid #d9d1d1;
        padding: 10px;
    }
</style>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                       الطلبات
                    </h3>
                </div>
                @if($nutreatmentـnumberm > 1 )
               <h5 class="kt-portlet__head-title mt-4">عدد مرات العلاج السابقة <span style="color: chartreuse">{{$nutreatmentـnumberm}}</span></h5>
               @endif
            </div>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="{{ route('applications.comment',$application->id)}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="username" class="form-label">اسم المريض</label>
                            <div>
                                <label for="" class="labelborder form-control">{{$application->patient_name}}</label>
                            </div>                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="" class="form-label"> الجنس</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->gender}}</label>
                            </div>
                        </div>

                        <div class="col-md-4  py-3 col-sm-12 form-password">
                            <label for="password" class="form-label">رقم الجوال</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->phone}}</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12">
                            <label for="your_avatar" class="form-label">البريد الالكتروني</label>
                            <div class="form-file">
                                <div>
                                    <label for="" class="labelborder form-control"> {{$application->email}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> رقم الهوية</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->id_number}}</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> تاريخ انتهاء الهوية</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->id_number_end}}</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">الجنسية</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->nationality}}</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">الفئة</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->class}}</label>
                            </div>
                         </div>
                        <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="username" class="form-label">المدينة</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->city}}</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> الحي</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->neighborhood}}</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">قيمة الاجار السنوي(ريال)</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->rentـvalue}}</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">اسم أقرب شخص للاتصال</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->relativeـname}}</label>
                            </div>
                        </div>
                        <div class="col-md-4  py-3 col-sm-12 form-password">
                            <label for="password" class="form-label">رقم الجوال لأقرب شخص</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->phoneـname}}</label>
                            </div>

                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> صلة القرابة</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->relative}}</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> الراتب الشهري</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->salary}}</label>
                            </div>                        </div>

                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> فئة التأمين الطبي</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->medical_insurance_class}}</label>
                            </div>
                         </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> العمل الحالي الفعلي</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->current_job}}</label>
                            </div>                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> هاتف</label>
                            <div>
                                <label for="" class="labelborder form-control"> {{$application->telphone}}</label>
                            </div>
                         </div>


                            <div class="col-md-4 py-3 col-sm-12 px-2">
                                <label for="username" class="form-label"> القسم/ التخصص الطبي</label>
                                <div>
                                    <label for="" class="labelborder form-control"> {{$application->medical_specialty}}</label>
                                </div>
                             </div>
                            <div class="col-md-8  py-3  col-sm-12 px-2">
                                <label for="username" class="form-label"style="width:180px">نبذة مختصرة عن الحالة </label>
                                <textarea  class="form-control" name="patient_condition" rows="8">{{$application->patient_condition}}</textarea>
                            </div>

                        <div class="tab-pane px-2 pt-5" id="attachments">
                            <div class="row px-2" style="">
                                <div class="col-md-4 py-2 my-3 col-sm-12 px-2">
                                    <label for="username" class="form-label">صورة هوية المريض</label>
                                     <a  class="pop">
                                    @if($application->id_photo != NULL)
                                  @if(pathinfo($application->id_photo)
                                    ['extension']=='pdf')

                                         <embed type="application/pdf" src="{{asset('img/'.$application->id_photo)}}" width="100%" height="300px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME">
                                       @else
                                       <img src="{{asset('img/'.$application->id_photo)}}" style="width:100%; height:200px;">
                                       @endif
                                       @endif
                                </div>
                            </a>
                                <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                    <label for="username" class="form-label">تقرير طبي حديث و مفصل </label>
                                     <a class="pop">
                                    @if($application->medical_report != NULL)

                                    @if(pathinfo($application->medical_report)
                                     ['extension']=='pdf')

                                          <embed type="application/pdf" src="{{asset('img/'.$application->medical_report)}}" width="100%" height="300px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME">
                                        @else
                                        <img src="{{asset('img/'.$application->medical_report)}}" style="width:100%; height:200px;">
                                        @endif
                                        @endif
                                          </a>
                                </div>
                                <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                    <label for="username" class="form-label">صورة من عقد إيجار السكن / فاتورة كهرباء</label>
                                     <a class="pop">
                                    @if($application->housing_contract != NULL)

                                    @if(pathinfo($application->housing_contract)
                                     ['extension']=='pdf')

                                          <embed type="application/pdf" src="{{asset('img/'.$application->housing_contract)}}" width="100%" height="300px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME">
                                        @else
                                        <img src="{{asset('img/'.$application->housing_contract)}}" style="width:100%; height:200px;">
                                        @endif
                                        @endif
                                          </a>
                                </div>
                                <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                    <label for="username" class="form-label">تعريف من الكفيل بالراتب للمريض أو ولي أمره  </label>
                                     <a  class="pop">
                                    @if($application->definition_salary != NULL)

                                   @if(pathinfo($application->definition_salary)
                                    ['extension']=='pdf')

                                         <embed type="application/pdf" src="{{asset('img/'.$application->definition_salary)}}" width="100%" height="300px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME">
                                       @else
                                       <img src="{{asset('img/'.$application->definition_salary)}}" style="width:90%; height:200px;">
                                       @endif
                                       @endif
                                     </a>
                                </div>
                                <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                    <label for="username" class="form-label">صورة تأشيرة الزيارة  </label>
                                     <a  class="pop">
                                    @if($application->visa_photo != NULL)

                                    @if(pathinfo($application->visa_photo)
                                     ['extension']=='pdf')

                                          <embed type="application/pdf" src="{{asset('img/'.$application->visa_photo)}}" width="100%" height="300px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME">
                                        @else
                                        <img src="{{asset('img/'.$application->visa_photo)}}" style="width:90%; height:200px;">
                                        @endif
                                        @endif
                                      </a>
                                </div>
                                <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                    <label for="username" class="form-label">إقامته او شهادة الميلاد أو جواز السفر /إذا كان المريض طفلا  </label>
                                     <a  class="pop">
                                    @if($application->other != NULL)

                                    @if(pathinfo($application->other)
                                     ['extension']=='pdf')

                                          <embed type="application/pdf" src="{{asset('img/'.$application->other)}}" width="100%" height="300px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME">
                                        @else
                                        <img src="{{asset('img/'.$application->other)}}" style="width:90%; height:200px;">
                                        @endif
                                        @endif
                                      </a>
                                </div>
                                @if(Auth::user()->type == "باحث اجتماعي")
                               <div class="col-md-8 py-2  my-3 col-sm-12 px-2 ">
                                <div class="py-2  my-3 col-sm-12 px-2 d-flex">
                                    <label for="username" class="form-label">ارفاق استمارة البحث الاجتماعي</label>
                                    <input type="file" class="form-control" name="file_researcher" accept="image/png, image/jpeg, application/pdf">
                                </div>
                                <a href="{{route('applications.researcher',$application->id)}}" class="btn">لتعبئة نموذج استمارة البحث الاجتماعي  <span style="color: blue">اضغط هنا <span style="font-size: 20px" class="">📋 </span></span>   </a>

                            </div>
                            @endif
                            <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                <label for="username" class="form-label">استمارة البحث الاجتماعي</label>
                                 <a href="{{asset('img/'.$application->file_researcher)}}" class="pop">
                                @if($application->file_researcher != NULL)

                                @if(pathinfo($application->file_researcher)
                                 ['extension']=='pdf')

                                      <embed type="application/pdf" src="{{asset('img/'.$application->file_researcher)}}" width="100%" height="300px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME">
                                    @else
                                    <img src="{{asset('img/'.$application->file_researcher)}}" style="width:90%; height:200px;">
                                    @endif
                                    @endif
                                  </a>
                            </div>
                            
                            </div>

                        @if($application->status == "الموافقة")
                            <div class="row  py-2  my-3  px-2 d-flex">
                                <label for="files_patients" class="col-2 form-label">ارفاق ملفات المريض</label>
                                <input type="file" class="col-10  form-control" name="files_patients" accept="image/png, image/jpeg, application/pdf">
                            </div>
                            @else
                            <div class="container row pt-5">
                                <div class="col-12 text-left">
                                    <label class=" col-form-label " style="font-size: 17px; color:black"> تعليقات المتسخدمين</label>
                                    @foreach($application->comments()->get() as $comments)
                                    <div class="p-2 mt-3 text-left" style="border:1px solid rgb(230, 225, 225);">
                                        <div class="d-flex justify-content-between pt-3 pb-5">
                                            <h6 class="">{{$comments->users->name}}</h6>
                                        <h6 class="" style="font-size:12px; color:rgb(56, 55, 55)">{{$comments->created_at}}</h6>
                                        </div>
                                        <p class="py-2" style="font-size:12px; color:#000">{{$comments->comment}}</p>
                                    </div>
                                    @endforeach
                                  </div>
                             <div class="col-md-5 py-3 col-sm-12 px-2 mt-5">
                                <label for="username" class="form-label">ارسال الطلب الي </label>
                                <select class="form-control" name="status">
                                    @if(Auth::user()->type == "باحث اجتماعي")
                                    <option value="تم التدقيق">تم التدقيق</option>
                                    @elseif(Auth::user()->type == "سكرتير العلاج")
                                    @if($application->status == "الموافقة")
                                    <option></option>
                                    @else
                                    <option value="قيد اتخاذ القرار">اللجنة الطبية</option>
                                    @endif
                                    @elseif(Auth::user()->type == "اللجنة الطبية")
                                    <option value="الموافقة">الموافقة</option>
                                    <option value="مرجع">مرجع</option>
                                    <option value="مرفوض من اللجنة الطبية">رفض الطلب</option>
                                    @elseif(Auth::user()->type == "منسق العلاج")
                                     @if(($application->status == "جديد") )
                                <option value="قيد التدقيق">الباحث الاجتماعي</option>
                                <option value="مرفوض من منسق العلاج">رفض الطلب</option>
                                @elseif($application->status == "مرفوض من اللجنة الطبية")
                                <option value="مرفوض من منسق العلاج">رفض الطلب</option>
                                @else()
                                <option value="قيد المراجعة">سكرتير العلاج</option>
                                <option value="مرفوض من منسق العلاج">رفض الطلب</option>
                                @endif
                                    @else
                                <option value="قيد التدقيق">الباحث الاجتماعي</option>
                                <option value="قيد المراجعة">سكرتير العلاج</option>
                                {{-- <option value="مرفوض">رفض الطلب</option> --}}
                                 <option value="الموافقة">الموافقة</option>
                                    <option value="مرجع">مرجع</option>
                                 <option value="تم التدقيق">تم التدقيق</option>
                                 <option value="قيد اتخاذ القرار">اللجنة الطبية</option>
                                @endif
                            </select>
                        </div>
                            <div class="col-md-7 py-3 col-sm-12 px-2 mt-5">
                                <label for="username" class="form-label"> اضافة تعليق</label>
                                <textarea  class="form-control" name="comment" rows="8"></textarea>
                            </div>


                            </div>
                            @endif

                        </div>

                    </div>
                    </div>
                    <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="text-center">

                            <div class="">
                                <button type="submit" class="btn btn-success">حفظ</button>
                                <a href="{{ route('applications.index')}}" class="btn btn-secondary">الغاء</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <img src="" class="imagepreview" style="width: 100%;" >
                    </div>
                  </div>
                </div>
              </div>
            <!--end::Form-->
        </div>
            </div>
            @push('js')

            <script>
                $(function() {
                    $('.pop').on('click', function() {
                        $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                        $('#imagemodal').modal('show');
                    });
            });
            </script>
            @endpush

</x-dashboard>
