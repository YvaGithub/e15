@extends('layouts/main')

@section('title')
All Members
@endsection

@section('head')
<link href='/css/alumni/index.css' rel='stylesheet'>
@endsection

@section('content')

<h1>All Members</h1>

<table>
@foreach($members as $member)
<tr>
<td>{{$member->first_name}}</td>
<td>{{$member->last_name}}<td>
<td>{{$member->email}}</td>
<td>{{$member->attendance_year}}</td>
<td>{{$member->phone_number}}</td>
<td>{{substr($member->profile, 0, 100)}}</td>
</tr>
@endforeach
</table>
@endsection