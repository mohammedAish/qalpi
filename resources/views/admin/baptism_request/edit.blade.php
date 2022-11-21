<x-dashboard>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">

    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                   طلب تعميد
                </h3>
            </div>
        </div>
        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="post" action="{{route('baptism_request.update',$baptism_request->id)}}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label ">اسم مقدم الخدمة</label>
                    <div class="col-md-6 col-sm-12">
                        <select class="form-control" name="serviceـprovider">
                            @foreach ($services as $service)
                            <option value="{{$service->serviceـprovider}}">{{$service->serviceـprovider}}</option>
                            @endforeach

                        </select>
                        @error('serviceـprovider')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label ">اسم الخدمة</label>
                    <div class="col-md-6 col-sm-12">
                        <select class="form-control" name="serviceـname">
                            @foreach ($services as $service)
                            <option value="{{$service->serviceـname}}">{{$service->serviceـname}}</option>
                            @endforeach

                        </select>
                        @error('serviceـname')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label ">سعر الخدمة</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{ old('serviceـprice',$baptism_request->serviceـprice) }}" name="serviceـprice" id="serviceـprice" class="form-control @error('serviceـname') is-invalid @enderror" placeholder=" " required>
                        @error('serviceـprice')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label ">اسم المريض</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{ $baptism_request->patientsـname }}" name="patientsـname" id="title" class="form-control @error('serviceـprovider') is-invalid @enderror" >
                        @error('serviceـprovider')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label ">رقم الهوية</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{ $baptism_request->patientsـid  }}" name="patientsـid" id="title" class="form-control @error('patient_ID') is-invalid @enderror" >
                        @error('patient_ID')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label ">رقم الجوال</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{$baptism_request->patientsـphone }}" name="patientsـphone" id="title" class="form-control @error('serviceـprovider') is-invalid @enderror" >
                        @error('serviceـprovider')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label ">الجنسية</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{$baptism_request->patientsـnationality }}" name="patientsـnationality" id="patientsـnationality" class="form-control @error('patientsـnationality') is-invalid @enderror" >
                        @error('patientsـnationality')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label ">نوع التشخيص</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{$baptism_request->typeـdiagnosis }}" name="typeـdiagnosis" id="typeـdiagnosis" class="form-control @error('typeـdiagnosis') is-invalid @enderror"  required>
                        @error('patientsـphone')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row" style="displayne">
                    <label class="col-md-3 col-form-label ">منسق العلاج</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{$baptism_request->user_name }}" name="user_name" id="app_id" class="form-control @error('app_id') is-invalid @enderror"  required>
                        @error('app_id')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row" style="display">
                    <label class="col-md-3 col-form-label ">رقم حجز المبلغ</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{$baptism_request->reservation_num }}" name="reservation_num" id="reservation_num" class="form-control @error('reservation_num') is-invalid @enderror"  required>
                        @error('reservation_num')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row" style="display">
                    <label class="col-md-3 col-form-label ">رقم جوال المنسق</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" value="{{$baptism_request->user_phone }}" name="user_phone" id="app_id" class="form-control @error('app_id') is-invalid @enderror"  required>
                        @error('app_id')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>



                <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="text-center">

                        <div class="">
                            <button type="submit" class="btn btn-success">حفظ</button>
                            <a href="{{ route('baptism_request.index')}}" class="btn btn-secondary">الغاء</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!--end::Form-->
    </div>
        </div>


@push('js')

@endpush
</x-dashboard>
