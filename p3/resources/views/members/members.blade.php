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
<td><h4>{{$member->first_name}}</h4></td>
<td><h4>{{$member->last_name}}</h4><td>
<td>{{$member->email}}</td>
<td>{{$member->attendance_year}}</td>
<td>{{$member->phone_number}}</td>
<td>{{substr($member->profile, 0, 50)}}</td>
<td><a href='/members/{{$member->email}}/edit'>Edit</a></td>
</tr>
@endforeach
</table>
@endsection