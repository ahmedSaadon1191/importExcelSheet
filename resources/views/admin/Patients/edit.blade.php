<!-- Strat Create Services -->
<div class="modal fade" id="edit_patient{{ $patient->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('website/patient.edit_pt') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Patients.update',$patient->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <input type="hidden" value="{{ $patient->id }}" name="id" class="form-control">
                    <input type="hidden" value="{{ $patient->Photo_patient }}" name="old_img">
                    <div class="row">
                        <div class="col-6">
                            <label for="">{{ trans('website/patient.patient_name_ar') }}</label>
                            <input value="{{ $patient->getTranslation('Name_patient' , 'ar') }}" type="text"
                                name="Name_patient" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <label for="">{{ trans('website/patient.patient_name_en') }}</label>
                            <input value="{{ $patient->getTranslation('Name_patient' , 'en') }}" type="text"
                                name="Name_patient_en" class="form-control" required>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-6">
                            <label for="">{{ trans('website/patient.patient_note_ar') }}</label>

                            <textarea name="Notes_patient" class="form-control mt-1"
                                required>{{ $patient->getTranslation('Notes_patient' , 'ar') }}</textarea>
                            @error('Notes_patient')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="">{{ trans('website/patient.patient_note_en') }}</label>

                            <textarea name="Notes_patient_en" class="form-control mt-1"
                                required>{{ $patient->getTranslation('Notes_patient' , 'en') }}</textarea>
                            @error('Notes_patient_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-12">
                            <label for=""> :{{ trans('website/patient.patient_photo') }} </label>
                            <img class="img-responsive mb-2 d-block" style="height: 150px; width:150px;"
                                src="{{ asset('Site/images/patients/' . $patient->Photo_patient) }}">
                            <input type="file" name="Photo_patient">

                            @error('Photo_patient')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('website/action_btn.close') }}</button>
                        <button class="btn btn-primary">{{ trans('website/action_btn.save') }} </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Create Services -->
