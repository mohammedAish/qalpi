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
            
            </div>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="{{ route('applications.post_admin',$application->id)}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf

                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="username" class="form-label">اسم المريض</label>
                            <div>
                                <input  type="text" name="patient_name" value="{{$application->patient_name}}" class="labelborder form-control" />
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
                                <input for="" type="text" name="phone" value="{{$application->phone}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12">
                            <label for="your_avatar" class="form-label">البريد الالكتروني</label>
                            <div class="form-file">
                                <div>
                                    <input for="" type="email" name="email" value="{{$application->email}}"  class="labelborder form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> رقم الهوية</label>
                            <div>
                                <input type="text" name="id_number" value="{{$application->id_number}}"  class="labelborder form-control" />
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> تاريخ انتهاء الهوية</label>
                            <div>
                            <input type="text" name="id_number_end" value="{{$application->id_number_end}}"  class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">الجنسية</label>
                            <div>
                            <input type="text" name="nationality" value="{{$application->nationality}}" for="" class="labelborder form-control" />
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">الفئة</label>
                            <div>
                            <input type="text" name="class" value="{{$application->class}}"  for="" class="labelborder form-control" />
                            </div>
                         </div>
                        <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="username" class="form-label">المدينة</label>
                            <div>
                            <select  name="city" id="city" aria-label="Default select example" class="form-control">
                                <option value="{{$application->city}}">{{$application->city}}</option>
                                <option value="الرياض">الرياض</option>
                                <option value="الدرعية">الدرعية </option>
                                <option value="الدوادمي">الدوادمي</option>
                                <option value="القويعية">القويعية</option>
                                <option value="الأفلاج">الأفلاج </option>
                                <option value="سدير">سدير</option>
                                <option value="شقراء">شقراء</option>
                                <option value="عفيف">عفيف </option>
                                <option value="ضرماء">ضرماء</option>
                                <option value="رماح">رماح</option>
                                <option value="حريملاء">حريملاء </option>
                                <option value="الغاط">الغاط</option>
                                <option value="الخرج">الخرج</option>
                                <option value="المجمعة">المجمعة </option>
                                <option value="الحريق">الحريق</option>
                                <option value="وادي الدواسر">وادي الدواسر</option>
                                <option value="الزلفي">الزلفي </option>
                                <option value="حوطة تميم">حوطة تميم</option>
                                <option value="السليل">السليل </option>
                                <option value="المزاحمية">المزاحمية </option>
                                <option value="ثادق">ثادق </option>
                              </select>    
                        </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> الحي</label>
                            <div>
                             <select  name="neighborhood" id="neighborhood" aria-label="Default select example" class="form-control">
                                <option value="{{$application->neighborhood}}">{{$application->neighborhood}}</option>
                                <option value="حي الملز.">حي الملز.</option>
                                <option value="حي الفاخرية.">حي الفاخرية.</option>
                                <option value="حي البطحاء.">حي البطحاء.</option>
                                <option value="حي المرقب.">حي المرقب.</option>
                                <option value="حي المربع.">حي المربع.</option>
                                <option value="حي الصالحية.">حي الصالحية.</option>
                                <option value="وحي الديرة.">وحي الديرة.</option>
                                <option value="حي الازدهاء.">حي الازدهاء.</option>
                                <option value="حي قرناطة.">حي قرناطة.</option>
                                <option value="حي الربيع.">حي الربيع.</option>
                                <option value="حي المرسلات.">حي المرسلات.</option>
                                <option value="حي الصحافة.">حي الصحافة.</option>
                                <option value="حي الغدير.">حي الغدير.</option>
                                <option value="حي المغرزات.">حي المغرزات.</option>
                                <option value="حي النخيل.">حي النخيل.</option>
                                <option value="حي النخيل الشرقي.">حي النخيل الشرقي.</option>
                                <option value="حي النخيل الغربي.">حي النخيل الغربي.</option>
                                <option value="حي النفل.">حي النفل.</option>
                                <option value="حي الورود.">حي الورود.</option>
                                <option value="حي الملقا.">حي الملقا.</option>
                                <option value="حي المروج.">حي المروج.</option>
                                <option value="حي الواحة.">حي الواحة.</option>
                                <option value="حي العقيق.">حي العقيق.</option>
                                <option value="وحي الرائد.">وحي الرائد.</option>
                                <option value="حي الريان.">حي الريان.</option>
                                <option value="حي النسيم.">حي النسيم.</option>
                                <option value="حي الشهداء.">حي الشهداء.</option>
                                <option value="حي الربوة.">حي الربوة.</option>
                                <option value="حي الروضة.">حي الروضة.</option>
                                <option value="حي غرناطة.">حي غرناطة.</option>
                                <option value="حي النهضة.">حي النهضة.</option>
                                <option value="حي الفلاح.">حي الفلاح.</option>
                                <option value="حي الجزيرة.">حي الجزيرة.</option>
                                <option value="حي النظيم.">حي النظيم.</option>
                                <option value="حي اليرموك.">حي اليرموك.</option>
                                <option value="حي السلي.">حي السلي.</option>
                                <option value="حي إشبيليا.">حي إشبيليا.</option>
                                <option value="حي القدس.">حي القدس.</option>
                                <option value="حي الرواد.">حي الرواد.</option>
                                <option value="حي الحمراء.">حي الحمراء.</option>
                                <option value="حي المغرزات.">حي المغرزات.</option>
                                <option value="حي قرطبة.">حي قرطبة.</option>
                                <option value="حي الريان.">حي الريان.</option>
                                <option value="حي الخليج.">حي الخليج.</option>
                                <option value="حي إشبيلية.">حي إشبيلية.</option>
                                <option value="حي الشميسي.">حي الشميسي.</option>
                                <option value="حي المصانع.">حي المصانع.</option>
                                <option value="حي المروة.">حي المروة.</option>
                                <option value="حي المنصورة.">حي المنصورة.</option>
                                <option value="حي بن تركي.">حي بن تركي.</option>
                                <option value="حي الحاير.">حي الحاير.</option>
                                <option value="حي الشفاء.">حي الشفاء.</option>
                                <option value="حي الشعلان.">حي الشعلان.</option>
                                <option value="حي بدر وحي السويدي.">حي بدر وحي السويدي.</option>
                                <option value="حي الفواز.">حي الفواز.</option>
                                <option value="حي اليمامة.">حي اليمامة.</option>
                                <option value="حي الحزم.">حي الحزم.</option>
                                <option value="حي شبرا.">حي شبرا.</option>
                                <option value="حي العزيزية.">حي العزيزية.</option>
                                <option value="حي الدريهمية.">حي الدريهمية.</option>
                                <option value="حي الدار البيضاء.">حي الدار البيضاء.</option>
                                <option value="وحي نمار.">وحي نمار.</option>
                                <option value="حي البديعة،.">حي البديعة،.</option>
                                <option value=" حي ظهرة البديعة"> حي ظهرة البديعة</option>
                                <option value="حي جامعة الملك سعود، .">حي جامعة الملك سعود، .</option>
                                <option value="حي شبرا">حي شبرا</option>
                                <option value="حي لبن، ">حي لبن، </option>
                                <option value="حي عرقة، .">حي عرقة، .</option>
                                <option value="حي السويدي.">حي السويدي.</option>
                                <option value="حي العريجاء">حي العريجاء</option>
                                <option value="حي الدرعية">حي الدرعية</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">قيمة الاجار السنوي(ريال)</label>
                            <div>
                            <input type="text" name="rentـvalue" value="{{$application->rentـvalue}}" for="" class="labelborder form-control" />
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">اسم أقرب شخص للاتصال</label>
                            <div>
                            <input type="text" name="relativeـname" value="{{$application->relativeـname}}"  for="" class="labelborder form-control" />
                            </div>
                        </div>
                        <div class="col-md-4  py-3 col-sm-12 form-password">
                            <label for="password" class="form-label">رقم الجوال لأقرب شخص</label>
                            <div>
                            <input type="text" name="phoneـname" value="{{$application->phoneـname}}" for="" class="labelborder form-control" />
                            </div>

                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> صلة القرابة</label>
                            <div>
                            <input type="text" name="relative" value="{{$application->relative}}" for="" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> الراتب الشهري</label>
                            <div>
                            <input type="text" name="salary" value="{{$application->salary}}"   for="" class="labelborder form-control" />
                            </div>                        </div>

                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> فئة التأمين الطبي</label>
                            <div>
                                <select  id="medical_insurance_class" name="medical_insurance_class" class="form-control">

                                    <option value="{{$application->medical_insurance_class}}">{{$application->medical_insurance_class}}</option>         
                                            <option value="ذهبي">ذهبي </option>
                                            <option value="فضي">فضي</option>
                                            <option value="برونزي">برونزي</option>
                                            <option value="عادي">عادي</option>
                                            <option value="لا يوجد تأمين طبي">لا يوجد تأمين طبي</option>
                                          </select>
                            </div>
                         </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> العمل الحالي الفعلي</label>
                            <div>
                                <input type="text" name="current_job" value="{{$application->current_job}}"  for="" class="labelborder form-control">
                            </div>                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> هاتف</label>
                            <div>
                            <input type="text" name="telphone" value="{{$application->telphone}}" for="" class="labelborder form-control" />
                            </div>
                         </div>


                            <div class="col-md-4 py-3 col-sm-12 px-2">
                                <label for="username" class="form-label"> القسم/ التخصص الطبي</label>
                                <div>
                                    <select id="medical_specialty" name="medical_specialty" required="" class="form-control">
                                               <option value="{{$application->medical_specialty}}">{{$application->medical_specialty}}</option>
                                                <option value="أمراض القلب الوعائية">أمراض القلب الوعائية</option>
                                                <option value="عدم انتظام ضربات القلب">عدم انتظام ضربات القلب</option>
                                                <option value="أمراض العيوب الخلقية للقلب">أمراض العيوب الخلقية للقلب</option>
                                                <option value="اعتلال عضلة القلب">اعتلال عضلة القلب</option>
                                                <option value="أمراض القلب الناجمة عن التهابات أغشية القلب">أمراض القلب الناجمة عن التهابات أغشية القلب</option>
                                                <option value="أمراض صمامات القلب">أمراض صمامات القلب</option>
                                            </select>
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
                                    <input type="file" name="id_photo" accept="image/png, image/jpeg, application/pdf">

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
                                    <input type="file" name="medical_report" accept="image/png, image/jpeg, application/pdf">

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
                                    <input type="file" name="housing_contract" accept="image/png, image/jpeg, application/pdf">

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
                                    <input type="file" name="definition_salary" accept="image/png, image/jpeg, application/pdf">

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
                                    <input type="file" name="visa_photo" accept="image/png, image/jpeg, application/pdf">

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
                                    <input type="file" name="other" accept="image/png, image/jpeg, application/pdf">

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
                               <div class="col-md-8 py-2  my-3 col-sm-12 px-2 ">
                                <div class="py-2  my-3 col-sm-12 px-2 d-flex">
                                    <label for="username" class="form-label">ارفاق استمارة البحث الاجتماعي</label>
                                    <input type="file" class="form-control" name="file_researcher" accept="image/png, image/jpeg, application/pdf">
                                </div>
                                {{-- <a href="{{route('applications.researcher',$application->id)}}" class="btn">لتعبئة نموذج استمارة البحث الاجتماعي  <span style="color: blue">اضغط هنا <span style="font-size: 20px" class="">📋 </span></span>   </a> --}}

                            </div>
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
    $.ajaxSetup({
        'headers':{
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });
  
    // Example 4
    function myFunction(id) {
        var avatar1 = new KTImageInput(id);

        avatar1.on('cancel', function (imageInput) {
            swal.fire({
                title: 'Image successfully canceled !',
                type: 'success',
                buttonsStyling: false,
                confirmButtonText: 'Awesome!',
                confirmButtonClass: 'btn btn-primary font-weight-bold'
            });
        });
    }


</script>
            <script>
                var avatar1 = new KTImageInput('kt_image_1');
        
                avatar1.on('cancel', function (imageInput) {
                    swal.fire({
                        title:'لقد تم ازالة الصورة بنجاح , اختر من جديد',
                        type: 'success',
                        buttonsStyling: false,
                        confirmButtonText: 'موافق',
                        confirmButtonClass: 'btn btn-primary font-weight-bold'
                    });
                });
            </script>
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
