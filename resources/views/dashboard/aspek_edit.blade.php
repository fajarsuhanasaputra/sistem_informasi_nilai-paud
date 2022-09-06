@extends('layout.dashboard_template')
@section('dashboard-content')
<div class="card my-5">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Form Edit Aspek</h6>
        </div>
    </div>
    <div class="card-body px-4 pb-2">
        <form action="{{ url('dashboard/aspek/'.$aspek->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <h6>Tambah Data Aspek</h6>
                <div class="col-md-6">
                    <label class="form-label">Nama Aspek</label>
                    <div class="input-group input-group-outline my-3">
                        <input value="{{ $aspek->nama_aspek }}" name="nama_aspek" type="text" class="form-control"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kode Aspek</label>
                    <div class="input-group input-group-outline my-3">
                        <input value="{{ $aspek->kode }}" name="kode" type="text" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="{{ route('aspek') }}" type="reset" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection