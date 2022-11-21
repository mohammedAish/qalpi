<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
    <thead>
        <tr>
            <th>اسم المريض</th>
            <th>رقم الجوال</th>
            <th>رقم الهوية</th>
            <th>الفئة</th>
            <th>اسم أقرب شخص</th>
            <th>رقم جوال  أقرب شخص</th>
            <th>الحالة</th>
            <th>الادوات</th>
        </tr>
    </thead>
    <tbody>
        @foreach($applications as $application)
        <tr>
            <td>{{$application->patient_name}}</td>
            <td>{{$application->phone}}</td>
            <td>{{$application->id_number}}</td>
            <td>{{$application->class}}</td>
            <td>{{$application->relativeـname}}</td>
            <td>{{$application->phoneـname}}</td>
            <td style="color: rgb(74, 214, 74);font-size:18px">
                   @if($application->status == "قيد التدقيق")
                @if(Auth::user()->type == "باحث اجتماعي")
                جديد
                @else
                قيد التدقيق لدى الباحث
                @endif
                @elseif($application->status == "قيد اتخاذ القرار")
                @if(Auth::user()->type == "اللجنة الطبية")
                جديد
                @else
                قيد اتخاذ القرار لدي اللجنة الطبية
                @endif
                @elseif($application->status == "قيد المراجعة")
                @if(Auth::user()->type == "سكرتير العلاج")
                جديد
                @else
                الطلب لدي سكرتير العلاج
                @endif
                @elseif($application->status == "تم التدقيق")
                تم التدقيق من الباحث الاجتماعي
                @elseif($application->status == "الموافقة")
                تم الموافقة من اللجنة الطبية
                @elseif($application->status == "مرجع")
                مرجع من اللجنة الطبية
                @else
                {{$application->status}}
                @endif
            </td>
           
                <td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
                    <span style="overflow: visible; position: relative; width: 80px;">
                     <div class="dropdown">
                       <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                        <i class="flaticon-more-1"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                              
                            @if(($application->status == "جديد") || ($application->status == "تم التدقيق") ||
                            ($application->status == "مرجع") || ($application->status == "مرفوض من منسق العلاج") || ($application->status == "مرفوض من اللجنة الطبية")  )
                            @if(Auth::user()->type == "منسق العلاج")
                            <li class="kt-nav__item" style="">
                                <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text">عرض</span> </a>
                            </li>
                            @elseif(Auth::user()->type == "أدمن")
                            <li class="kt-nav__item" style="">
                                <a class="kt-nav__link" href="{{route('applications.edit_admin',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text">عرض</span> </a>
                            </li>
                            @else
                            <li class="kt-nav__item" style="display: none;">
                                <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text"></span> </a>
                            </li>
                            @endif

                           @elseif($application->status == "قيد التدقيق")
                            @if(Auth::user()->type == "باحث اجتماعي")
                            <li class="kt-nav__item" style="">
                                <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text">عرض</span> </a>
                            </li>
                            @elseif(Auth::user()->type == "أدمن")
                            <li class="kt-nav__item" style="">
                                <a class="kt-nav__link" href="{{route('applications.edit_admin',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text">عرض</span> </a>
                            </li>
                            @else
                            <li class="kt-nav__item" style="display: none;">
                                <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text"></span> </a>
                            </li>
                            @endif

                           @elseif(($application->status == "قيد المراجعة") || ($application->status == "الموافقة") )
                            @if(Auth::user()->type == "سكرتير العلاج")
                            <li class="kt-nav__item" style="">
                                <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text">عرض</span> </a>
                            </li>
                            @elseif(Auth::user()->type == "أدمن")
                            <li class="kt-nav__item" style="">
                                <a class="kt-nav__link" href="{{route('applications.edit_admin',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text">عرض</span> </a>
                            </li>
                            @else
                            <li class="kt-nav__item" style="display: none;">
                                <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text"></span> </a>
                            </li>
                            @endif

                           @elseif($application->status == "قيد اتخاذ القرار")
                           @if(Auth::user()->type == "اللجنة الطبية")

                           <li class="kt-nav__item" style="">
                            <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                <i class="kt-nav__link-icon flaticon-visible"></i>
                                  <span class="kt-nav__link-text">عرض</span> </a>
                        </li>
                        @elseif(Auth::user()->type == "أدمن")
                        <li class="kt-nav__item" style="">
                            <a class="kt-nav__link" href="{{route('applications.edit_admin',$application->id)}}">
                                <i class="kt-nav__link-icon flaticon-visible"></i>
                                  <span class="kt-nav__link-text">عرض</span> </a>
                        </li>
                        @else
                        <li class="kt-nav__item" style="display: none;">
                            <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                <i class="kt-nav__link-icon flaticon-visible"></i>
                                  <span class="kt-nav__link-text"></span> </a>
                        </li>
                        @endif
                        @endif
                            <li class="kt-nav__item">
                                <a class="kt-nav__link" href="{{route('applications.print',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-technology"></i>
                                      <span class="kt-nav__link-text">طباعة</span> </a>
                            </li>
                            @if(Auth::user()->type == "أدمن")
                            <li class="kt-nav__item">
                                

                                <a href="#" class="kt-nav__link" style=""   class="" data-toggle="modal" data-target="#ModalDelete{{ $application->id }}">
                                    <i class="kt-nav__link-icon far fa-trash-alt"></i>
                                      <span class="kt-nav__link-text">حذف</span> </a>
                               
                            </li>
 @endif

   @if((Auth::user()->type == "منسق العلاج")|| (Auth::user()->type == "أدمن"))

                                <li class="kt-nav__item">
                                 <a class="kt-nav__link" href="{{ route('patient.create',$application->id) }}">
                                 <i class="kt-nav__link-icon flaticon2-contract"></i>
                                   <span class="kt-nav__link-text">طلب تكلفة</span> </a>
                                  </li>
                                  @if ($application->status == "الموافقة")
                                  <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="{{ route('baptism_request.create',$application->id) }}">
                                    <i class="kt-nav__link-icon flaticon2-contract"></i>
                                      <span class="kt-nav__link-text">طلب تعميد</span> </a>
                                     </li>
                                     @endif
                            @endif

                            @if(Auth::user()->type == "المالية")
                               @if ($application->status == "الموافقة")
                            <li class="kt-nav__item" style="">
                                <a class="kt-nav__link" href="{{route('applications.show',$application->id)}}">
                                    <i class="kt-nav__link-icon flaticon-visible"></i>
                                      <span class="kt-nav__link-text">عرض</span> </a>
                            </li>
                            @endif
                            @endif
                                </ul>
                             </div>
                             </div>
                            </span>
                        </td>
                @include('admin.applications.delete')


        </tr>
        @endforeach
    </tbody>
</table>
{{ $applications->links() }}
