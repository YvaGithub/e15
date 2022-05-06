@extends('layouts/main')

@section('head')
<link href='/css/members/delete.css' rel='stylesheet'>
@endsection

@section('title')
Confirm deletion: {{ $member->email }}
@endsection

@section('content')

<h1>Confirm deletion</h1>

<p>Are you sure you want to delete <strong>{{ $members->email }}</strong>?</p>

<form method='POST' action='/members/{{ $member->email }}'>
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <button type='submit' class='btn btn-danger btn-small' test='confirm-delete-button'>Yes, delete it!</button>
</form>

<p class='cancel'>
    <a href='/members/{{ $member->email }}'>No, I changed my mind.</a>
</p>

@endsection