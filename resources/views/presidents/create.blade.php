
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create President</h1>
    <form action="{{ route('presidents.store') }}" method="POST">
        @csrf
        @include('presidents.partials.form')
        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
