<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('edit-doctor')
    <!--Update Modal -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Doctor Data
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body">

                {{-- Update doctor --}}

                <form action="/doctors/update" method="POST" class="row g-3">

                    {{-- Error --}}

                    {{-- {{$to_be_edited->$id}} --}}

                    {{-- CSRF Field --}}

                    {{ csrf_field() }}

                    <div class="col-md-6">
                        <labelclass="form-label">Doctor Name</label>
                        <input type="text" class="form-control" name="name"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Number</label>
                        <input type="number" class="form-control" name="number"
                            required>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="location"
                            required>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Specialist</label>
                        <input type="text" class="form-control" name="specialist"
                            required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Section</label>
                        <select class="form-select" name="section" required>
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-secondary">Update</button>
                    </div>

                </form>
                
            </div>

            
        </div>
    </div>
</div>
@endsection
</body>
</html>