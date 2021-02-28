@extends('admin.layouts.master')
@section('css')
@toastr_css
<!-- Internal Data table css -->
<link href="{{URL::asset('Admin/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Admin/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Admin/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Admin/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Admin/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Owl Carousel css-->
<link href="{{URL::asset('Admin/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!---Internal  Multislider css-->
<link href="{{URL::asset('Admin/plugins/multislider/multislider.css')}}" rel="stylesheet">



@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{ trans('website/main_title.main_title') }}</h4><span
                class="text-muted mt-1 tx-13 mr-2 mb-0">/
                {{trans('admin/sidbar.Patients')}}</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                        <button class="btn btn-success" data-toggle="modal"
                            data-target="#Add_Services">{{ trans('website/patient.add_pt') }}</button>
                        @include('admin.Patients.create')

                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table text-md-nowrap table-striped table-hover table-responsive " id="example2">
                    <thead>
                        <tr>

                            <th class="wd-15p border-bottom-0">#</th>
                            <th class="wd-15p border-bottom-0">{{ trans('website/patient.patient_name') }}</th>
                            <th class="wd-20p border-bottom-0">{{ trans('website/patient.patient_note') }}</th>
                            <th class="wd-20p border-bottom-0">{{ trans('website/patient.patient_photo') }}</th>
                            <th class="wd-15p border-bottom-0">{{ trans('website/patient.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($patients as $patient)
                        <?php $i++; ?>
                        <tr>
                            <th>{{ $i }}</th>

                            <td>{{ $patient->Name_patient }}</td>
                            <td>{{ $patient->Notes_patient }}</td>
                            <td><img class='img-responsive' style="height: 92px; width:150px;"
                                    src="{{ asset('Site/images/patients/' . $patient->Photo_patient ) }}" alt=""></td>

                            <td>
                                @if ($patient->created_at == null)
                                <span class="text-danger">no date</span>

                                @else
                                {{ Carbon\Carbon::parse($patient->created_at)->diffForHumans() }}
                                @endif

                            </td>
                            <td>
                                <a data-toggle="modal" data-target="#edit_patient{{ $patient->id }}"
                                    href="{{ route('Patients.edit' ,$patient->id) }}"
                                    class="btn btn-outline-info btn-block  btn-sm ">{{ trans('website/action_btn.edit') }}</a>



                                <button type="button" class="btn btn-outline-danger btn-block  btn-sm"
                                    data-toggle="modal"
                                    data-target="#delete_patient{{ $patient->id }}">{{ trans('website/action_btn.delete') }}</button>
                            </td>
                        </tr>
                        @include('admin.Patients.edit')
                        @include('admin.Patients.delete')
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('Admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('Admin/js/table-data.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('Admin/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('Admin/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Modal js-->
<script src="{{URL::asset('Admin/js/modal.js')}}"></script>


@toastr_js
@toastr_render
@endsection
