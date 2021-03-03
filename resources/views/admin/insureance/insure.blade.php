@extends('admin.layouts.master')
@section('title')
اضافه ضمان
@endsection
@section('css')
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
            <h4 class="content-title mb-0 my-auto">الضمانات</h4>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')


@if (session()->has('Added_Succesfully'))
<script>
    window.onload = function() {
        notif({
            msg: "تم الحفظ بنجاح"
            , type: "success"
        });
    }
</script>
@endif

@if (session()->has('Delete_Succesfully'))
<script>
    window.onload = function() {
        notif({
            msg: "تم الحذف بنجاح"
            , type: "success"
        });
    }
</script>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


- @if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

<!-- row -->
<div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                        <button class="btn btn-success" data-toggle="modal" data-target="#Add_insure">اضافه
                            ضمان</button>
                        @include('admin.insureance.create')

                    </div>
                </div>
            </div>

            <div class="card-body">
                <table style="width: 100%" class="table text-md-nowrap table-striped table-hover table-responsive "
                    id="example2">
                    <thead>
                        <tr>

                            <th>#</th>
                            <th>رقم الضمان</th>
                            <th> صاحب الضمان</th>
                            <th> الاحجراءات </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($insures as $insure)
                        <?php $i++; ?>
                        <tr>
                            <th>{{ $i }}</th>

                            <td>{{ $insure->name }}</td>
                            <td>{{ $insure->num }}</td>



                            <td>
                                <a data-toggle="modal" data-target="#edit_insure{{ $insure->id }}"
                                    class="btn btn-outline-info btn-block  btn-sm ">تعدديل</a>



                                <button type="button" class="btn btn-outline-danger btn-block  btn-sm"
                                    data-toggle="modal" data-target="#delte_insure{{ $insure->id }}">حذف</button>
                            </td>
                        </tr>
                        @include('admin.insureance.edit')
                        @include('admin.insureance.delete')
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
<script>
    $(".alert-success").fadeTo(3000, 500).slideUp(500, function(){
$(".alert-success").slideUp(500);
});
</script>

@endsection
