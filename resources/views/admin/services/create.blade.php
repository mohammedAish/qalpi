<x-dashboard>
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        اضافة مقدم خدمة جديد
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="{{route('services.store')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">اسم مقدم الخدمة</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="{{ old('serviceـprovider') }}" name="serviceـprovider" id="title" class="form-control @error('serviceـprovider') is-invalid @enderror" placeholder="اسم مقدم الخدمة" required>
                            @error('serviceـprovider')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="incomes col-md-12 col-sm-12 pb-3"  >
                        <div id="fines-list3">
                            <div class="fine-inputs3" id="fine-1-inputs3">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">اسم الخدمة</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="{{ old('serviceـname') }}" name="services[0][serviceـname]" id="title" class="form-control @error('serviceـname') is-invalid @enderror" placeholder="اسم الخدمة" required>
                            @error('serviceـname')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">سعر الخدمة</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="{{ old('serviceـprice') }}" name="services[0][serviceـprice]" id="title" class="form-control @error('serviceـprice') is-invalid @enderror" placeholder="سعر الخدمة" required>
                            @error('serviceـprice')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                            </div>
                        </div>
                        <a class="btn addRow3" id="addRow3" style=" color:rgb(238, 230, 230); background-color: #4d717c; ">اضافة خدمة جديدة</a>


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


@push('js')
<script>

  $('.addRow3').on('click' , function (){
      addFineInputs3();
  });

  function addFineInputs3() {

      let finesInputsCount = $('.fine-inputs3').length;
      finesInputsCount += 1;
      let finesHtml = '<div id="fine-'+finesInputsCount+'-inputs3" class="mt-4 fine-inputs3">'+
           ' <div class="form-group row"><label class="col-md-3 col-form-label ">اسم الخدمة</label>'+
          ' <div class="col-md-6 col-sm-12"><input type="text" value="{{ old('serviceـname') }}" name="services['+finesInputsCount+'][serviceـname]" id="title" class="form-control @error('serviceـname') is-invalid @enderror" placeholder="اسم الخدمة">'+
                '@error('serviceـname')<p class="invalid-feedback">{{ $message }}</p>@enderror </div></div>'+
                    '<div class="form-group row"><label class="col-md-3 col-form-label ">سعر الخدمة</label>'+
                       ' <div class="col-md-6 col-sm-12"><input type="text" value="{{ old('serviceـprice') }}" name="services['+finesInputsCount+'][serviceـprice]" id="title" class="form-control @error('serviceـprice') is-invalid @enderror" placeholder="سعر الخدمة">'+
             '@error('serviceـprice')<p class="invalid-feedback">{{ $message }}</p>@enderror</div> </div>'+
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
@endpush
</x-dashboard>
