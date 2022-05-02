@extends('layouts/main')
@section('title')
Contact
@endsection

@section('content')
<p>Feel free to contact us for any inquiry</p>
<h1>Questions? Email us at:{{config('mail.contact_email')}}</h1>
@endsection