@extends('layouts.app')

@section('content')
    <div class="container my-1">
        <h1 class="mb-4">Edit Attendee</h1>

        <!-- Form for Editing Attendee -->
        <form action="{{ route('attendees.update', $attendee->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $attendee->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $attendee->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="event_id" class="form-label">Event:</label>
                <select name="event_id" id="event_id" class="form-select" required>
                    @foreach ($events as $event)
                        <option value="{{ $event->id }}" {{ $attendee->event_id == $event->id ? 'selected' : '' }}>
                            {{ $event->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
