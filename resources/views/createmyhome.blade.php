@extends('layouts.main')
@section('contents')

<div class="col-md-8">
    <form method="POST" action="/home" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title_1" class="form-label">Title 1</label>
          <input type="text" class="form-control @error('title_1') is-invalid @enderror" id="title_1" name="title_1">
            @error('namabarang')
                {{ $message }}
            @enderror

        </div>
        <div class="mb-3">
          <label for="title_2" class="form-label">Title 2</label>
          <input type="text" class="form-control" id="title_2" name="title_2">
        </div>
        <div class="mb-3">
            <label for="title_3" class="form-label">Title 3</label>
            <input type="text" class="form-control" id="title_3" name="title_3">
        </div>
        <div class="mb-3">
            <label for="button_left" class="form-label">Button Left</label>
            <input type="text" class="form-control" id="button_left" name="button_left">
        </div>
        <div class="mb-3">
            <label for="button_right" class="form-label">Button Right</label>
            <input type="text" class="form-control" id="button_right" name="button_right">
        </div>
        <div class="mb-3">
            <label for="about_me_title" class="form-label">About Me Title</label>
            <input type="text" class="form-control" id="about_me_title" name="about_me_title">
        </div>
        <div class="mb-3">
            <label for="about_me_desc" class="form-label">About Me Description</label>
            <input type="text" class="form-control" id="about_me_desc" name="about_me_desc">
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