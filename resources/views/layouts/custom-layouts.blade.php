
@section('status-alert')
    {{-- Data Change Status Alert --}}


    @if (Session::has('success'))
    <div
        class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-center">
        {{ Session::get('success') }}
        <i data-bs-dismiss="alert" class="fa-solid fa-circle-xmark text-danger"
            style="cursor: pointer;"></i>
    </div>
@elseif(Session::has('danger'))
    <div
        class="alert alert-danger alert-dismissible fade show d-flex justify-content-between align-items-center">
        {{ Session::get('danger') }}
        <i data-bs-dismiss="alert" class="fa-solid fa-circle-xmark text-danger"
            style="cursor: pointer;"></i>
    </div>
@endif
@endsection