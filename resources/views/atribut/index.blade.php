@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Daftar Atribut</h1>
    <hr />
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-3">
        <a href="{{ route('atributs.create') }}" class="btn btn-primary">Tambah Merchandise</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Status Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($atributs as $index => $atribut)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $atribut->nama_barang }}</td>
                    <td>{{ number_format($atribut->harga_barang, 2, ',', '.') }}</td>
                    <td>{{ $atribut->stok_barang }}</td>
                    <td>
                        <a href="{{ route('atributs.edit', $atribut->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('atributs.destroy', $atribut->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
