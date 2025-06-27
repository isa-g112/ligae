
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Presidents</h1>
    <a href="{{ route('presidents.create') }}" class="btn btn-primary mb-3">Add President</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>DNI</th><th>Name</th><th>Last Name</th><th>Election Year</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($presidents as $president)
                <tr>
                    <td>{{ $president->dni }}</td>
                    <td>{{ $president->name }}</td>
                    <td>{{ $president->last_name }}</td>
                    <td>{{ $president->election_year }}</td>
                    <td>
                        <a href="{{ route('presidents.show', $president) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('presidents.edit', $president) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('presidents.destroy', $president) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $presidents->links() }}
</div>
@endsection
