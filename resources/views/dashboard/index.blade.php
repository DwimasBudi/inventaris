@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }} </h1>
    </div>
    <div class="d-flex justify-content-start flex-wrap">
        <div class="card text-bg-success mb-3 mx-3 w-15" style="max-width: 18rem; min-width:15rem;">
        <div class="card-body">
            <h5 class="card-title">Barang</h5>
            <div class="d-flex justify-content-between align-items-center mt-3" style="width:100%">
                <h1><i class="bi bi-journal-album"></i></h1>
                <h2 class="">{{ $item }}</h2>
            </div>
        </div>
        </div>

        <div class="card text-bg-warning mb-3 mx-3 w-15" style="max-width: 18rem; min-width:15rem;">
        <div class="card-body">
            <h5 class="card-title">Barang di pinjam</h5>
            <div class="d-flex justify-content-between align-items-center mt-3" style="width:100%">
                <h1><i class="bi bi-tags"></i></h1>
                <h2 class="">{{ $pinjaman }}</h2>
            </div>
        </div>
        </div>

        <div class="card text-bg-light mb-3 mx-3 w-15" style="max-width: 18rem; min-width:15rem;">
        <div class="card-body">
            <h5 class="card-title">Anggota Inventaris</h5>
            <div class="d-flex justify-content-between align-items-center mt-3" style="width:100%">
                <h1><i class="bi bi-people-fill"></i></h1>
                <h2 class="">{{ $user }}</h3>
            </div>
        </div>
        </div>

    </div>
@endsection