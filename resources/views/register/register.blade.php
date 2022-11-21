<!DOCTYPE html>
<html lang="ar" direction="rtl" dir="rtl" style="direction: rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets/front/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
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
    .logo img{
        width: 30%;
    }
    .info p{
        color: #302e2e;
    }
    header h4{
        color: #16736C;
    padding-top: 15px;
    font-size: 19px;
}
input[type='file'] {
    height: 58px ;
    width: 100% ;
    opacity: 1 ;
}
label {
    display: inline-block;
    width: 100% ;
    text-align: right;
}
    .info .pp p{
        color: #302e2e;
    margin-top: 16px;
    }
    .info .pp p span{
        color: #16736C;
    font-size: 12px;
    }
    .sss{
       position: relative;
    }
    .sss button{
        bottom: 15px;
    left: 17%;
        position: absolute;
        width: 150px;
    height: 50px;
    color: #fff;
    background: #1abc9c;

    border: none;
    border-radius: 10px;
    }
    .overlay{
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: rgba(255,255,255,0.8) url("/examples/images/loader.gif") center no-repeat;
    }

    /* Turn off scrollbar when body element has the loading class */
    body.loading{
        overflow: hidden;
    }
    /* Make spinner image visible when body element has the loading class */
    body.loading .overlay{
        display: block;
    }

</style>
<body>
<header>
    <img id="loaderIcon" style="visibility:hidden; display:none"
    src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif" alt="..."/>
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
                <p>شارع البرق ، حي الروابي ، الرياض  <span class="px-2"> info@Qalbi.sa </span> <span class=""> +966550735885 </span></p>
            </div>
        </div>
      </div>

    </div>
</header>
    <div class="main">

        <div class="container formm">
            <h2 class="py-4">تسجيل طلب مريض</h2>
            <form method="POST" id="signup-form" action="{{route('application.store')}}" class="signup-form" enctype="multipart/form-data">
                @csrf
                <h3>
                    <span class="title_text px-2">معلومات شخصية</span>
                </h3>
                <fieldset>
                    <div class="fieldset row">
                        <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="username" class="form-label">اسم المريض</label>
                            <input type="text" class="form-control"  name="patient_name" id="patient_name" placeholder="اسم المريض" />
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="" class="form-label"> الجنس</label>
                            <select class="form-select" aria-label="Default select example" id="" name="gender">
                                <option value="1">ذكر</option>
                                <option value="2">أنثي</option>
                              </select>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">الجنسية</label>
                            <input type="text" class="form-control" name="nationality" id="nationality" id="nationality" placeholder="الجنسية " />
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="email" class="form-label">الفئة</label>
                            <select class="form-select" name="class" aria-label="Default select example">
                                <option value="1">مواطن</option>
                                <option value="2">خليجي </option>
                                <option value="3">مقيم</option>
                              </select>
                         </div>
                        <div class="col-md-4  py-3 col-sm-12 form-password">
                            <label for="password" class="form-label">رقم الجوال</label>
                            <input type="text" class="form-control" name="phone" id="password"  placeholder="9865442713093" />

                        </div>
                        <div class="col-md-4 py-3 col-sm-12">
                            <label for="your_avatar" class="form-label">البريد الالكتروني</label>
                            <div class="form-file">
                                <input type="email" class="form-control" name="email" id="your_avatar" placeholder="mo@gmail.com"/>

                            </div>
                        </div>
                    </div>
                    <div class="fieldset-footer">
                        <span>الخطوة 1 - 5</span>
                    </div>
                </fieldset>
                <h3>
                    <span class="title_text px-2">كود التفعيل
                    </span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-radio">
                            <label for="payment_type" style="width:100px">ادخل كود التفعيل</label>
                            <div class="">
                                <input type="number" name="code" id="payment_visa" />


                            </div>
                        </div>


                    <div class="fieldset-footer">
                        <span>الخطوة 2 - 5</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text px-2">معلومات الإتصال</span>
                </h3>
                <fieldset>
                    <div class="fieldset row">
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> رقم الهوية</label>
                            <input type="text" class="form-control" name="id_number" id="email" placeholder=" " />
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> تاريخ انتهاء الهوية</label>
                            <input type="text" class="form-control" name="id_number_end" id="email" placeholder=" " />
                        </div>
                        <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="username" class="form-label">المدينة</label>
                            <input type="text" class="form-control"  name="city" id="username" placeholder=" " />
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label"> الحي</label>
                            <input type="text" class="form-control" name="neighborhood" id="email" placeholder=" " />
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
                            <select class="form-select" name="medical_insurance_class" aria-label="Default select example">
                                <option value="1">لا يوجد تأمين طبي</option>
                                <option value="2">ذهبي </option>
                                <option value="3">فضي</option>
                                <option value="3">برونزي</option>
                                <option value="3">عادي</option>
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

                    <div class="fieldset-footer">
                        <span>الخطوة 3 - 5</span>
                    </div>

                </fieldset>

                <h3>
                    <span class="title_text px-2">بيانات الطلب الطبي</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="input-group row">
                        <div class="col-md-9 d-flex py-3 col-sm-12 px-2">
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
                    <div class="input-group row">
                        <div class="col-md-9 d-flex py-3  col-sm-12 px-2">
                            <label for="username" class="form-label mt-5"style="width:180px">نبذة مختصرة عن الحالة </label>
                            <textarea  class="form-control" name="patient_condition" rows="8"></textarea>
                        </div>
                    </div>
                </div>

                    <div class="fieldset-footer">
                        <span>الخطوة 4 - 5</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text px-2">المرفقات
                    </span>
                </h3>
                <fieldset>
                    <div class="fieldset-content row sss" style="padding-right:5px;">
                        <div class="col-md-4 py-1  col-sm-12 px-2">
                            <label for="username" class="form-label">صورة هوية المريض</label>
                            <input type="file" name="id_photo" accept="image/png, image/jpeg, application/pdf">
                        </div>
                        <div class="col-md-4 py-1  col-sm-12 px-2">
                            <label for="username" class="form-label">تقرير طبي حديث و مفصل </label>
                            <input type="file" name="medical_report" accept="image/png, image/jpeg, application/pdf">
                        </div>
                        <div class="col-md-4 py-1  col-sm-12 px-2">
                            <label for="username" class="form-label">صورة من عقد إيجار السكن / فاتورة كهرباء</label>
                            <input type="file" name="housing_contract" accept="image/png, image/jpeg, application/pdf">
                        </div>
                        <div class="col-md-4 py-1  col-sm-12 px-2">
                            <label for="username" class="form-label">تعريف من الكفيل بالراتب للمريض أو ولي أمره  </label>
                            <input type="file" name="definition_salary" accept="image/png, image/jpeg, application/pdf">
                        </div>
                        <div class="col-md-4 py-1  col-sm-12 px-2">
                            <label for="username" class="form-label">صورة تأشيرة الزيارة  </label>
                            <input type="file" name="visa_photo" accept="image/png, image/jpeg, application/pdf">
                        </div>
                        <div class="col-md-4 py-1  col-sm-12 px-2">
                            <label for="username" class="form-label">إقامته او شهادة الميلاد أو جواز السفر /إذا كان المريض طفلا  </label>
                            <input type="file" name="other" accept="image/png, image/jpeg, application/pdf">
                        </div>



                        <button type="submit">ارسال</button>
                    </div>

                    <div class="fieldset-footer ">
                         <span>الخطوة 5 - 5</span>
                    </div>
                </fieldset>
            </form>

        </div>

    </div>

    <!-- JS -->

    <script src="{{ asset('assets/front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/minimalist-picker/dobpicker.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/jquery.pwstrength/jquery.pwstrength.js') }}"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>


</html>
