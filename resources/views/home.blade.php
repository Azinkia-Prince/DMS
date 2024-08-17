@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="row">
                        <div class="col-5">
                            <div class="box card">
                                <img src="{{'/assets/patient.png'}}" alt="">
                            </div>
                        </div>
                        <div class="col-7 box-text">
                            <h2 style="font-weight: bold">0</h2>
                            <p>Total Patients</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="row">
                        <div class="col-5">
                            <div class="box card">
                                <img src="{{'/assets/doctor.png'}}" alt="">
                            </div>
                        </div>
                        <div class="col-7 box-text">
                            <h2 style="font-weight: bold">0</h2>
                            <p>Total Doctors</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="row">
                        <div class="col-5">
                            <div class="box card">
                                <img src="{{'/assets/flask.png'}}" alt="">
                            </div>
                        </div>
                        <div class="col-7 box-text">
                            <h2 style="font-weight: bold">0</h2>
                            <p>Total Tests</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
