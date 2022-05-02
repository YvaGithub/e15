@extends('layouts/main')
@section('title')
Contact
@endsection

@section('content')
<p><h3>Feel free to contact us for any inquiry</h3></p>
<h1>Questions? Email us at:{{config('mail.contact_email')}}</h1>
@endsection