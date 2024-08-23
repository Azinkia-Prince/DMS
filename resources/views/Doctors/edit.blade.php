@extends('layouts.app')
@section('edit-doctor')
<div class="container">
    <div class="row">
        <card style="font-size: 20px" class="btn btn-success">Update Doctor Details</card>

        <form action="/doctors/{{$to_be_edited->id}}/update" method="POST" class="row g-3">

            {{ csrf_field() }}

            {{-- CSRF Field --}}

            <div class="col-md-6">
                <label class="form-label">Doctor Name</label>
                <input type="text" class="form-control" name="name" value="{{$to_be_edited->name}}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Number</label>
                <input type="number" class="form-control" name="number" value="{{$to_be_edited->number}}" required>
            </div>
            <div class="col-6">
                <label class="form-label">Location</label>
                <input type="text" class="form-control" name="location" value="{{$to_be_edited->location}}" required>
            </div>
            <div class="col-6">
                <label class="form-label">Specialist</label>
                <input type="text" class="form-control" name="specialist" value="{{$to_be_edited->specialist}}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Section</label>
                <select class="form-select" name="section" required>
                    <option selected>{{$to_be_edited->section}}</option>
                    @foreach ($sec_data as $view_sec_data)
                    <option>{{$view_sec_data->doc_sec_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>

    </div>
</div>


    
@endsection