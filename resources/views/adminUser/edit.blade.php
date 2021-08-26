@extends('layouts.admin')

@section('title', 'View')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h2>Edit users</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('adminupload') }}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with the input <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form action="/adminupdate/{{ $users->user_id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User name</strong>
                <input type="text" name="first_name" value="{{$users->first_name}}" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Email</strong>
                <input type="text" name="email" value="{{$users->email}}" class="form-control" placeholder="email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Organization</strong>
                <input type="text" name="organization" value="{{$users->organization}}" class="form-control" placeholder="organization">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Role</strong>
                <input type="text" name="roles" value="{{$users->role_id}}" class="form-control" placeholder="roles">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Student Number</strong>
                <input type="text" name="student_number" value="{{$users->student_number}}" class="form-control" placeholder="student_number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection
