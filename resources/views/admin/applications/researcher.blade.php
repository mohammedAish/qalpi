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
                   <h4> ?????????? ???????? ?????????? ???????? ?????????? (???????? )</h4>
                </div>
                <div class="info d-flex">

                    <div class="pp px-2">
                        <p>???????? ?????????? ?? ???? ?????????????? ?? ????????????  <span class="px-2"> info@Qalbi.sa </span> <span class=""> +966550735885 </span></p>
                    </div>
            </div>
              </div>

            </div>
        </header>
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-portlet ">
            <h3 class="text-center py-4" style="border-bottom:1px solid rgb(223, 220, 220)">?????????????? ?????? ??????????????</h3>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="{{ route('researcher.store',$application->id)}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="patient_name" class="form-label">?????? ????????????</label>
                            <div>
                                <input type="text" for="patient_name" class="labelborder form-control  @error('patient_name') is-invalid @enderror" name="patient_name" id="patient_name" value="{{ old('patient_name',$application->patient_name)}}" >
                                @error('patient_name')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>  
                            </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="gender" class="form-label"> ??????????</label>
                            <div>
                                <input for="gender" class="labelborder form-control  @error('gender') is-invalid @enderror" name="gender" id="gender" value="{{ old('gender',$application->gender)}}" >
                                @error('gender')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="age" class="form-label"> ??????????</label>
                            <div>
                                <input for="age" name="age" id="age" value="{{ old('age')}}"  class="labelborder form-control @error('age') is-invalid @enderror">
                                @error('age')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="nationality" class="form-label">??????????????</label>
                            <div>
                                <input for="nationality" name="nationality" id="nationality" value="{{ old('nationality',$application->nationality)}}" class="labelborder form-control @error('nationality') is-invalid @enderror">
                                @error('nationality')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="id_number" class="form-label"> ?????? ????????????</label>
                            <div>
                                <input for="id_number" id="id_number" name="id_number" value="{{ old('id_number',$application->id_number)}}" class="labelborder form-control @error('id_number') is-invalid @enderror">
                                @error('id_number')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="id_number_end" class="form-label"> ?????????? ???????????? ????????????</label>
                            <div>
                                <input for="id_number_end" id="id_number_end" name="id_number_end" value="{{ old('id_number_end',$application->id_number_end)}}" class="labelborder form-control @error('id_number') is-invalid @enderror">
                                @error('id_number_end')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="id_source" class="form-label">????????????</label>
                            <div>
                                <input for="id_source" type="text" name="id_source" value="{{ old('id_source')}}"  id="id_source" class="labelborder form-control @error('id_source') is-invalid @enderror" >
                                @error('id_source')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="current_job" class="form-label"> ???????????? </label>
                            <div>
                                <input for="current_job" name="current_job" id="current_job" value="{{ old('current_job',$application->current_job)}}" class="labelborder form-control @error('current_job') is-invalid @enderror">
                                @error('current_job')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="company_work" class="form-label"> ???????????????? </label>
                            <div>
                                <input type="text" id="company_work" name="company_work" value="{{ old('company_work')}}"  for="company_work" class="labelborder form-control @error('company_work') is-invalid @enderror">
                                 @error('company_work')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="salary" class="form-label"> ???????????? ????????????</label>
                            <div>
                                <input for="salary" id="salary" name="salary" value="{{ old('salary',$application->salary)}}" class="labelborder form-control @error('salary') is-invalid @enderror">
                                      @error('salary')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="medical_insurance_class" class="form-label"> ?????? ?????????????? ??????????</label>
                            <div>
                                <input for="medical_insurance_class" id="medical_insurance_class" name="medical_insurance_class" value="{{ old('medical_insurance_class',$application->medical_insurance_class)}}" class="labelborder form-control  @error('medical_insurance_class') is-invalid @enderror">
                               @error('medical_insurance_class')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                         </div>
                         <div class="col-md-4 py-3  col-sm-12 px-2">
                            <label for="address" class="form-label">?????????? ??????????</label>
                            <div>
                                <input type="text" name="address" id="address" for="address"  value="{{ old('salary',$application->address)}}" class="labelborder form-control @error('address') is-invalid @enderror">
                                 @error('address')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="telphone" class="form-label"> ????????</label>
                            <div>
                                <input for="telphone" name="telphone" id="telphone"  value="{{ old('telphone',$application->telphone)}}" class="labelborder form-control  @error('address') is-invalid @enderror">
                                  @error('telphone')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                         </div>

                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">???????????? ????????????????????</label>
                            <div>
                                <select class="form-select form-control" name="social_status"   id="classs" aria-label="Default select example">
                                    <option value="??????????">??????????</option>
                                    <option value="????????">???????? </option>
                                    <option value="????????">????????</option>
                                    <option value="????????">????????</option>
                                  </select>
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="number??wives" class="form-label"> ?????? ??????????????</label>
                            <div>
                                <input type="text" name="number??wives" id="number??wives" value="{{ old('number??wives')}}"  for="number??wives" class="labelborder form-control @error('address') is-invalid @enderror">
                                   @error('number??wives')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">?????????????? ????????????????</label>
                            <div>
                                <select class="form-select form-control" name="educational_level" id="classs" aria-label="Default select example">
                                   <option value="??????">??????</option>
                                   <option value="???????? ?? ????????">???????? ?? ????????</option>
                                   <option value="??????????????">??????????????</option>
                                   <option value="??????????">??????????</option>
                                   <option value="??????????">??????????</option>
                                   <option value="??????????">??????????</option>
                                  </select>
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">?????? ??????????</label>
                            <div>
                                <select class="form-select form-control" name="housing_type" id="classs" aria-label="Default select example">
                                 <option value="??????">??????</option>
                                 <option value="??????">??????</option>
                                 <option value="????????">????????</option>
                                 <option value="?????? ????????">?????? ????????</option>
                                </select>
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="username" class="form-label">?????? ??????????</label>
                            <div>
                                <select class="form-select form-control" name="housing_desc" id="" aria-label="Default select example">
                                 <option value="??????">??????</option>
                                 <option value="??????????">??????????</option>
                                </select>
                            </div>
                         </div>
                         <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="rent??value" class="form-label">???????? ???????????? ????????????(????????)</label>
                            <div>
                                <input for="rent??value" id="rent??value" name="rent??value" value="{{ old('rent??value',$application->rent??value)}}" class="labelborder form-control  @error('rent??value') is-invalid @enderror">
                                   @error('rent??value')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="class" class="form-label">??????????</label>
                            <div>
                                <input for="class" id="class" name="class" value="{{ old('class',$application->class)}}" class="labelborder form-control  @error('class') is-invalid @enderror">
                                  @error('class')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                         </div>


                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="relative??name" class="form-label">?????? ?????? ??????????</label>
                            <div>
                                <input for="relative??name" name="relative??name" id="relative??name" value="{{ old('relative??name',$application->relative??name)}}" class="labelborder form-control @error('relative??name') is-invalid @enderror">
                                  @error('relative??name')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="relative" class="form-label"> ?????? ??????????????</label>
                            <div>
                                <input for="relative" id="relative" name="relative" value="{{ old('relative',$application->relative)}}" class="labelborder form-control  @error('relative') is-invalid @enderror">
                                  @error('relative')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="job_relative" class="form-label">????????????</label>
                            <div>
                                <input type="text" name="job_relative" for="job_relative"  value="{{ old('job_relative')}}"  class="labelborder form-control @error('job_relative') is-invalid @enderror">
                                  @error('job_relative')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="id_relative" class="form-label">?????? ????????????</label>
                            <div>
                                <input type="text" id="id_relative" name="id_relative" for="id_relative" value="{{ old('id_relative')}}" class="labelborder form-control @error('id_relative') is-invalid @enderror">
                                 @error('id_relative')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="class_relative" class="form-label">?????? ?????????????? ??????????</label>
                            <div>
                                <input type="text" name="class_relative" id="class_relative" for="class_relative" value="{{ old('class_relative')}}" class="labelborder form-control" @error('class_relative') is-invalid @enderror">
                                 @error('class_relative')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 py-3 col-sm-12 px-2">
                            <label for="salary_relative" class="form-label">?????????? ????????????</label>
                            <div>
                                <input type="text" id="salary_relative" name="salary_relative" value="{{ old('salary_relative')}}" for="salary_relative" class="labelborder form-control @error('salary_relative') is-invalid @enderror">
                                   @error('salary_relative')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4  py-3 col-sm-12 form-password">
                            <label for="phone_relative" class="form-label">?????? ???????????? </label>
                            <div>
                                <input for="phone_relative" name="phone_relative" id="phone_relative" value="{{ old('phone??name',$application->phone??name)}}" class="labelborder form-control @error('phone_relative') is-invalid @enderror">
                                  @error('phone_relative')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                            <div class="py-4 px-2 family">
                                <h3>?????????????? ????????????</h3>
                                <div id="fines-list3">
                            <div class="fine-inputs3" id="fine-1-inputs3">
                                <div class="row">
                                    <div class="col-md-3 py-3 col-sm-12 px-2">
                                        <label for="" class="form-label">??????????</label>
                                        <div>
                                            <input type="text" id="" name="familyMmember[0][name_member]" value="{{ old('familyMmember[0][name_member]')}}" for="name_member" class="labelborder form-control  @error('') is-invalid @enderror" >
                                              @error('')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                        </div>
                                     </div>
                                     <div class="col-md-3 py-3 col-sm-12 px-2">
                                        <label for="relative_member" class="form-label">?????? ??????????????</label>
                                        <div>
                                            <input type="text" id="relative_member" name="familyMmember[0][relative_member]"  value="{{ old('familyMmember[0][relative_member]')}}" for="relative_member" class="labelborder form-control @error('relative_member') is-invalid @enderror">
                                                    @error('relative_member')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                        </div>
                                     </div>
                                     <div class="col-md-3 py-3 col-sm-12 px-2">
                                        <label for="age_member" class="form-label">??????????</label>
                                        <div>
                                            <input type="text" name="familyMmember[0][age_member]" id="age_member"  value="{{ old('familyMmember[0][age_member]')}}" for="age_member" class="labelborder form-control @error('age_member') is-invalid @enderror">
                                                        @error('age_member')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                        </div>
                                     </div>
                                     <div class="col-md-3 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">?????????? ????????????????</label>
                                        <div>
                                            <select class="form-select form-control" name="familyMmember[0][socical_status_member]" id="classs" aria-label="Default select example">
                                                <option value="??????????">??????????</option>
                                                <option value="????????">???????? </option>
                                                <option value="????????">????????</option>
                                                <option value="????????">????????</option>
                                              </select>
                                        </div>
                                     </div>
                                     <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="status_member" class="form-label">???????????? ????????????</label>
                                        <div>
                                            <input type="text" name="familyMmember[0][status_member]" id="status_member" value="{{ old('familyMmember[0][status_member]')}}" for="status_member" class="labelborder form-control @error('status_member') is-invalid @enderror">
                                                            @error('status_member')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                        </div>
                                     </div>
                                     <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="username" class="form-label">?????????????? ????????????</label>
                                        <div>
                                            <select class="form-select form-control" name="familyMmember[0][education_member]" id="classs" aria-label="Default select example">
                                                <option value="??????">??????</option>
                                                <option value="???????? ?? ????????">???????? ?? ????????</option>
                                                <option value="??????????????">??????????????</option>
                                                <option value="??????????">??????????</option>
                                                <option value="??????????">??????????</option>
                                                <option value="??????????">??????????</option>
                                               </select>
                                        </div>
                                     </div>
                                     <div class="col-md-4 py-3 col-sm-12 px-2">
                                        <label for="salary_member" class="form-label">?????????? ????????????</label>
                                        <div>
                                            <input type="text" id="salary_member" name="familyMmember[0][salary_member]" value="{{ old('familyMmember[0][salary_member]')}}" for="salary_member" class="labelborder form-control @error('salary_member') is-invalid @enderror">
                                                 @error('salary_member')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                        </div>
                                     </div>
                                    </div>
                                </div>
                                <a class="btn addRow3" id="addRow3" style=" color:rgb(238, 230, 230); background-color: #4d717c; ">??????????  ??????????</a>

                                </div>
                            </div>
                            {{-- end family --}}
                            <div class="other px-2 py-4">
                                <h3>?????????????? ????????????</h3>
                                <div class=" row py-5">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="d-flex">
                                            <label for="username" class="form-label">???? ???????????? ?????????? ?????????? ???????????????? ??????????????</label>
                                            <div class="d-flex px-5 mx-4">
                                                <div class="form-check px-3">
                                                    <input class="form-check-input" value="??????" type="radio" name="status_registered" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                      ??????
                                                    </label>
                                                  </div>
                                                  <div class="form-check ">
                                                    <input class="form-check-input" value="????" type="radio" name="status_registered" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                      ????
                                                    </label>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="company_registered" class="form-label">?????? ?????? ???????????? ?????? ?????????? ?????? ??????????????</label>
                                        <div>
                                            <input type="text" name="company_registered" value="{{ old('company_registered')}}"  id="company_registered" for="company_registered" class="labelborder form-control @error('') is-invalid @enderror">
                                     
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 py-3">
                                        <label for="social??evaluation" class="form-label">???????????? ??????????????????</label>
                                        <div>
                                            <textarea for="social??evaluation" id="social??evaluation" value="{{ old('social??evaluation')}}"  class="form-control @error('social??evaluation') is-invalid @enderror" name="social??evaluation" rows="8">
                                                {{ old('social??evaluation')}}
                                            </textarea>
                                                            @error('social??evaluation')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 py-3">
                                        <label for="username" class="form-label">???????????????? ????????????????</label>
                                        <div>
                                            <select class="form-select form-control" name="help_needed" id="classs" aria-label="Default select example">
                                                <option value="?????????? ????????">?????????? ????????</option>
                                                <option value="???????? ?????????? ????????">???????? ?????????? ????????</option>
                                                <option value="?????? ??????????">?????? ??????????</option>
                                               </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-5">
                                    <h3>???????????? ?????? ???????????? ????????????????????</h3>
                                    <div class="row py-5">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="d-flex">
                                                <label for="" class="form-label">?????? ???????????????? ????????????????</label>
                                                <div>
                                                 
                                                      
                                                         <div class="d-flex px-5 mx-4">
                                                <div class="form-check px-3">
                                                    <input class="form-check-input" value="??????" type="radio" name="cashing_needed" id="cashing_needed1">
                                                    <label class="form-check-label" for="cashing_needed1">
                                                      ??????
                                                    </label>
                                                  </div>
                                                  <div class="form-check ">
                                                    <input class="form-check-input" value="????" type="radio" name="cashing_needed" id="cashing_needed2" checked>
                                                    <label class="form-check-label" for="cashing_needed2">
                                                      ????
                                                    </label>
                                                  </div>
                                            </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="patient_convert" class="form-label">???????? ???????????? ?????? </label>
                                            <div>
                                                <input type="text" id="patient_convert"  value="{{ old('patient_convert')}}" name="patient_convert" for="patient_convert" class="labelborder form-control  @error('patient_convert') is-invalid @enderror">
                                                 @error('patient_convert')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="patient_apologize" class="form-label">???????????????? ???????????? ?????????????? ??????????????</label>
                                            <div>
                                                <textarea id="patient_apologize" for="patient_apologize"  value=""   class="form-control  @error('patient_apologize') is-invalid @enderror" name="patient_apologize" rows="8">
                                                    
                                                    {{ old('patient_apologize')}}
                                                </textarea>
                                                         @error('patient_apologize')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5>???????????????? ??????????????????</h5>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label for="name_researcher" class="form-label">??????????</label>
                                            <div>
                                                <input type="text" id="name_researcher" name="name_researcher"  value="{{ old('name_researcher')}}" for="name_researcher" class="labelborder form-control @error('name_researcher') is-invalid @enderror">
                                                                 @error('name_researcher')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="date_researcher" class="form-label">??????????????</label>
                                            <div>
                                                <input type="date" name="date_researcher" id="date_researcher"  value="{{ old('date_researcher')}}"  for="date_researcher" class="labelborder form-control @error('date_researcher') is-invalid @enderror">
                                                                 @error('date_researcher')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
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
                                <button type="submit" class="btn btn-success">??????</button>
                                <a href="{{ route('applications.index')}}" class="btn btn-secondary">??????????</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
            </div>

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
                    '<div class="row"><div class="col-md-3 py-3 col-sm-12 px-2"><label for="username" class="form-label">??????????</label>'+
                        '<div><input type="text" name="familyMmember['+finesInputsCount+'][name_member]" for="" class="labelborder form-control"></div>'+
                        '</div><div class="col-md-3 py-3 col-sm-12 px-2"><label for="username" class="form-label">?????? ??????????????</label>'+
                      '<div><input type="text" name="familyMmember['+finesInputsCount+'][relative_member]" for="" class="labelborder form-control"></div></div>'+
                       '<div class="col-md-3 py-3 col-sm-12 px-2"><label for="username" class="form-label">??????????</label><div>'+
                       '<input type="text" name="familyMmember['+finesInputsCount+'][age_member]" for="" class="labelborder form-control"></div></div>'+
                       '<div class="col-md-3 py-3 col-sm-12 px-2"><label for="username" class="form-label">?????????? ????????????????</label>'+
                      '<div><select class="form-select form-control" name="familyMmember['+finesInputsCount+'][socical_status_member]" id="classs" aria-label="Default select example">'+
                    ' <option value="??????????">??????????</option> <option value="????????">???????? </option>'+
                   '<option value="????????">????????</option><option value="????????">????????</option> </select></div></div>'+
                   ' <div class="col-md-4 py-3 col-sm-12 px-2"><label for="username" class="form-label">???????????? ????????????</label>'+
                    ' <div><input type="text" name="familyMmember['+finesInputsCount+'][status_member]" for="" class="labelborder form-control"></div></div>'+
                    '<div class="col-md-4 py-3 col-sm-12 px-2"><label for="username" class="form-label">?????????????? ????????????</label>'+
                     ' <div><select class="form-select form-control" name="familyMmember['+finesInputsCount+'][education_member]" id="classs" aria-label="Default select example">'+
                     '<option value="??????">??????</option> <option value="???????? ?? ????????">???????? ?? ????????</option>'+
                    '<option value="??????????????">??????????????</option> <option value="??????????">??????????</option>'+
                   ' <option value="??????????">??????????</option><option value="??????????">??????????</option></select> </div>'+
                   ' </div><div class="col-md-4 py-3 col-sm-12 px-2"><label for="username" class="form-label">?????????? ????????????</label>'+
                      ' <div> <input type="text" name="familyMmember['+finesInputsCount+'][salary_member]" for="" class="labelborder form-control"></div></div></div>'+
                '<div class="text-center d-grid gap-2"><button type="button" class="btn3-delete-fi btn  px-5  btn-danger " data-id="'+finesInputsCount+'" id="btn2-delete-fi-'+finesInputsCount+'">??????</button></div>'+
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

