<!doctype html>
<html lang="ar"  dir="rtl" style="direction: rtl">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>qalbi</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!--     Fonts and icons     -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet"
            type="text/css" />
	<!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link href="{{ asset('assets/front2/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/front2/css/gsdk-bootstrap-wizard.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front2//css/demo.css') }}" rel="stylesheet" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- CSS Just for demo purpose, don't include it in your project -->
</head>
<style>

body{
    background-color:#ECF0FA;
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
input[type="file"] {
    border: 1px solid #a19a9a;
    padding: 10px;
}
.info .pp a{
        color: #16736C;
    margin-top: 16px;
    font-size: 35px;

    }
    .info .pp a span{
        color: #16736C;
        font-size: 18px;
    }
    .form-select {
    font-size: 19px;
}

.loader{
top:0;
margin:0;
padding:0;
width:100%;
height:100%;
position:fixed;
overflow:hidden;
text-align:center;
background-color:#333333;
z-index: 100000;
display:none;
}

.loader-icon{
	position: absolute; top:calc(50% - 100px); left:calc(50% - 100px);
}
</style>
<body>
    <header>

        <div class="py-2 px-5">
          <div class="d-flex justify-content-between px-4">
            <div class="logo">
                <img src="{{asset('assets/images/enayah-logo.png')}}" class="">
            </div>
            <div>
               <h4> جمعية مرضى رعاية مرضى القلب (قلبي )</h4>
            </div>
            <div class="info d-flex">

                <div class="pp px-2">
                   <a href="{{route('users.users_login')}}"><i class="flaticon2-user"></i><span>تسجيل دخول</span></a>
                </div>
        </div>
          </div>

        </div>
    </header>
<div class="image-container set-full-height">
    <!--   Creative Tim Branding   -->

	<!--  Made With Get Shit Done Kit  -->
   <div class="loader">
       
	<svg class="loader-icon" width='200px' height='200px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-default"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(0 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(30 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.041666666666666664s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(60 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.08333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(90 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.125s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(120 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.16666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(150 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.20833333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(180 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.25s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(210 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.2916666666666667s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(240 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.3333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(270 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.375s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(300 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.4166666666666667s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#47bbed' transform='rotate(330 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='0.5s' begin='0.4583333333333333s' repeatCount='indefinite'/></rect></svg>
</div>
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-12 container">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card px-2" data-color="orange" id="wizardProfile">
                    {{-- <form method="POST" class="formm" id="" action="" class="signup-form2" enctype="multipart/form-data">
                     @csrf --}}
                        <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header text-center pb-3">
                            <h2 class="py-4" style="color:#666262;">تسجيل مستفيد لخدمات الجمعية</h2>

                    	</div>

						<div class="wizard-navigation">
							<ul>
	                            <li ><a href="#about" data-toggle="tab">معلومات شخصية</a></li>
                                <li><a href="#code" data-toggle="tab">كود التفعيل</a></li>
	                            <li><a href="#contact" data-toggle="tab">معلومات الإتصال</a></li>
	                            <li><a href="#data" data-toggle="tab">وصف الحاله المرضية</a></li>
                                <li><a href="#attachments" data-toggle="tab"> المرفقات</a></li>
	                        </ul>

						</div>

                        <div class="tab-content form1">
                            <div class="tab-pane px-3" id="about">
                                <form method="POST" class="formm" id="signup-form" action="{{route('application.store')}}" class="signup-form" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                                <div class="row">
                                    <div class="col-md-4 py-3  col-sm-12 px-2">
                                        <label for="username" class="form-label">اسم المريض</label>
                                        <input type="text" class="form-control"  name="patient_name" id="patient_name" placeholder="اسم المريض" />
                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="" class="form-label"> الجنس</label>
                                        <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                                            <option value="ذكر">ذكر</option>
                                            <option value="أنثي">أنثي</option>
                                          </select>
                                    </div>

                                    <div class="col-md-4  py-3 col-sm-12 form-password">
                                        <label for="password" class="form-label">رقم الجوال</label>
                                        <input type="text" class="form-control" name="phone" id="phone"  placeholder="9865442713093" />

                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12">
                                        <label for="your_avatar" class="form-label">البريد الالكتروني</label>
                                        <div class="form-file">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="mo@gmail.com"/>

                                        </div>
                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label"> رقم الهوية</label>
                                        <input type="text" class="form-control" name="id_number" id="" placeholder=" " />
                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label"> تاريخ انتهاء الهوية</label>
                                        <input type="date" class="form-control" name="id_number_end" id="" placeholder=" " />
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane container" id="code">
                                <form method="POST" class="formm" id="signup-form2" action="" >
                                <div class="row px-5 mt-5 pt-5">
                                    <label class="col-2 form-label" style="font-size: 20px;padding-top: 7px;color: #504e4e;">ادخل كود التفعيل</label>
                                    <div class="col-4">
                                        <input class="form-control" type="text" name="code"/>
                                        <p>سوف تستلم رسالة نصية</p>
                                    </div>
                                </div>
                            <input type='button' id="submit2" class='btcode btn   btn-fill btn-warning btn-wd btn-sm' name='next' value='ادخل الكود' />
                            <div id="msg_success" class="w-50 mx-4 mt-2 alert alert-success" role="alert"
                            style="display: none">
                         يرجي اكمال التسجيل
                        </div>
                        <div id="msg_error" class="w-50 mx-4 alert alert-error" role="alert"
                            style="display: none;background-color: #de2525; color:#fff">
                          يرجي التأكد من كود التفعيل
                        </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="contact">
                                <form method="POST" class="formm" id="signup-form3" action="{{route('application.storeother')}}" class="signup-form2" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="email" class="form-label">الجنسية</label>
                                        <input type="text" class="form-control" name="nationality" id="nationality"  placeholder="الجنسية " />
                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="email" class="form-label">الفئة</label>
                                        <select class="form-select" name="class" id="classs" aria-label="Default select example">
                                            <option value="مواطن">مواطن</option>
                                            <option value="خليجي">خليجي </option>
                                            <option value="مقيم">مقيم</option>
                                            <option value="زيارة">زيارة</option>
                                            <option value="قبائل نازحة">قبائل نازحة</option>
                                          </select>
                                     </div>
                                    <div class="col-md-4 py-3  col-sm-12 px-2">
                                        <label for="username" class="form-label">المدينة</label>
                                        <select class="form-select" name="city" id="city" aria-label="Default select example">
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
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label"> الحي</label>
                                        <select class="form-select" name="neighborhood" id="neighborhood" aria-label="Default select example">
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
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="email" class="form-label">قيمة الاجار السنوي(ريال)</label>
                                        <input type="text" class="form-control" name="rentـvalue" id="email" placeholder=" " />
                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="email" class="form-label">اسم أقرب شخص للاتصال</label>
                                        <input type="text" class="form-control" name="relativeـname" id="email" placeholder=" " />
                                    </div>
                                    <div class="col-md-4  py-3 col-sm-12 form-password">
                                        <label for="password" class="form-label">رقم الجوال لأقرب شخص</label>
                                        <input type="text" class="form-control" name="phoneـname" id="password"  placeholder="" />

                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label"> صلة القرابة</label>
                                        <input type="text" class="form-control" name="relative" id="email" placeholder=" " />
                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label"> الراتب الشهري</label>
                                        <input type="text" class="form-control" name="salary" id="email" placeholder=" " />
                                    </div>

                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label"> فئة التأمين الطبي</label>
                                        <select class="form-select" id="medical_insurance_class" name="medical_insurance_class" aria-label="Default select example">
                                            <option value="لا يوجد تأمين طبي">لا يوجد تأمين طبي</option>
                                            <option value="ذهبي">ذهبي </option>
                                            <option value="فضي">فضي</option>
                                            <option value="برونزي">برونزي</option>
                                            <option value="عادي">عادي</option>
                                          </select>
                                     </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label"> العمل الحالي الفعلي</label>
                                        <input type="text" class="form-control" name="current_job" id="email" placeholder=" " />
                                    </div>
                                    <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label"> هاتف</label>
                                        <input type="text" class="form-control" name="telphone" id="email" placeholder=" " />
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane text-center px-4" id="data">
                                        <div class=" row">
                                          <div class="col-md-8 d-flex py-3 col-sm-12 px-2">
                                            <label for="username" class="form-label" style="width:180px"> القسم/ التخصص الطبي</label>
                                              <select id="medical_specialty" name="medical_specialty" required="" class="form-control">
                                                <option value="أمراض القلب الوعائية">أمراض القلب الوعائية</option>
                                                <option value="عدم انتظام ضربات القلب">عدم انتظام ضربات القلب</option>
                                                <option value="أمراض العيوب الخلقية للقلب">أمراض العيوب الخلقية للقلب</option>
                                                <option value="اعتلال عضلة القلب">اعتلال عضلة القلب</option>
                                                <option value="أمراض القلب الناجمة عن التهابات أغشية القلب">أمراض القلب الناجمة عن التهابات أغشية القلب</option>
                                                <option value="أمراض صمامات القلب">أمراض صمامات القلب</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <div class="col-md-8 d-flex py-3  col-sm-12 px-2">
                                            <label for="username" class="form-label mt-5"style="width:180px">نبذة مختصرة عن الحالة </label>
                                            <textarea  class="form-control" name="patient_condition" rows="8"></textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-pane px-2" id="attachments">
                                <div class="row px-2" style="">
                                    <div class="col-md-4 py-2 my-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">صورة هوية المريض</label>
                                        <input type="file" name="id_photo" accept="image/png, image/jpeg, application/pdf">
                                    </div>
                                    <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">تقرير طبي حديث و مفصل </label>
                                        <input type="file" name="medical_report" accept="image/png, image/jpeg, application/pdf">
                                    </div>
                                    <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">صورة من عقد إيجار السكن / فاتورة كهرباء</label>
                                        <input type="file" name="housing_contract" accept="image/png, image/jpeg, application/pdf">
                                    </div>
                                    <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">تعريف من الكفيل بالراتب للمريض أو ولي أمره  </label>
                                        <input type="file" name="definition_salary" accept="image/png, image/jpeg, application/pdf">
                                    </div>
                                    <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">صورة تأشيرة الزيارة  </label>
                                        <input type="file" name="visa_photo" accept="image/png, image/jpeg, application/pdf">
                                    </div>
                                    <div class="col-md-4 py-2  my-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">إقامته او شهادة الميلاد أو جواز السفر /إذا كان المريض طفلا  </label>
                                        <input type="file" name="other" accept="image/png, image/jpeg, application/pdf">
                                    </div>

                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='السابق' />

                            </div>

                            <div class="pull-left">
                                <input type='button' id="submit1" class='btcode btn btn-next  btn-fill btn-warning btn-wd btn-sm' name='next' value='التالي' />
                                <input type='button' id="sendd" class='btcode btn btn-next  btn-fill btn-warning btn-wd btn-sm' name='next' value='التالي' />
                                <input type='button' id="submit3"   class='btcode btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='التالي' />

                                <input type='button' id="save" class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='حفظ'>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    {{-- </form> --}}
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->



</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#login_form').on(function() {
            $('#loaderIcon').css('visibility', 'visible');
            $('#loaderIcon').show();
        });
    })
</script>
	<!--   Core JS Files   -->
    <script src="{{asset('assets/admin/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>

	<script src="{{ asset('assets/front2/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->	<script src="{{ asset('assets/front2/js/gsdk-bootstrap-wizard.js') }}"></script>

    <script src="{{ asset('assets/front2/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('assets/front2/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('assets/front2/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->


</html>
