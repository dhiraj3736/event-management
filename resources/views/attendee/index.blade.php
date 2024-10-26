@extends('layouts.app')

@section('content')
    <div class="container my-1">
        <h1 class="mb-4">Attendees</h1>


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <a href="{{ route('attendees.create') }}" class="btn btn-primary mb-3">Add Attendee</a>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Event</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendees as $attendee)
                    <tr>
                        <td>{{ $attendee->name }}</td>
                        <td>{{ $attendee->email }}</td>
                        <td>{{ $attendee->event->title }}</td>
                        <td>
                            <a href="{{ route('attendees.edit', $attendee->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                            <form action="{{ route('attendees.destroy', $attendee->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this attendee?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
