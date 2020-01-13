@extends('layouts.master')
@section('title','Edit Employee')
@section('content')
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('customers.update')}}" method = "post">
        @csrf
        <div class="form-group">
          <label for="firstname">Firstname:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required value = "{{$customers->firstname}}">
        </div>
        <div class="form-group">
          <label for="lastname">Lastname:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "{{$customers->lastname}}">
        </div>
        <div class="form-group">
          <label for="department">Address:</label>
          <textarea name = "address" id = "addressid" class="form-control" required> {{ $customers->address }} </textarea>
        </div>
        <div class="form-group">
          <label for="phone">Email Id:</label>
          <input type="email" name = "emailname" id = "emailid" class="form-control" required value = "{{$customers->emailid}}">
        </div>
        <div class="form-group">
          <label for="phone">user Name:</label>
          <input type="text" name = "username" id = "usernameid" class="form-control" required value = "{{$customers->username}}">
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="text" name = "phone" id = "phone" class="form-control" required value = "{{$customers->phoneno}}">
        </div>
        <div class="form-group">
          <label for="firstname">Profile Image:</label>
          <input type="text" name = "profilename" id = "profileid" class="form-control" required>

        </div>
        <input type="hidden" name="id" value = "{{$customers->id}}">
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection