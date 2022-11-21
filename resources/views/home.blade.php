<x-dashboard>
<style>
   i.text-center.flaticon-users-1  {
    font-size: 50px;
    color: #16736C;
}
i.text-center.flaticon2-file  {
    font-size: 50px;
    color: #3a8f74;
}
.application h4{
    color: #16736C;

}
i.text-center.flaticon2-user  {
    font-size: 50px;
    color: #2bbb87;
}
</style>
    <div class="container py-5">
        {{-- {{Auth::guard('application')->user()->id_number}} --}}
        @if(Auth::guard('application')->check())
        <div class="row">
            <div class="col-12  my-3">
                <div class="card application px-3" style="border-radius: 10px">
                   
                    <div class="px-3">
                        <h2 class="pt-3 pb-4"> حالة الطلب</h2>
                        @foreach ($application as $index => $item)
                    <div class="px-3 d-flex justify-content-between">
                        <h6 class="py-3">الطلب {{ $index + 1 }}</h6>
             @if($item->status == "قيد التدقيق" || $item->status == "قيد اتخاذ القرار"
               || $item->status == "قيد المراجعة" || $item->status == "تم التدقيق" )
           <h4 class="py-3">الطلب تحت الاجراء</h4>
          @elseif($item->status == "جديد")
          <h4 class="py-3">تم استلام الطلب</h4>       
            @elseif($item->status == "مرجع" || $item->status == "مرفوض")
            <h4 class="py-3">مرفوض</h4> 
            @elseif($item->status == "الموافقة")
            <h4 class="py-3">تم الموافقة يرجي مراجعة الجمعية</h4>
                @endif       
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- Hello {{Auth::guard('application')->user()->id_number}} --}}
    @elseif(Auth::guard('web')->check())
    @if(Auth::user()->type == "أدمن")
    <div class="row">
        <div class="col-md-6 col-sm-12  my-3">
            <div class="card px-3">
                <i class="text-center flaticon-users-1"></i>
                <div class="px-3 d-flex justify-content-between">
                    <h2> المستخدمين</h2>
                <h4 class="pt-2">{{$users_count}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 my-3">
            <div class="card px-3">
                <i class="text-center flaticon2-file"></i>
                <div class="px-3 d-flex justify-content-between">
                    <h2> الطلبات</h2>
                <h4 class="pt-2">{{$app_new}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 my-3">
            <div class="card px-3">
                <i class="text-center flaticon2-user"></i>
                <div class="px-3 d-flex justify-content-between">
                    <h2> مقدمين الخدمات</h2>
                <h4 class="pt-2">{{$service_count}}</h4>
                </div>
            </div>
        </div>

    </div>
     @elseif(Auth::user()->type == "المالية")
     <div></div>
    @else
    <div class="row">
        <div class="col-md-6 col-sm-12 my-3">
            <div class="card new px-3">
                <i class="text-center flaticon2-file"></i>
                <div class="px-3 d-flex justify-content-between">
                    <h2> الطلبات الجديدة</h2>
                <h4 class="pt-2">{{$app_new}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 my-3">
            <div class="card px-3">
                <i class="text-center flaticon2-file"></i>
                <div class="px-3 d-flex justify-content-between">
                    <h2>الطلبات المنفذة</h2>
                <h4 class="pt-2">{{$appMomvement}}</h4>
                </div>
            </div>
        </div>

    </div>
    @endif
    @endif
       
    </div>
</x-dashboard>
