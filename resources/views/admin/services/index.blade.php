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
                        مقدمين الخدمات
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="dropdown dropdown-inline">
                            <a href="{{ route('services.create') }}" class="btn btn-brand btn-icon-sm">
                                <i class="fa fa-plus"></i> اضافة مقدم خدمة
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-portlet__body kt-portlet__body--fit">

                <div class="kt-portlet__body">

                    <!--begin: Search Form -->
                    <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">


                    </div>

                    <!--end: Search Form -->
                </div>
                <!--begin: Datatable -->
                <table class="table table-striped table-bordered" style="width:100%" id="quiztable" >
                    <thead>
                      <tr>
                       <th> #</th>
                        <th>اسم مقدم الخدمة</th>
                        <th> اسم الخدمة</th>
                        <th> سعر الخدمة  </th>
                         <th> الأدوات </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{$service->id}}</td>
                            <td>{{$service->serviceـprovider}}</td>
                            <td>{{$service->serviceـname}}</td>
                            <td>{{$service->serviceـprice}}</td>

                            <td class="d-flex"><a class="" href="{{route('services.edit',$service->id)}}"><i class="far fa-edit"></i></a>
                                <a href="#" class="mx-2" style="border-style:none;color: #1100ff;background-color: transparent"   class="" data-toggle="modal" data-target="#ModalDelete{{ $service->id }}"><i class="far fa-trash-alt"></i></a>

                                </td>
                               
                                @include('admin.services.delete')


                        </tr>

                        @endforeach

                </tbody>
                </table>
        <!--end: Datatable -->
            </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>
</x-dashboard>
