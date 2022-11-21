<!DOCTYPE html>
<html lang="ar" direction="rtl" dir="rtl" style="direction: rtl">
    <!-- begin::Head -->
    <head>
        <!--		<base href="">-->
        <base href="{{ env('APP_URL') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <title>Bazaard | {{__('home.dashboard')}}</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Fonts -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
        <!--end::Fonts -->
        <!--begin::Page Vendors Styles(used by this page) -->
        <link href="{{ asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
            type="text/css" />
        <!--end::Page Vendors Styles -->
        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="{{ asset('assets/admin/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet"
            type="text/css" />
            <link href="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet"
                type="text/css" />
        <link href="{{ asset('assets/admin/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('assets/css/style_ar.css') }}">
        <link href="{{ asset('assets/admin/css/skins/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/css/skins/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/css/skins/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/css/skins/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css">
        <!--end::Layout Skins -->
        <link href="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
        <link href="{{ asset('assets/admin/css/_dropzone.scss') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/introjs-rtl.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/css/tour.min.css') }}" rel="stylesheet"
        type="text/css" />
        <link rel="shortcut icon" href="{{ asset('assets/images/cart_b.svg') }}" />

    </head>

    <style>
    .labelborder{
        border: 1px solid #d9d1d1;
        padding: 10px;
    }
    header{
    background-color: #fff;
    box-shadow: #ECF0FA;
    color: #000;
}
header img{
    width: 30%;
}
.info p{
    color: #302e2e;
}
header h4{
    color: #16736C;
    margin-top: 15px;
font-size: 19px;
}

.info .pp p{
        color: #302e2e;
    margin-top: 16px;
    }
    .info .pp p span{
        color: #16736C;
    font-size: 12px;
    }

</style>
<body class="">
        <header>
            <div class="py-4 px-5">
              <div class="d-flex justify-content-between px-4">
                <div class="logo">
                    <img src="{{asset('assets/images/enayah-logo.png')}}" class="">
                </div>
                <div>
                   <h4> جمعية مرضى رعاية مرضى القلب (قلبي )</h4>
                </div>
                <div class="info d-flex">

                    <div class="pp px-2">
                        <p>شارع البرق ، حي الروابي ، الرياض  <span class="px-2"> info@Qalbi.sa </span> <span class=""> +966550735885 </span></p>
                    </div>
            </div>
              </div>

            </div>
        </header>
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-portlet ">
            <h3 class="text-center py-4" style="border-bottom:1px solid rgb(223, 220, 220)">استمارة بحث اجتماعي</h3>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="{{ route('researcher.store',$researcher->id)}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="username" class="form-label">اسم المريض</label>
                            <div>
                                <input for="" class="labelborder form-control" value="{{$researcher->patient_name}}" name="patient_name">
                            </div>                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="" class="form-label"> الجنس</label>
                            <div>
                                <input for="" class="labelborder form-control" value="{{$researcher->gender}}" name="gender">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="" class="form-label"> العمر</label>
                            <div>
                                <input for="" name="age" value="{{$researcher->age}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">الجنسية</label>
                            <div>
                                <input for="" name="nationality" value="{{$researcher->nationality}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> رقم الهوية</label>
                            <div>
                                <input for="" name="id_number" value="{{$researcher->id_number}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> تاريخ انتهاء الهوية</label>
                            <div>
                                <input for="" name="id_number_end" value="{{$researcher->id_number_end}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">مصدرها</label>
                            <div>
                                <input for="" type="text" name="id_source" value="{{$researcher->id_source}}"  class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> المهنة </label>
                            <div>
                                <input for="" name="current_job" value="{{$researcher->current_job}}" class="labelborder form-control">
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> جهةالعمل </label>
                            <div>
                                <input type="text" name="company_work" value="{{$researcher->company_work}}" for="" class="labelborder form-control">
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> الراتب الشهري</label>
                            <div>
                                <input for="" name="salary" value="{{$researcher->salary}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> فئة التأمين الطبي</label>
                            <div>
                                <input for="" name="medical_insurance_class" value="{{$researcher->medical_insurance_class}}" class="labelborder form-control">
                            </div>
                         </div>
                         <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="username" class="form-label">عنوان السكن</label>
                            <div>
                                <input type="text" name="address" for="" value="{{$researcher->address}}" class="labelborder form-control">
                            </div>
                        </div>

                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> هاتف</label>
                            <div>
                                <input for="" name="telphone"  value="{{$researcher->telphone}}" class="labelborder form-control">
                            </div>
                         </div>

                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">الحالة الاجتماعية</label>
                            <div>
                                <input for="username" value="{{$researcher->social_status}}" class="form-label form-control">
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> عدد الزوجات</label>
                            <div>
                                <input type="text" value="{{$researcher->numberـwives}}" name="numberـwives" for="" class="labelborder form-control">
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">المستوي التعليمي</label>
                            <div>
                                <input for="username" value="{{$researcher->educational_level}}" class="form-label form-control">

                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">نوع السكن</label>
                            <div>
                                <input type="text" class="form-control" value="{{$researcher->housing_type}}">
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">وصف السكن</label>
                            <div>
                                <input for="username" value="{{$researcher->housing_desc}}" class="form-label form-control">

                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">قيمة الاجار السنوي(ريال)</label>
                            <div>
                                <input for="" name="rentـvalue" value="{{$researcher->rentـvalue}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">الفئة</label>
                            <div>
                                <input for="" name="class" value="{{$researcher->class}}" class="labelborder form-control">
                            </div>
                         </div>


                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">اسم ولي الأمر</label>
                            <div>
                                <input for="" name="relativeـname" value="{{$researcher->relativeـname}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> صلة القرابة</label>
                            <div>
                                <input for="" name="relative" value="{{$researcher->relative}}" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">المهنة</label>
                            <div>
                                <input type="text" name="job_relative" value="{{$researcher->job_relative}}" for="" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">رقم الهوية</label>
                            <div>
                                <input type="text" name="id_relative" value="{{$researcher->id_relative}}" for="" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">فئة التأمين الطبي</label>
                            <div>
                                <input type="text" name="class_relative" value="{{$researcher->class_relative}}"  for="" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">الدخل الشهري</label>
                            <div>
                                <input type="text" name="salary_relative" value="{{$researcher->salary_relative}}" for="" class="labelborder form-control">
                            </div>
                        </div>
                        <div class="col-md-4  py-3 col-sm-12 form-password">
                            <label for="password" class="form-label">رقم الجوال </label>
                            <div>
                                <input for="" name="phone_relative" value="{{$researcher->phone_relative}}" class="labelborder form-control">
                            </div>
                        </div>
                    </div>
                            <div class="py-4 px-2 family">
                                <h3>التكوين الأسري</h3>
                                <div id="fines-list3">
                            <div class="fine-inputs3" id="fine-1-inputs3">
                                <div class="row">
                                    <div class="col-md-3 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">الاسم</label>
                                        <div>
                                            <input type="text" name="familyMmember[0][name_member]" for=""  class="labelborder form-control">
                                        </div>
                                     </div>
                                     <div class="col-md-3 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">صلة القرابة</label>
                                        <div>
                                            <input type="text" name="familyMmember[0][relative_member]" for="" class="labelborder form-control">
                                        </div>
                                     </div>
                                     <div class="col-md-3 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">العمر</label>
                                        <div>
                                            <input type="text" name="familyMmember[0][age_member]" for="" class="labelborder form-control">
                                        </div>
                                     </div>
                                     <div class="col-md-3 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">الوضع لاجتماعي</label>
                                        <div>
                                            <select class="form-select form-control" name="familyMmember[0][socical_status_member]" id="classs" aria-label="Default select example">
                                                <option value="متزوج">متزوج</option>
                                                <option value="اعزب">اعزب </option>
                                                <option value="مطلق">مطلق</option>
                                                <option value="أرمل">أرمل</option>
                                              </select>
                                        </div>
                                     </div>
                                     <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">الحالة الصحية</label>
                                        <div>
                                            <input type="text" name="familyMmember[0][status_member]" for="" class="labelborder form-control">
                                        </div>
                                     </div>
                                     <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">التحصيل العلمي</label>
                                        <div>
                                            <select class="form-select form-control" name="familyMmember[0][education_member]" id="classs" aria-label="Default select example">
                                                <option value="أمي">أمي</option>
                                                <option value="يقرأ و يكتب">يقرأ و يكتب</option>
                                                <option value="ابتدائي">ابتدائي</option>
                                                <option value="متوسط">متوسط</option>
                                                <option value="ثانوي">ثانوي</option>
                                                <option value="جامعي">جامعي</option>
                                               </select>
                                        </div>
                                     </div>
                                     <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">الدخل الشهري</label>
                                        <div>
                                            <input type="text" name="familyMmember[0][salary_member]" for="" class="labelborder form-control">
                                        </div>
                                     </div>
                                    </div>
                                </div>
                                <a class="btn addRow3" id="addRow3" style=" color:rgb(238, 230, 230); background-color: #4d717c; ">اضافة  جديدة</a>

                                </div>
                            </div>
                            {{-- end family --}}
                            <div class="other px-2 py-4">
                                <h3>معلومات اضافية</h3>
                                <div class="row py-3">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="d-flex">
                                            <label for="username" class="form-label">هل الحالة مسجلة باحدي الجمعيات الخيرية</label>
                                            <div class="d-flex px-5 mx-4">
                                                <div class="form-check px-3">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        {{$researcher->status_registered}}
                                                    </label>
                                                  </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="username" class="form-label">اذا كان الجواب نعم فاذكر اسم الجمعية</label>
                                        <div>
                                            <input type="text" name="company_registered" value="{{$researcher->company_registered}}"  for="" class="labelborder form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 py-3">
                                        <label for="username" class="form-label">التقيم الاجتماعي</label>
                                        <div>
                                            <textarea  class="form-control" name="socialـevaluation" rows="8">{{$researcher->socialـevaluation}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 py-3">
                                        <label for="username" class="form-label">المساعدة المطلوبة</label>
                                        <div>
                                            <input for="username" value="{{$researcher->help_needed}}" class="form-label form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="py-5">
                                    <h3>توصيات قسم الخدمة الاجتماعية</h3>
                                    <div class="row py-5">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="d-flex">
                                                <label for="username" class="form-label">صرف المساعدة المطلوبة</label>
                                                <div>
                                                    <div class="form-check">
                                                        <input class="form-check-label form-control" value="{{$researcher->cashing_needed}}" for="flexRadioDefault1">

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="username" class="form-label">يحول المريض الي </label>
                                            <div>
                                                <input type="text" name="patient_convert" value="{{$researcher->patient_convert}}" for="" class="labelborder form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="username" class="form-label">الاعتذار للمريض للأسباب التالية</label>
                                            <div>
                                                <textarea  class="form-control" name="patient_apologize" rows="8">{{$researcher->patient_apologize}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5>الأخصائي الاجتماعي</h5>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label for="username" class="form-label">الاسم</label>
                                            <div>
                                                <input type="text" name="name_researcher" value="{{$researcher->name_researcher}}" for="" class="labelborder form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="username" class="form-label">التاريخ</label>
                                            <div>
                                                <input type="date" name="date_researcher" value="{{$researcher->date_researcher}}" for="" class="labelborder form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
                    <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="text-center">
                            <div class="">
                                <a id="proceed" href="{{route('applications.researcher',$application->id)}}" class="btn btn-secondary">الغاء</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
            </div>

            <script>
                window.print();
                                </script>
         	<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{asset('assets/admin/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/admin/js/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="{{asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="{{asset('assets/admin/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

		<!--end::Page Vendors -->
        <script src="{{ asset('assets/admin/js/pages/dashboard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/pages/crud/metronic-datatable/base/html-table.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/pages/crud/datatables/basic/paginations.js') }}"type="text/javascript"></script>
        <!--begin::Page Scripts(used by this page) -->
        <script>

            $('.addRow3').on('click' , function (){
                addFineInputs3();
            });

            function addFineInputs3() {

                let finesInputsCount = $('.fine-inputs3').length;
                finesInputsCount += 1;
                let finesHtml = '<div id="fine-'+finesInputsCount+'-inputs3" class="mt-4 fine-inputs3">'+
                    '<div class="row"><div class="col-md-3 py-3 col-sm-12 px-2"><label for="username" class="form-label">الاسم</label>'+
                        '<div><input type="text" name="familyMmember['+finesInputsCount+'][name_member]" for="" class="labelborder form-control"></div>'+
                        '</div><div class="col-md-3 py-3 col-sm-12 px-2"><label for="username" class="form-label">صلة القرابة</label>'+
                      '<div><input type="text" name="familyMmember['+finesInputsCount+'][relative_member]" for="" class="labelborder form-control"></div></div>'+
                       '<div class="col-md-3 py-3 col-sm-12 px-2"><label for="username" class="form-label">العمر</label><div>'+
                       '<input type="text" name="familyMmember['+finesInputsCount+'][age_member]" for="" class="labelborder form-control"></div></div>'+
                       '<div class="col-md-3 py-3 col-sm-12 px-2"><label for="username" class="form-label">الوضع لاجتماعي</label>'+
                      '<div><select class="form-select form-control" name="familyMmember['+finesInputsCount+'][socical_status_member]" id="classs" aria-label="Default select example">'+
                    ' <option value="متزوج">متزوج</option> <option value="اعزب">اعزب </option>'+
                   '<option value="مطلق">مطلق</option><option value="أرمل">أرمل</option> </select></div></div>'+
                   ' <div class="col-md-4 py-3 col-sm-12 px-2"><label for="username" class="form-label">الحالة الصحية</label>'+
                    ' <div><input type="text" name="familyMmember['+finesInputsCount+'][status_member]" for="" class="labelborder form-control"></div></div>'+
                    '<div class="col-md-4 py-3 col-sm-12 px-2"><label for="username" class="form-label">التحصيل العلمي</label>'+
                     ' <div><select class="form-select form-control" name="familyMmember['+finesInputsCount+'][education_member]" id="classs" aria-label="Default select example">'+
                     '<option value="أمي">أمي</option> <option value="يقرأ و يكتب">يقرأ و يكتب</option>'+
                    '<option value="ابتدائي">ابتدائي</option> <option value="متوسط">متوسط</option>'+
                   ' <option value="ثانوي">ثانوي</option><option value="جامعي">جامعي</option></select> </div>'+
                   ' </div><div class="col-md-4 py-3 col-sm-12 px-2"><label for="username" class="form-label">الدخل الشهري</label>'+
                      ' <div> <input type="text" name="familyMmember['+finesInputsCount+'][salary_member]" for="" class="labelborder form-control"></div></div></div>'+
                '<div class="text-center d-grid gap-2"><button type="button" class="btn3-delete-fi btn  px-5  btn-danger " data-id="'+finesInputsCount+'" id="btn2-delete-fi-'+finesInputsCount+'">حذف</button></div>'+
                '</div>';
                $('#fines-list3').append(finesHtml);
                $('.addRow3').show();
            }

            $(document).on('click','.btn3-delete-fi',function(){
                let ID = $(this).attr('data-id');
                $('#fine-'+ID+'-inputs3').remove();
            });
          </script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>

