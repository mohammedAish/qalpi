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
    #proceed {
  display: none;
}
</style>
<body class="">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">
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
        <div class="kt-portlet ">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title pt-4">
                        
                    طلب الاستاذ : {{$application->patient_name}}
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="" class="form-horizontal" enctype="multipart/form-data">
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

                        {{-- <div class="tab-pane px-2 pt-5" id="attachments">
                            <div class="row px-2" style="">
                                <div class="col-md-4 py-2 my-3 col-sm-12 px-2">
                                    <label for="username" class="form-label">صورة هوية المريض</label>
                                     <a href="#" class="pop">
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
                                     <a href="#" class="pop">
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
                                     <a href="#" class="pop">
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
                                     <a href="#" class="pop">
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
                                     <a href="#" class="pop">
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
                                     <a href="#" class="pop">
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

                            </div>
                        </div> --}}

                    </div>
                    </div>
                    <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                            <div class="text-center">
                                <div class="">
                                    <a id="proceed" href="{{route('archive.index')}}" class="btn btn-secondary">الغاء</a>
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


            <script>
    window.print();
                </script>

         <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>

                            <script type="text/javascript">
                                $('#proceed').delay(5000).show(0);
                              </script>
         	<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{asset('assets/admin/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/admin/js/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="{{asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/admin/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

		<!--end::Page Vendors -->
        <script src="{{ asset('assets/admin/js/pages/dashboard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/pages/crud/metronic-datatable/base/html-table.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/pages/crud/datatables/basic/paginations.js') }}"type="text/javascript"></script>
        <!--begin::Page Scripts(used by this page) -->

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>

