@extends('layouts.backend')
@section('content')
<h2>Create User</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('backend.users._form_create')
@endsection