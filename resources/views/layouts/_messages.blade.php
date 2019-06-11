@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>{{session('success')}}
        <button type="button" class="close" data-dismiss="alert" ariel-lable="Close">
            <span ariel-hidden="true">&times;</span>
        </button>
    </div>
@endif
