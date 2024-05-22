<div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <form class="form" id="add_edit_profile_education" method="POST" action="{{ route('store.front.profile.education', [$user->id]) }}">{{ csrf_field() }}
           
            <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('Add Education')}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
            @include('user.forms.education.education_form')
            <div class="modal-footer">
                <button type="button" class="btn btn-large btn-primary" onClick="submitProfileEducationForm();">{{__('Add Education')}} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
            </div>
        </form>
    </div>
    <!-- /.modal-content --> 
</div>
<!-- /.modal-dialog -->