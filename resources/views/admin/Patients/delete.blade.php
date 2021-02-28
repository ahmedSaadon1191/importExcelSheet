<!-- Modal -->
<div class="modal fade" id="delete_patient{{ $patient->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">{{ trans('website/action_btn.delete_mode') }} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger text-center" role="alert">
                    {{ trans('website/action_btn.confrim_delete') }}
                </div>
            </div>

            <form action="{{ route('Patients.destroy' , $patient->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" value="{{ $patient->id }}" name="id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('website/action_btn.close') }}</button>
                    <button type="submit" class="btn btn-danger">{{ trans('website/action_btn.delete') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>
