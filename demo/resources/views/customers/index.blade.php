@extends('layouts.master')
@section('title','Customers details')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('customers.add')}}"  class = "btn btn-info">Add Customer</a>
            <table class="table">
                <tr>
                    <th>Profile</th>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Email Id</th>
                    <th>Username</th>
                    <th>Phone No.</th>
                    <th>Actions</th>    
                </tr>
                @foreach($customers as $cust)
                    <tr class="text-center">
                        <td><img src="{{ url('/images/'.$cust->profilephoto) }}"   class=" img-thumbnail"alt="image not found"></td>
                        <td>{{ $cust->id }}</td>
                        <td> {{ $cust->firstname }}</td>
                        <td>{{ $cust->lastname }}</td>
                        <td>{{ $cust->address }}</td>
                        <td>{{ $cust->emailid }}</td>
                        <td>{{ $cust->username }}</td>
                        <td>{{ $cust->phoneno }}</td>
                        <td><a href="{{ route('customers.edit',['id'=>$cust->id])}}" class="btn btn-info">Edit</a></td>
                        <td><a href="" class="btn btn-danger" class="delete" name="{{ $cust->id }}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection