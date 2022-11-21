<table class="table table-striped table-bordered" style="width:100%" id="quiztable" >
    <thead>
      <tr>
       <th> #</th>
        <th> المريض</th>
        <th>رقم الهوية</th>
        <th>رقم الجوال</th>
        <th>الجنسية</th>
        <th>مقدم الخدمة</th>
         <th> الأدوات </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
        <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->patient_name}}</td>
            <td>{{$patient->patient_ID}}</td>
            <td>{{$patient->patient_phone}}</td>
            <td>{{$patient->patientsـnationality}}</td>
            <td>{{$patient->serviceـprovider}}</td>

            <td class="d-flex">
                {{-- <a class="" href="{{route('services.edit',$patient->id)}}"><i class="far fa-edit"></i></a> --}}
                <a href="#" class="mx-2" style="border-style:none;color: #1100ff;background-color: transparent"   class="" data-toggle="modal" data-target="#ModalDelete{{ $patient->id }}"><i class="far fa-trash-alt"></i></a>
                <a style="border-style:none;color: #1100ff;background-color: transparent" href="{{route('patient.print',$patient->id)}}"><i style="font-size: 17px" class="flaticon-technology"></i></a>
                </td>

                @include('admin.patients.delete')


        </tr>

        @endforeach

</tbody>
</table>
