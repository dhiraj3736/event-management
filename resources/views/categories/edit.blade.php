@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Edit Category</h1>


        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Category Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}">


                @error('name')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
