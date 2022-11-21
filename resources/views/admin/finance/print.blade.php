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
        width: 200px;
    height: 70px;
    background-color: #F38040;
    color:#fff;
    margin-right: 30%;
    border-radius: 10px;
    }
    .body2 p{
        font-size: 18px;
    }
    #proceed {
  display: none;
  background-color: rgb(196, 192, 192);
}
</style>
<body class="">
    <div class=" pt-5" id="">
<div class="container">
      <div class="top ">
         <div class="d-flex text">
            <h4 class="pt-5">رقم التعميد :  <span class="px-2">{{$finance->id }}</span></h4>
            <h3 class="title text-center px-2 py-2">تعميد   <br>علي حساب الجمعية</h3>
         </div>
         <div class="d-flex mt-5 pt-5 ml-5">
             <h3 class="pr-5 mx-5">التاريخ : </h3>
             <h3 class=" pl-5 ml-5">رقم الطلب : {{$finance->app_id }}</h3>
             <div class="d-flex pl-5  ml-3">
                 <h3 class="px-4">مدة التعميد : </h3>
                 <div class="form-check px-4 pt-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      شهر
                    </label>
                  </div>
                  <div class="form-check px-4 pt-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">
                     ٣ أشهر
                    </label>
                  </div>
                  <div class="form-check px-4 pt-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                     ٦ أشهر
                    </label>
                  </div>

             </div>
         </div>
      </div>
      <div class="body">
          <div class="row">
              <div class="mx-0 px-0 col-1 pt-4 mt-3">
                <img src="{{asset('assets/images/Group2.png')}}" class="" width="70px" height="150px">
              </div>
              <div class="px-3 mx-0 col-11 pt-4 mt-5" style="border: 1px solid #000">
                  <h4>اسم المستفيد : <span class="px-2">{{$finance->patientsـname }}</span></h4>
                  <div class="py-3 d-flex justify-content-between">
                    <h4>رقم الهوية  : <span class="px-2">{{$finance->patientsـid }}</span></h4>
                        <h4 class="pr-5 mr-5">رقم الجوال  : <span class="px-2">{{$finance->patientsـphone }}</span></h4>
                  </div>
                  <div class="d-flex justify-content-between">
                    <h4>رقم الملف  : <span class="px-2">{{$finance->app_id }}</span></h4>
                        <h4 class="pr-5 mr-5"> التشخيص : <span class="px-2">{{$finance->typeـdiagnosis }}</span></h4>
                  </div>
              </div>
          </div>
          <div class="row body2 ">
            <div class="mx-0 px-0 col-1 pt-4 mt-4 ">
                <img src="{{asset('assets/images/Group1.png')}}" class="" width="70px" height="500px">
              </div>
              <div class="text-center  px-3 mx-0 col-11 pt-4 mt-5" style="border: 1px solid #000">
                <h2 class="text-left">السادة / {{$finance->serviceـprovider }} <span class="px-3">المحترمين</span></h2>
                <h5 class="text-left pt-4">السلام عليكم ورحمة الله وبركاته</h5>
                <p class="pt-5 mt-3">بالاشارة الي قبول الحالة من المركز اعتمدو علاج المستفيد الموضحة بياناته أعلاه بمبلغ وقدره <strong class="px-2"> {{$finance->serviceـprice }} ريال فقط</strong>وسيصلكم الشيك بعد تقديم مستندات العلاج من طرفكم باذن الله تعالي , كما  نأمل  تزويدنا الشيك بعد تقديم مستندات العلاج من طرفكم باذن الله تعالي . كما نأمل تزودينا  بالتقرير الطبي بعد بعد انتهاء العملية مع القيمة  االمالية ليتم صرف  المبلغ لكم </p>
                <p>علما بأن الجمعية لا تتحمل أي مصاريف اضافية خارج نطاق هذا التعميد </p>
                <p>للتواصل مع الرقم <strong>{{$finance->user_phone }}</strong></p>
                <p>ولكم أطيب التحية  و التقدير  ...... </p>
                <h4 class=" text-right px-5 pt-5  pb-5 mb-5">المدير التنفيذي</h4>
              </div>
          </div>
      </div>
      <div class="my-5">
        <a id="proceed" href="{{route('finance.index')}}" class="btn btn-secondary">الغاء</a>
    </div>
    </div>
            </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>

            <script>
    window.print();
                </script>


                            <script type="text/javascript">
                                $('#proceed').delay(5000).show(0);
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

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>

