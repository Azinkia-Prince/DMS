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


                                    @yield('modal-delete')


                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
