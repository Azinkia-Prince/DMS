@section('status-alert')
    {{-- Data Change Status Alert --}}


    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-center">
            {{ Session::get('success') }}
            <i data-bs-dismiss="alert" class="fa-solid fa-circle-xmark text-danger" style="cursor: pointer;"></i>
        </div>
    @elseif(Session::has('danger'))
        <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between align-items-center">
            {{ Session::get('danger') }}
            <i data-bs-dismiss="alert" class="fa-solid fa-circle-xmark text-danger" style="cursor: pointer;"></i>
        </div>
    @endif
@endsection

@section('modal-delete')
    <!-- Delete Modal -->
    <div class="modal fade" id="deleteConfirmation" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion
                    </h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                <div class="modal-body">
                    Do you really want to delete?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmButton">Yes,
                        Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- delete button script --}}

    <script>
        function setModalUrl(url) {
            document.getElementById("confirmButton").onclick = function() {
                window.location.href = url;
            };
        }
    </script>
@endsection

@section('test-list-add')
    <!-- Section Modal -->
    <div class="modal fade" id="test-list-add-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Test</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="/submit-doctor" method="POST" class="row g-3">

                    {{ csrf_field() }}
    
                    {{-- CSRF Field --}}
    
                    <div class="col-md-6">
                        <labelclass="form-label">Test Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Test Group</label>
                        <input type="text" class="form-control" name="number" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Test Section</label>
                        <input type="text" class="form-control" name="location" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Test Charge</label>
                        <input type="number" class="form-control" name="specialist" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Referrer Fee</label>
                        <input type="number" class="form-control" name="specialist" required>
                    </div>
    
    
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add New Test</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
