@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit President</h1>
    <form action="{{ route('presidents.update', $president) }}" method="POST">
        @csrf @method('PUT')
        @include('presidents.partials.form')
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
