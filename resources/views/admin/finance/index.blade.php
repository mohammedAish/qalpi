<x-dashboard>
    @if (session()->has('success'))
    <div class="alert alert-success my-5 text-center" style="font-size:23px;">
        {{ session()->get('success') }}
    </div>
    @endif
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5 pt-5" id="kt_content">
        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                 <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                     المالية
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="dropdown dropdown-inline">
                            {{-- <a href="{{ route('patient.create') }}" class="btn btn-brand btn-icon-sm">
                                <i class="fa fa-plus"></i> اضافة مريض وخدمة
                            </a> --}}

                        </div>

                    </div>
                </div>
            </div>

            <div class="kt-portlet__body kt-portlet__body--fit">

                <div class="kt-portlet__body">

                    <!--begin: Search Form -->
                    <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">

                        <div class="">

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
                <!--begin: Datatable -->
                <div id="render_tabel">
                    @include('admin.finance.table')

                  </div>
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
        url : '{{URL::to('finance/search')}}',
        data:{_token:'{{ csrf_token() }}', value: $value},
        success:function(data){
        $('#render_tabel').html('');
        $('#render_tabel').html(data.page);

        }
        });
        }
        </script>
@endpush
</x-dashboard>
