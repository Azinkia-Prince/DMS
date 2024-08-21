@extends('layouts.app')

@section('add-doctor')
    <div class="container">
        <div class="row">
            <card style="font-size: 20px" class="btn btn-secondary">Doctor Registration Form</card>

            <form action="/submit-doctor" method="POST" class="row g-3">

                {{ csrf_field() }}

                {{-- CSRF Field --}}

                <div class="col-md-6">
                    <labelclass="form-label">Doctor Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Number</label>
                    <input type="number" class="form-control" name="number" required>
                </div>
                <div class="col-6">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" required>
                </div>
                <div class="col-6">
                    <label class="form-label">Specialist</label>
                    <input type="text" class="form-control" name="specialist" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Section</label>
                    <select class="form-select" name="section" required>

                        @foreach ($sec_data as $view_sec_data)
                        <option>{{$view_sec_data->doc_sec_name}}</option>
                        @endforeach

                    </select>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-secondary">Register As Doctor</button>
                </div>
            </form>

        </div>
    </div>
@endsection


{{-- Doctor List Insert Done --}}
