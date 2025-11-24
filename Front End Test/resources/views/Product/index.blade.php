@extends('layouts.app')

@section('content')
<h3 class="mb-3">Daftar Produk</h3>


<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
    Tambah Produk
</button>

<table id="productTable" class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Kolom</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($columns as $col)
        <tr>
            <td>{{ $col[0] }}</td>
            <td>{{ $col[1] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="productForm">
                    <div class="mb-3">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" placeholder="Nama produk">
                    </div>
                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="number" class="form-control" placeholder="Harga produk">
                    </div>
                    <div class="mb-3">
                        <label>Stok</label>
                        <input type="number" class="form-control" placeholder="Stok produk">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success" id="btnSave">Simpan</button>
            </div>

        </div>
    </div>
</div>

@endsection


