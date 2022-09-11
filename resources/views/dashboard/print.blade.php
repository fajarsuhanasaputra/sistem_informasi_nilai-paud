@extends('layout.source_dashboard')
@section('content')
<p style="font-weight: bold; font-size: 18px;" class="text-center">PENILAIAN PERKEMBANGAN ANAK DIDIK <br>PAUD TERATAI
</p>
<div class="row my-4">
    <div class="col-2">Nama Anak</div>
    <div class="col-1">:</div>
    <div class="col-3">{{$biodata->nama}}</div>
    <div class="col-2">NISN</div>
    <div class="col-1">:</div>
    <div class="col-3">{{$biodata->nisn}}</div>
</div>
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
        @if (count($nilai) > 0)
        @foreach ($nilai as $item)
        <tr>
            <td>{{ $item->semester }}</td>
            <td>{{ $item->awal_ajaran }}/{{ $item->akhir_ajaran }}</td>
            <td>{{ $item->nama_aspek }}</td>
            <td>{{ $item->nama_poin }}</td>
            <td>{{ $item->nilai === 'mb' ? 'Mulai Berkembang' : ($item->nilai === 'bsh' ? 'Berkembang Sesuai Harapan' : ($item->nilai === 'bsb' ? 'Berkembang Sangat Baik' : '-')) }}
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection