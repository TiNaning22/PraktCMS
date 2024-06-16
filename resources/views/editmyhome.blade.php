@extends('layouts.main')
@section('contents')

<div class="col-md-8">
    <form method="POST" action="/home/{{ $homes->id }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title_1" class="form-label">Title 1</label>
            <input type="text" class="form-control @error('title_1') is-invalid @enderror" id="title_1" name="title_1" value="{{ old('title_1', $homes->title_1) }}">
            @error('title_1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title_2" class="form-label">Title 2</label>
            <input type="text" class="form-control @error('title_2') is-invalid @enderror" id="title_2" name="title_2" value="{{ old('title_2', $homes->title_2) }}">
            @error('title_2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title_3" class="form-label">Title 3</label>
            <input type="text" class="form-control @error('title_3') is-invalid @enderror" id="title_3" name="title_3" value="{{ old('title_3', $homes->title_3) }}">
            @error('title_3')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="button_left" class="form-label">Button Left</label>
            <input type="text" class="form-control @error('button_left') is-invalid @enderror" id="button_left" name="button_left" value="{{ old('button_left', $homes->button_left) }}">
            @error('button_left')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="button_right" class="form-label">Button Right</label>
            <input type="text" class="form-control @error('button_right') is-invalid @enderror" id="button_right" name="button_right" value="{{ old('button_right', $homes->button_right) }}">
            @error('button_right')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="about_me_title" class="form-label">About Me Title</label>
            <input type="text" class="form-control @error('about_me_title') is-invalid @enderror" id="about_me_title" name="about_me_title" value="{{ old('about_me_title', $homes->about_me_title) }}">
            @error('about_me_title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="about_me_desc" class="form-label">About Me Description</label>
            <input type="text" class="form-control @error('about_me_desc') is-invalid @enderror" id="about_me_desc" name="about_me_desc" value="{{ old('about_me_desc', $homes->about_me_desc) }}">
            @error('about_me_desc')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Upload Images</label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img">
            @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
