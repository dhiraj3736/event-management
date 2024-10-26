@extends('layouts.app')

@section('content')
    <div class="container my-1">
        <h1 class="mb-4">Categories</h1>


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="mb-4">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Create Category</a>
        </div>


        <div class="list-group">
            @foreach ($categories as $category)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $category->name }}</span>
                    <div>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
