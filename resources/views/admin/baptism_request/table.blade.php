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
        <th>الجنسية</th>
        <th>نوع التشخيص</th>
         <th> الأدوات </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($baptism_request as $patient)
        <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->serviceـprovider}}</td>
            <td>{{$patient->serviceـname}}</td>
            <td>{{$patient->serviceـprice}}</td>
            <td>{{$patient->patientsـname}}</td>
            <td>{{$patient->patientsـid}}</td>
            <td>{{$patient->patientsـphone}}</td>
            <td>{{$patient->patientsـnationality}}</td>
            <td>{{$patient->typeـdiagnosis}}</td>

            <td class="d-flex">
                <a class="" href="{{route('baptism_request.edit',$patient->id)}}"><i class="far fa-edit"></i></a>
                @if($patient->status == "موافقة")
                <a style="border-style:none;color: #1100ff;background-color: transparent" href="{{route('baptism_request.print',$patient->id)}}"><i style="font-size: 17px" class="mx-2 flaticon-technology"></i></a>
            @endif
            </td>

                  @include('admin.baptism_request.delete')

        </tr>

        @endforeach

</tbody>
</table>
