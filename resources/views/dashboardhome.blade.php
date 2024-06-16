@extends('layouts.main')
@section('contents')
<H3>My Home</H3>
<div class="card shadow mb-4" style="margin: 10px;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data</h6>
    </div>
        <div class="card-body">
            
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title 1</th>
                        <th scope="col">Title 2</th>
                        <th scope="col">Title 3</th>
                        <th scope="col">Button Left</th>
                        <th scope="col">Button Right</th>
                        <th scope="col">About Me</th>
                        <th scope="col">About Me Desc</th>
                        <th scope="col">Images</th>
                        <th scope="col" style="width: 170px;">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($homes as $homes)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $homes->title_1 }}</td>
                        <td>{{ $homes->title_2 }}</td>
                        <td>{{ $homes->title_3 }}</td>
                        <td>{{ $homes->button_left }}</td>
                        <td>{{ $homes->button_right }}</td>
                        <td>{{ $homes->about_me_title }}</td>
                        <td>{{ $homes->about_me_desc }}</td>
                        <td><img src="{{ asset('storage/' .$homes->img) }}" alt="image" width="100" height="100"></td>
                        <td>

                            <a href="/home/{{ $homes->id }}/edit"class="badge bg-warning p-2 m-1"><i class="bi bi-pencil-square m-1"></i></a>
                            <form action="home/{{ $homes->id }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger border-0 p-2" onclick="return confirm('Apakah Benar Dihapus?')"><i class="bi bi-trash-fill m-1"></i></button>
                            </form>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>

           @if ($homes->count() === 0)
            <a href="/home/create"><button type="button" class="btn btn-primary">Tambah Produk</button></a>
            @endif
           
        </div>
        </div>
    </div>
@endsection