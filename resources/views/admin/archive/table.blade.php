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
                                <li class="kt-nav__item" style="">
                                    <a class="kt-nav__link" href="{{route('archive.show',$application->id)}}">
                                        <i class="kt-nav__link-icon flaticon-visible"></i>
                                          <span class="kt-nav__link-text">عرض</span> </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="{{route('archive.print',$application->id)}}">
                                        <i class="kt-nav__link-icon flaticon-technology"></i>
                                          <span class="kt-nav__link-text">طباعة</span> </a>
                                </li>
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

