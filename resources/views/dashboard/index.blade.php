@extends('layout.dashboard_template')
@section('dashboard-content')

@if(Auth::user()->role !== 'siswa')
<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Dashboard</h6>
        </div>
    </div>
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">

        </div>
    </div>
</div>
@endif

@if(Auth::user()->role === 'siswa')
<div class="card my-5">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Rapor Nilai Mahasiswa</h6>
        </div>
    </div>
    <div class="card-body px-4 pb-2">
        <div class="table-responsive p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Semester</th>
                            <th scope="col">Tahun Ajaran</th>
                            <th scope="col">Aspek</th>
                            <th scope="col">Poin Penilaian</th>
                            <th scope="col">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($nilai) > 0)
                        @foreach($nilai as $item)
                        <tr>
                            <td>{{$item->semester}}</td>
                            <td>{{$item->awal_ajaran}}/{{$item->akhir_ajaran}}</td>
                            <td>{{$item->nama_aspek}}</td>
                            <td>{{$item->nama_poin}}</td>
                            <td>{{$item->nilai}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif

@endsection