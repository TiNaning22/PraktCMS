@extends('layouts.main')

@section('contents')


<div class="col-md-8">
    <form method="POST" action="/dashboard/product" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="Nama_Barang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control @error('Nama_Barang') is-invalid @enderror" id="Nama_Barang" name="Nama_Barang">
            @error('namabarang')
                {{ $message }}
            @enderror

        </div>
        <div class="mb-3">
          <label for="Kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control" id="Kategori" name="Kategori">
        </div>
        <div class="mb-3">
            <label for="Berat_Barang" class="form-label">Berat</label>
            <input type="text" class="form-control" id="Berat_Barang" name="Berat_Barang">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Upload Image</label>
          <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
          @error('image')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection