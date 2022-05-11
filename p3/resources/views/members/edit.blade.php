@extends('layouts/main')

@section('title')
Edit User {{ $user->email }}
@endsection

@section('content')

<h1>Edit</h1>
<h2>{{ $user->first_name }}</h2>
<h2>{{ $user->last_name }} </h2>

<form method='POST' action='/members/{{ $user->email }}'>
    <div class='details'>* Required fields</div>
    {{ csrf_field() }}
    {{ method_field('put') }}

    <label for='first_name'>* First Name</label>
    <input type='text' name='first_name' id='first_name' test='first_name-input' value='{{ old('first_name', $user->first_name) }}'>
    <div class='details'>
        
    </div>
    @include('includes/error-field', ['fieldName' => 'first_name'])

    <label for='last_name'>* Last Name</label>
    <input type='text' name='last_name' id='last_name' test='last_name-input' value='{{ old('last_name', $user->last_name) }}'>
    @include('includes/error-field', ['fieldName' => 'last_name'])

    <label for='attendance_year'>* Year of Attendance</label>
    <input type='text' name='attendance_year' id='attendance_year' test='attendance_year-input' value='{{ old('attendance_year', $user->attendance_year) }}'>
    @include('includes.error-field', ['fieldName' => 'attendance_year'])

    <label for='email'>* Email</label>
    <input type='text' name='email' id='email' value='{{ old('email', $user->email) }}'>
    @include('includes/error-field', ['fieldName' => 'email'])

    <label for='phone_number'>* Phone Number </label>
    <input type='text' name='phone_number' id='phone_number' value='{{ old('phone_number', $user->phone_number) }}'>
    @include('includes/error-field', ['fieldName' => 'phone_number'])
    
    <label for='profile'>Profile</label>
    <textarea name='profile'>{{ old('profile', $user->profile) }}</textarea>
    @include('includes/error-field', ['fieldName' => 'description'])

    <label for='password'>Password (min: 8)</label>
    <input id='password' type='password' name='password'>
    @include('includes.error-field', ['fieldName' => 'password'])

    <label for='password-confirm'>Confirm Password</label>
    <input id='password-confirm' type='password' name='password_confirmation'>
    
    <button type='submit' test='update-user-button' class='btn btn-primary'>Update User</button>

    @if(count($errors) > 0)
        <div test='global-error-feedback' class='alert alert-danger'>
            Please correct the above errors.
        </div>
        @endif

</form>


@endsection