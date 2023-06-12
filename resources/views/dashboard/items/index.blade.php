@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Barang</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif


    <div class="table-responsive col-lg-8">
      <a href="/dashboard/items/create" class="btn btn-primary mb-3">Tambah data barang</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Kondisi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
            <tr>
              @if (request('page'))
                  @php
                      $page = request('page');
                      $curentpage=$page*10-10;
                  @endphp
                  <td>{{ $loop->iteration+$curentpage }}</td>
                  @else
                  <td>{{ $loop->iteration }}</td>
              @endif
              <td>{{ $item->nama  }}</td>
              <td>{{ $item->kondisi}}</td>
              <td>
                <a href="/dashboard/items/{{ $item->slug }}" class="badge text-bg-primary"><i class="bi bi-eye-fill"></i></a>
                <a href="/dashboard/items/{{ $item->slug }}/edit" class="badge text-bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/items/{{ $item->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i></button>
                   {{-- <a href="" class="badge text-bg-danger"></a> --}}
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
<div class="mb-3">
    {{ $items->links() }}
</div>
@endsection