@extends('layouts/main')

@section('title')
All Members
@endsection

@section('head')
<link href='/css/alumni/index.css' rel='stylesheet'>
@endsection

@section('content')

<h1>All Members</h1>

@foreach($members as $member)
{{$member->first_name}}
{{$member->last_name}}
{{$member->email}}
{{$member->attendance_year}}
{{$member->phone_number}}
{{$member->profile}}
@endforeach
@endsection