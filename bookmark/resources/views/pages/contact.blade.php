@extends('layouts/main')
@section('title')
Contact
@endsection

@section('content')
<h1>Questions? Email us at:{{config('mail.contact_email')}}</h1>
@endsection