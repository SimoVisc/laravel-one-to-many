@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>Create Project</h1>
            @include('partials.errors')

            <div class="mt-4">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="10">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="menager" class="form-label">Menager</label>
                        <input type="text" class="form-control" id="menager" name="menager"
                            value="{{ old('menager') }}">
                    </div>
                    <div class="mb-3">
                        <label for="cover_image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="cover_image" name="cover_image"
                            value="{{ old('cover_image') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
