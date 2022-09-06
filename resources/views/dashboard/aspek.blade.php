@extends('layout.dashboard_template')
@section('dashboard-content')

<div class="card my-5">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Aspek</h6>
        </div>
    </div>
    <div class="card-body px-2 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder">Kode Aspek
                        </th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Nama Aspek
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($aspeks) > 0)
                    @foreach($aspeks as $aspek)
                    <tr>
                        <td class="px-4">
                            <span class="text-xs font-weight-bold">{{ $aspek->kode }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $aspek->nama_aspek }}</span>
                        </td>
                        <td class="align-middle d-flex">
                            @if(Auth::user()->role === 'admin' || Auth::user()->role === 'guru')
                            <a href="" class="btn btn-link text-secondary mb-0">
                                Edit
                            </a>
                            <form action="{{ url('dashboard/aspek/'.$aspek->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-primary mb-0">
                                    Hapus
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @else
                    @endif
                </tbody>
            </table>
            {{ $aspeks->links() }}
        </div>
    </div>
</div>

@if(Auth::user()->role === 'admin' || Auth::user()->role === 'guru')
<div class="card my-5">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Form Tambah Aspek</h6>
        </div>
    </div>
    <div class="card-body px-4 pb-2">
        <form action="{{ route('aspek.add') }}" method="POST">
            @csrf
            <div class="row">
                <h6>Tambah Data Aspek</h6>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nama Aspek</label>
                        <input name="nama_aspek" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Kode Aspek</label>
                        <input name="kode" type="text" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif

@endsection