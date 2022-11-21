<x-dashboard>
       <style>
.input-group-addon {
    background-color: #ebf0f0;
}
    </style>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        تعديل المستخدمين
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="{{route('users.update',$user->id)}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">الاسم</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="{{ old('name', $user->name) }}" name="name" id="title" class="form-control @error('name') is-invalid @enderror" placeholder="الاسم">
                            @error('user_name')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">البريد الالكتروني</label>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" value="{{ old('email', $user->email) }}" name="email" id="title" class="form-control @error('email') is-invalid @enderror" placeholder="البريد الالكتروني">
                            @error('email')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">كلمة المرور</label>
                        <div class="col-md-6 col-sm-12">
                            <div class="input-group" id="show_hide_password">
                                <input class="form-control" type="password" name="password">
                                <div class="input-group-addon">
                                  <a href=""><i class=" fa fa-eye-slash pt-3 mt-2 px-1" aria-hidden="true"></i></a>
                                </div>
                              </div>
                            @error('password')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label ">المسمي الوظيفي</label>
                        <div class="col-md-6 col-sm-12">
                            <select name="type" class="form-control">
                                    @if(Auth::user()->type == "أدمن")
                                    <option value="أدمن">أدمن</option>
                                    @endif
                                <option value="سكرتير العلاج">سكرتير العلاج</option>
                                <option value="اللجنة الطبية">اللجنة الطبية</option>
                                <option value="باحث اجتماعي">باحث اجتماعي</option>
                                <option value="منسق العلاج">منسق العلاج</option>
                                <option value="المالية">محاسب </option>

                            </select>
                        </div>
                        @error('type')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="text-center">

                            <div class="">
                                <button type="submit" class="btn btn-success">حفظ</button>
                                <a href="{{ route('users.index')}}" class="btn btn-secondary">الغاء</a>
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
                $(document).ready(function() {
                $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if($('#show_hide_password input').attr("type") == "text"){
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass( "fa-eye-slash" );
                        $('#show_hide_password i').removeClass( "fa-eye" );
                    }else if($('#show_hide_password input').attr("type") == "password"){
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass( "fa-eye-slash" );
                        $('#show_hide_password i').addClass( "fa-eye" );
                    }
                });
            });
           </script>
            @endpush
</x-dashboard>
