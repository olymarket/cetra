    <div id="messageContentError"></div>
    <div id="messageContentSuccess"></div>

{{--
@if (Session::has('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="bi bi-question-circle"></i>
        &nbsp;{{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-question-circle"></i>
        &nbsp;{{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
--}}
