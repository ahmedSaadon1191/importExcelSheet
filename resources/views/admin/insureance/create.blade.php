<!-- Strat Create Services -->
<div class="modal fade" id="Add_insure" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضف ضمان</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('insure.store')}}" method="post">
                    @csrf




                    <div class="row">

                        <div class="col-12">
                            <label for="">صاحب الضمان</label>
                            <input type="text" name="name" class="form-control" required placeholder="صاحب الضمان"
                                autocomplete="off">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12">
                            <label for="">رقم الضمان</label>
                            <input type="number" name="num" class="form-control" required placeholder="رقم الضمان"
                                autocomplete="off">
                            @error('num')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                        <button class="btn btn-primary">اضافه ضمان</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Create Services -->
