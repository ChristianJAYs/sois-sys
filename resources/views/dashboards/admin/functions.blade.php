@extends('layouts.admin')

@section('title', 'Account Functions')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello, {{Auth::user()->name}} on your  {{Auth::user()->role_id}} {{ __('Functions') }}</div>

                <div class="card-body">
                    You Sudent Number: {{Auth::user()->student_number}}
                    <br>
                    <hr>
                    Your role: {{Auth::user()->role_id}} — hence you can:
                    <br>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <p><strong>Update User: </strong></p> 
                            <button class="btn btn-warning">
                                <a href="{{ url('adminupload') }}">Update</a>
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <p><strong>Create User: </strong></p> 
                            <button class="btn btn-warning">
                                <a href="{{ url('admincreate') }}">Create</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
