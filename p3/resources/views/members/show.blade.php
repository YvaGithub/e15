@extends('layouts/main')

@section('title')
{{ $member ? $member['email'] : 'Member not found' }}
@endsection

@section('head')
<link href='/css/members/show.css' rel='stylesheet'>
@endsection

@section('content')

@if(!$member)
Member not found. <a href='/members'>Look for someone you knew...</a>
@else

@if($member->member)
    <p>By {{ $member->member->first_name. ' ' . $member->member->last_name }}</p>
@endif

<h1>{{ $member->first_name }}</h1>

<p class='profile'>
    {{ $member->profile }}
</p>
<ul class='memberActions'>
    <li><a href='/members/{{ $member->email }}/edit' test='edit-button'><i class="fa fa-edit"></i> Edit</a>
    <li><a href='/memberss/{{ $member->email}}/delete' test='delete-button'><i class="fa fa-trash"></i> Delete</a>
</ul>
@endif
@endsection