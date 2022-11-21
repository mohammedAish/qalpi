<table class="table table-striped table-bordered" style="width:100%" id="quiztable" >
    <thead>
      <tr>
       <th> #</th>
        <th>مزود الخدمة</th>
        <th> الخدمة</th>
        <th>سعر الخدمة</th>
        <th>المريض</th>
        <th> رقم الهوية</th>
        <th>رقم الجوال</th>
        <th>الحالة</th>
         <th> الأدوات </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($finance as $patient)
        <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->serviceـprovider}}</td>
            <td>{{$patient->serviceـname}}</td>
            <td>{{$patient->serviceـprice}}</td>
            <td>{{$patient->patientsـname}}</td>
            <td>{{$patient->patientsـid}}</td>
            <td>{{$patient->patientsـphone}}</td>
            <td style="color: rgb(74, 214, 74);font-size:18px">{{$patient->status}}</td>
            <td class="d-flex">
              
                <a class="mx-2" href="{{route('finance.edit',$patient->id)}}"><i class="far fa-edit"></i></a>
                {{-- <a style="border-style:none;color: #1100ff;background-color: transparent" href="{{route('finance.print',$patient->id)}}"><i style="font-size: 17px" class="flaticon-technology"></i></a> --}}
                </td>

                  @include('admin.finance.delete')

        </tr>

        @endforeach

</tbody>
</table>
