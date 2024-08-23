@extends('layouts.app')
@extends('layouts.custom-layouts')

@section('doc-section')
    <div class="container">
        <div class="row">

            <div class="row justify-content-end">
                <div class="col-auto">
                    <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#sectionModal" role="button">Add New Section</a>
                </div>
            </div><br>

            <!-- Section Modal -->
            <div class="modal fade" id="sectionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add New Section</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form action="/doctors/sections/add" method="post">

                                {{ csrf_field() }}

                                <div class="col-md-6">
                                    <labelclass="form-label">Section Name</label>
                                    <input type="text" class="form-control" name="doc_sec_name" required>
                                </div><br>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Add Section</button>
                                </div>

                            </form>
                        </div>

                        
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <table class="table">
                    @yield('status-alert')
                    <tr>
                        <th>#</th>
                        <th>Doctor Section</th>
                        <th class="text-center">Action</th>
                    </tr>

                    @foreach ($sec_data as $key=>$view_sec_data)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$view_sec_data->doc_sec_name}}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="/doctors/sections/{{ $view_sec_data->id }}/edit" class="btn btn-warning">Update</a>

                                <a href="#" class="btn btn-danger" data-toggle="modal"
                                    data-target="#deleteConfirmation"
                                    onclick="setModalUrl('/doctors/sections/{{ $view_sec_data->id }}/delete')">Delete</a>


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
