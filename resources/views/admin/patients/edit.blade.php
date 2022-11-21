<x-dashboard>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        تعديل مقدم الخدمة
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="{{route('services.update',$service->id)}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">اسم مقدم الخدمة</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="{{ old('serviceـprovider', $service->serviceـprovider) }}" name="serviceـprovider" id="title" class="form-control @error('serviceـprovider') is-invalid @enderror" placeholder="">
                            @error('serviceـprovider')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">اسم الخدمة</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="{{ old('serviceـname', $service->serviceـname) }}" name="serviceـname" id="title" class="form-control @error('serviceـname') is-invalid @enderror" placeholder="">
                            @error('serviceـname')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">سعر الخدمة</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="{{ old('serviceـprice', $service->serviceـprice) }}" name="serviceـprice" id="title" class="form-control @error('serviceـprice') is-invalid @enderror" placeholder="">
                            @error('serviceـprice')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    </div>
                    <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="text-center">

                            <div class="">
                                <button type="submit" class="btn btn-success">حفظ</button>
                                <a href="{{ route('services.index')}}" class="btn btn-secondary">الغاء</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
            </div>
</x-dashboard>
