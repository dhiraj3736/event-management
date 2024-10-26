@extends('layouts.app')

@section('content')
    <div class="container my-1">
        <h1 class="mb-4">Events</h1>


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('events.create') }}" class="btn btn-primary">+ Create Event</a>
        </div>

        <div class="mt-4">
            <p>Number of events: {{ count($events) }}</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($events as $event)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5> <!-- Consider changing to h4 for prominence -->
                            <p class="card-text"><strong>Category:</strong> {{ $event->category->name }}</p>
                            <p class="card-text"><strong>About:</strong> {{ Str::limit($event->description, 100) }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $event->date }}</p>
                        </div>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



    </div>
@endsection
