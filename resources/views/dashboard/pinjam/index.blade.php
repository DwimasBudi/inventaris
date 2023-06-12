@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data barang dipinjam</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif


    <div class="table-responsive col-lg-8">
      <a href="/dashboard/items/create" class="btn btn-primary mb-3">Tambah pinjam barang</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Kondisi</th>
              <th scope="col">Tanggal Pinjam</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $pinjam)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pinjam->item->nama  }}</td>
            <td>{{ $pinjam->item->kondisi  }}</td>
            <td>{{ $pinjam->tanggal_pinjam  }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
<div class="d-flex justify-content-center mb-3">
</div>
@endsection