<!-- Strat Create Services -->
<div class="modal fade" id="Add_Services" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('website/patient.add_pt') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('Patients.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <label for="">{{ trans('website/patient.patient_name_ar') }}</label>
                            <input type="text" name="Name_patient" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <label for="">{{ trans('website/patient.patient_name_en') }}</label>
                            <input type="text" name="Name_patient_en" class="form-control" required>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-6">
                            <label for="">{{ trans('website/patient.patient_note_ar') }}</label>
                            <input type="text" class="form-control mt-1" name="Notes_patient" required>
                            @error('Notes_patient')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="">{{ trans('website/patient.patient_note_en') }}</label>
                            <input type="text" class="form-control mt-1" name="Notes_patient_en" required>

                            @error('Notes_patient_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-12">
                            <label for=""> :{{ trans('website/patient.patient_photo') }} </label>
                            <input type="file" name="Photo_patient">
                            @error('Photo_patient')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('website/action_btn.close') }}</button>
                        <button class="btn btn-primary">{{ trans('website/action_btn.save') }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Create Services -->
