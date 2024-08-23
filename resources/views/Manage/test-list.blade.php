@extends('layouts.app')
@extends('layouts.custom-layouts')

@section('test-list')
    <div class="container">
        <div class="row">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#test-list-add-modal"
                        role="button">Add New Test</a>
                </div>
            </div><br>
        </div><br>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Test Name</th>
                        <th>Test Group</th>
                        <th>Test Section</th>
                        <th>Test Charge</th>
                        <th>Referrer Fee</th>
                    </tr>

                    @foreach ($test_list as $key=> $view_test_list)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$view_test_list->test_name}}</td>
                        <td>{{$view_test_list->test_group}}</td>
                        <td>{{$view_test_list->test_section}}</td>
                        <td>{{$view_test_list->test_charge}}</td>
                        <td>{{$view_test_list->referrer_fee}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
