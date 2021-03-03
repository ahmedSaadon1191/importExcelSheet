<!-- Strat Create Sections -->
<div class="modal fade" id="edit_section{{ $row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('data_update','test') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <input class="form-control" type="hidden" value="{{ $row->id }}" name="id">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">تعديل بيانات العميل </label>
                                <input class="form-control" type="file" name="excelfile">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                        <button type="submit" class="btn btn-primary">حفظ بيانات</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Create Sections -->
