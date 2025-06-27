
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>President Details</h1>
    <p><strong>DNI:</strong> {{ $president->dni }}</p>
    <p><strong>Name:</strong> {{ $president->name }} {{ $president->last_name }}</p>
    <p><strong>Birth date:</strong> {{ $president->birth_date }}</p>
    <p><strong>Election year:</strong> {{ $president->election_year }}</p>
    <a href="{{ route('presidents.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
