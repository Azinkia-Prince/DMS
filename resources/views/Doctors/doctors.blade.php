@extends('layouts.app')
@extends('layouts.custom-layouts')

@section('doctors-list')
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-auto">
                <a class="btn btn-outline-primary" href="/add-doctor" role="button">Add New Doctor</a>
            </div>
        </div><br>
        
        <div class="row">
            <div class="col">
                <table class="table">

                    @yield('status-alert')

                    <tr>
                        <th>#</th>
                        <th>Doctor Name</th>
                        <th>Location</th>
                        <th>Number</th>
                        <th>Specialist</th>
                        <th>Section</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($doctor_info as $key => $view_doctor_info)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $view_doctor_info->name }}</td>
                            <td>{{ $view_doctor_info->location }}</td>
                            <td>{{ $view_doctor_info->number }}</td>
                            <td>{{ $view_doctor_info->specialist }}</td>
                            <td>{{ $view_doctor_info->section }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="/doctors/{{ $view_doctor_info->id }}/edit" class="btn btn-warning">Update</a>

                                    <a href="#" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteConfirmation"
                                        onclick="setModalUrl('/doctors/{{ $view_doctor_info->id }}/delete')">Delete</a>


                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteConfirmation" data-backdrop="static" tabindex="-1"
                                        role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion
                                                    </h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    Do you really want to delete?
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
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


                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
