@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Daftar Atribut</h1>
    <hr />
    <form action="{{ route('atributs.update', $atribut->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3 gap-6">
            <div class="col">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ old('nama_barang', $atribut->nama_barang) }}" required>
            </div>
        </div>
        <div class="row mb-3 gap-4">
            <div class="col">
                <label for="harga_barang" class="form-label">Harga Barang</label>
                <input type="number" name="harga_barang" class="form-control" id="harga_barang" value="{{ old('harga_barang', $atribut->harga_barang) }}" step="0.01" required>
            </div>
            <div class="col">
                <label for="stok_barang" class="form-label">Status Stok</label>
                <select name="stok_barang" class="form-control" id="stok_barang" required>
                    <option value="tersedia" {{ old('stok_barang', $atribut->stok_barang) == 'tersedia' ? 'selected' : '' }}>Stok Tersedia</option>
                    <option value="habis" {{ old('stok_barang', $atribut->stok_barang) == 'habis' ? 'selected' : '' }}>Stok Habis</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
