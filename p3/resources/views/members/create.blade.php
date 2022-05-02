@extends('layouts/main')

@section('content')
<p><h2>Join Our Club</h2></p>


<form method='POST' action='/members'>
        <div class='details'>* Required fields</div>
        
        {{ csrf_field() }}

        <label for='firs_tname'>* First Name</label>
        <input type='text' name='first_name' id='first_name'>

        <label for='last_name'>* Last Name</label>
        <input type='text' name='last_name' id='last_name'>

        <label for='attendance_year'>* Year of Attendance(YYYY)</label>
        <input type='text' name='attendance_year' id='attendance_year'>

        <label for='email_address'>Email Address</label>
        <input type='text' name='email_address' id='email_address'>

        <label for='phone_number'>* Phone Number</label>
        <input type='text' name='phone_number' id='phone_number'>

        <label for='description'>Description</label>
        <textarea name='description'></textarea>

        <button type='submit' class='btn btn-primary'>Add a Member</button>

@if(count($errors) > 0)
        <div test='global-error-feedback' class='alert alert-danger'>
            Please correct the above errors.
        </div>
        @endif
</form>
@endsection 