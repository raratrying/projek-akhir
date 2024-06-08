@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Daftar Atribut</h1>
    <hr />
    <form action="{{ route('atributs.store') }}" method="POST">
        @csrf
        <div class="row mb-3 gap-6">
            <div class="col">
                <label for="nama_atribut" class="form-label">Nama Barang</label>
                <input type="text" name="nama_atribut" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3 gap-4">
            <div class="col">
                <label for="harga_atribut" class="form-label">Harga Barang</label>
                <input type="text" name="harga_atribut" class="form-control"  required>
            </div>
            <div class="col">
                <label for="informasi_stok" class="form-label">Harga Barang</label>
                <input type="text" name="informasi_stok" class="form-control"  required>
            </div>
                
                </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
