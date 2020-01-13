@extends('layouts.master')
@section('title','Edit Employee')
@section('content')
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('customers.store')}}" method = "post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="firstname">Firstname:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="lastname">Lastname:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="department">Address:</label>
          <textarea name = "address" id = "addressid" class="form-control" required> </textarea>
        </div>
        <div class="form-group">
          <label for="phone">Email Id:</label>
          <input type="email" name = "emailname" id = "emailid" class="form-control" required >
        </div>
        <div class="form-group">
          <label for="phone">user Name:</label>
          <input type="text" name = "username" id = "usernameid" class="form-control" required >
        </div>
        <div class="form-group">
          <label for="phone">Passwrord:</label>
          <input type="passwords" name = "password" id = "usernameid" class="form-control" required >
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="text" name = "phone" id = "phone" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="firstname">Profile Image:</label>
          <input type="file" name = "profilename" id = "profileid" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection