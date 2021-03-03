<!-- Modal -->
<div class="modal fade" id="delte_insure{{ $insure->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">حذف الضمان </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger text-center" role="alert">
                    هل انت متاكد من حذف الضمان
                </div>
            </div>

            <form action="{{ route('insure.destroy' , 'test') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" value="{{ $insure->id }}" name="id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>
            </form>

        </div>
    </div>
</div>
