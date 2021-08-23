@extends('layouts.Admin')

@section('title', 'Account Functions')

@section('content')

<div class="pull-left">
    <h2>Crud</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admincreate') }}">Create new User</a>
                <a class="btn btn-primary" href="{{ url('admin/functions') }}">BACK</a>
            </div>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container-fluid">
    <table class="table table-bordered">
    <tr>
        <th>User Id</th>
        <th>Course Id</th>
        <th>Role Id</th>
        <th>Position Id</th>
        <th>User Email</th>
        <th>User Student Number</th>
        <th>User First Name</th>
        <th>User Middle Name</th>
        <th>User Last Name</th>
        <th>User Gender</th>
        <th>User Date of Birth</th>
        <th>User Mobile Number</th>
        <th>User Address</th>
        <th>User Email Verified Date</th>
        <th>User Account Creation Date</th>
        <th>User Account Latest Updat</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($userslist as $users)
        <tr>
            <td>{{ $users->user_id }}</td>
            <td>{{ $users->course_id }}</td>
            <td>{{ $users->role_id }}</td>
            <td>{{ $users->position_id }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->student_number }}</td>
            <td>{{ $users->first_name }}</td>
            <td>{{ $users->middle_name }}</td>
            <td>{{ $users->last_name }}</td>
            <td>{{ $users->gender }}</td>
            <td>{{ $users->date_of_birth }}</td>
            <td>{{ $users->mobile_number }}</td>
            <td>{{ $users->address }}</td>
            <td>{{ $users->email_verified_at }}</td>
            <td>{{ $users->created_at }}</td>
            <td>{{ $users->updated_at }}</td>
            <td>
                       <a href="{{ route('adminview', $users->user_id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>
                    <a href="{{ route('adminedit', $users->user_id) }}" title="edit">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                <form action="{{ route('admindestroy',$users->user_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" title="delete">
                        <!-- <i class="fas fa-trash fa-lg"></i> -->
                        <i class="fas fa-trash fa-lg"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach 
</table>

</div>
@endsection
