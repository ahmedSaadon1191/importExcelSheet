{{-- <!-- Edit Sections -->
  <!-- Modal -->
  <div class="modal fade" id="edit_section{{ $section->id }}" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ trans('admin/sections.edit_section') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('Sections.update','test' ) }}" method="post">
                @method('PATCH')
                @csrf

                <div class="row">
                    <div class="col-6">
                        <label for="">{{ trans('admin/sections.Name_Section_ar') }} :</label>
                        <input type="text" name="Name_Section_ar" class="form-control"
                            value="{{$section->getTranslation('Name_Sections','ar')}}">
                    </div>

                    <div class="col-6">
                        <label for="">{{ trans('admin/sections.Name_Section_en') }} :</label>
                        <input type="text" name="Name_Section_en" class="form-control"
                            value="{{$section->getTranslation('Name_Sections','en')}}">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-12">
                        <label for="">{{ trans('admin/sections.Notes_Sections') }} :</label>
                        <textarea name="Notes_Sections" id="" cols="30" rows="5" class="form-control">
               {{ $section->Notes_Sections}}
            </textarea>
                    </div>
                </div>

                <input type="hidden" name="id" value="{{$section->id}}">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-dismiss="modal">{{ trans('admin/sections.Close') }}</button>
            <button type="submit" class="btn btn-success">{{ trans('admin/sections.Save') }}</button>
        </div>
        </form>
    </div>
</div>
</div>

<!-- End Sections --> --}}
