@extends('layouts.main')

@section('contents')
<H3>Product</H3>
<div class="card shadow mb-4" style="margin: 10px;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
    </div>
        <div class="card-body">
            
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Berat</th>
                        <th scope="col" style="width: 170px;">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $products)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $products->Nama_Barang}}</td>
                        <td>{{ $products->Kategori}}</td>
                        <td>{{ $products->Berat_Barang}}</td>
                        <td>

                            <a href="/dashboard/product/{{ $products->id }}/edit"class="badge bg-warning p-2 m-1"><i class="bi bi-pencil-square m-1"></i></a>
                            <form action="/dashboard/product/{{ $products->id }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger border-0 p-2" onclick="return confirm('Apakah Benar Dihapus?')"><i class="bi bi-trash-fill m-1"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

           <a href="/dashboard/product/create"><button type="button" class="btn btn-primary">Tambah Produk</button></a> 

        </div>
        </div>
    </div>
@endsection