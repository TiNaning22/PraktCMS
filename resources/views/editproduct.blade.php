@extends('layouts.main')

@section('contents')

<div class="col-md-8">
  <form method="POST" action="/dashboard/product/{{ $product->id }}">
      @method('PUT')
      @csrf
      <div class="mb-3">
          <label for="Nama_Barang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control @error('Nama_Barang') is-invalid @enderror" id="Nama_Barang" name="Nama_Barang" required autofocus value="{{ old('Nama_Barang', $product->Nama_Barang) }}">
          @error('Nama_Barang')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="Kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control @error('Kategori') is-invalid @enderror" id="Kategori" name="Kategori" required value="{{ old('Kategori', $product->Kategori) }}">
          @error('Kategori')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="Berat_Barang" class="form-label">Berat</label>
          <input type="text" class="form-control @error('Berat_Barang') is-invalid @enderror" id="Berat_Barang" name="Berat_Barang" required value="{{ old('Berat_Barang', $product->Berat_Barang) }}">
          @error('Berat_Barang')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection