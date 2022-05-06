@extends('layouts/main')

@section('title')
<p><h2><b>Join Our Club</b></h2></p>
<p><h3>You want to join our club, no problem!</h3></p>
@section('title')

@section('content')
<form method='POST' action='/members'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}

        <label for='firstname'>* First Name</label>
        <input type='text' name='first_name' id='first_name' value='old("first_name")'>

        <label for='last_name'>* Last Name</label>
        <input type='text' name='last_name' id='last_name' value='old("last_name")'>

        <label for='attendance_year'>* Year of Attendance(YYYY)</label>
        <input type='text' name='attendance_year' id='attendance_year'value='old("attendance_year")'>

        <label for='email'>Email Address</label>
        <input type='text' name='email' id='email' value='old("email")'>

        <label for='phone_number'>* Phone Number</label>
        <input type='text' name='phone_number' id='phone_number'value='old("phone_number")'>

        <label for='profile'>Profile</label>
        <textarea name='profile'>{{old('profile')}}</textarea>

        <button type='submit' class='btn btn-primary'>Add a Member</button>

@if(count($errors) > 0)
    <ul class='alert alert-danger'>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

</form>
@endsection 