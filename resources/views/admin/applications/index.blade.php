<x-dashboard>
    @if (session()->has('success'))
    <div class="alert alert-success my-5 text-center" style="font-size:23px;">
        {{ session()->get('success') }}
    </div>
    @endif
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">
        <!-- begin:: Content -->

        @if(Auth::user()->type == "منسق العلاج")
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                 <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        الأرشيف
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">

                    </div>
                </div>
            </div>

            <div class="kt-portlet__body kt-portlet__body--fit">

               
                
                <div id="r_tabel">
                    @include('admin.applications.table_archive')

                  </div>
                <!--begin: Datatable -->

        <!--end: Datatable -->
            </div>
            </div>
        </div>

        @endif
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                 <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        الطلبات
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        @if(Auth::user()->type == "أدمن")
                        <a href="{{route('applications.git_admin')}}" class="mt-2 btn btn-info">طلب جديد</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="kt-portlet__body kt-portlet__body--fit">

                <div class="kt-portlet__body">

                    <!--begin: Search Form -->
                    <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10 row">
                        <div class="dropdown dropdown-inline col-md-6">
                            <a href="{{route('applications.export')}}" class="mt-2 btn btn-info">تصدير اكسل</a>

                        </div>
                       <div class="col-md-6">

                            <div class="row">
                                <div class="col-md-6 col-ms-6">
                                    <input type="search" name="search" class="form-control" id="search" placeholder="ابحث عن طريق الاسم أو رقم الهوية" />
                                </div>

                                <div class="col-md-6 col-ms-6">
                                    <button  onclick="search()" class="btn btn-primary form-control">بحث</button>
                                </div>

                            </div>

                    </div>

                    </div>

                    <!--end: Search Form -->
                </div>

                <div id="render_tabel">
                    @include('admin.applications.table')

                  </div>
                <!--begin: Datatable -->

        <!--end: Datatable -->
            </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>

    @push('js')

    <script type="text/javascript">

        function search() {
        $value = $('#search').val();
        $.ajax({
        type : 'POST',
        url : '{{URL::to('applications/search')}}',
        data:{_token:'{{ csrf_token() }}', value: $value},
        success:function(data){

        $('#render_tabel').html(' ');
        $('#render_tabel').html(data.page);

        }
        });
        }
        </script>
@endpush

</x-dashboard>
