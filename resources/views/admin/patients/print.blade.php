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
    body{
        background-color: #fff;
        color: #000;
    }
    .title{
        width: 170px;
    height: 50px;
    background-color: #ec9749;
    margin-right: 42%;
    }
    #proceed {
  display: none;
  background-color: rgb(196, 192, 192);
}
</style>
<body class="">
    <div class=" pt-5" id="">
<div class="container">
        <div class="">
              <div class="pt-4 text-center">
                <h3 class="title pt-2"> طلب تكلفة</h3>
                    <h6>رقم الملف {{ $patient->app_id}}</h6>
              </div>
            <!--begin::Form-->
            <div class="mt-5">
                <h3 class="pt-5">سعادة مدير / <span class="pr-5 mr-4">{{ $patient->serviceـprovider}}</span> حفظه الله </h3>
                <h4 class="pt-5 mt-2">السلام عليكم ورحمة الله و بركاته        <span class="px-5">وبعد.</span></h4>
                <h4 class="pt-5 pb-2">نأمل من سعادتكم التكريم باجراء الكشف الطبي علي المريض,</h4>
                <p style=" font-size: 15px;">بناء علي القد المبرم  بين جمعية قلبي و بين مركزكم العامرة المبني علي شراكة تعاون لتقديم خدمات طبية لمرضي القلب المحول من قبل الجمعية , عليه مرفق لكم الحلة حسب البيانات التالية: </p>
                <table class="my-3 table table-bordered">
                    <thead>
                      <tr>
                        <th>الاسم</th>
                        <th>{{ $patient->patient_name }}</th>
                      </tr>
                      <tr>
                        <th>الجنسية</th>
                        <th>{{$patient->patientsـnationality }}</th>
                      </tr>
                      <tr>
                        <th >رقم الهوية / الاقامة</th>
                        <th>{{$patient->patient_ID}}</th>
                      </tr>
                      <tr>
                        <th>رقم الجوال</th>
                        <th>{{ $patient->patient_phone}}</th>
                      </tr>
                    </thead>
                  </table>
                  <h4>نأمل من سعادتكم  التكرم و تزويدنا  بالتكلفة النهائية للعلاج المريض المذكور.</h4>
                  <p>التواصل علي الرقم <span>{{ $patient->user_phone}}</span></p>
                  <h3 class="text-center pt-5 pb-5 mb-5">ولكم أطيب التحية  و التقدير </h3>
                  <h4 class="text-center pb-5 mb-5">المدير التنفيذي</h4>
            </div>

            <div class="my-5">
                <a id="proceed" href="{{route('patient.index')}}" class="btn btn-secondary">الغاء</a>
            </div>
        </div>

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

