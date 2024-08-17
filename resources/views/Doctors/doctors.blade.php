@extends('layouts.app')
@extends('doctors.edit')

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
                                    <a href="/doctors/{{$view_doctor_info->id}}/edit" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop1">Update</a>
                                    <button class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop2">Delete</button>

                                    @yield('edit-doctor')
                                    


                                    <!-- Delete Modal -->

                                    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Warning !</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 style="color: red">Do you want to delete?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <a href="/doctors/{{ $view_doctor_info->id }}/delete" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
