{{-- <!-- Deleted Sections -->
  <!-- Modal -->
  <div class="modal fade" id="delete_section" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('Sections.destroy','test')}}" method="post">
@method('DELETE')
@csrf

<p class="h4 text-danger">{{ trans('admin/sections.Title_Deleted') }}</p>
<input type="hidden" name="id" value="{{$section->id}}">

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('admin/sections.Close') }}</button>
    <button type="submit" class="btn btn-danger">{{ trans('admin/sections.Save') }}</button>
</div>

</form>

</div>
</div>
</div> --}}
