@extends('layouts.app')
@extends('layouts.custom-layouts')

@section('test-list')
    <div class="container">
        <div class="row">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#test-list-add-modal" role="button">Add New Test</a>
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
                </table>
            </div>
        </div>
    </div>
@endsection