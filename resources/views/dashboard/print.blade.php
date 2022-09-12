<p style="font-weight: bold; font-size: 18px; text-align: center" class="text-center">PENILAIAN PERKEMBANGAN ANAK DIDIK
    <br>PAUD TERATAI
</p>
<div>
    <p style="font-size: 16px; font-weight: bold;"><span>Nama Anak : </span> {{$biodata->nama}}</p>
    <p style="font-size: 16px; font-weight: bold;"><span>NISN : </span> {{$biodata->nisn}}</p>
</div>
<table style="width: 100%; border: 1px solid #aaa; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 1px solid #aaa; padding: 10px;" scope="col">Semester</th>
            <th style="border: 1px solid #aaa; padding: 10px;" scope="col">Tahun Ajaran</th>
            <th style="border: 1px solid #aaa; padding: 10px;" scope="col">Aspek</th>
            <th style="border: 1px solid #aaa; padding: 10px;" scope="col">Poin Penilaian</th>
            <th style="border: 1px solid #aaa; padding: 10px;" scope="col">Nilai</th>
        </tr>
    </thead>
    <tbody>
        @if (count($nilai) > 0)
        @foreach ($nilai as $item)
        <tr>
            <td style="border: 1px solid #aaa; padding: 7px;">{{ $item->semester }}</td>
            <td style="border: 1px solid #aaa; padding: 7px;">{{ $item->awal_ajaran }}/{{ $item->akhir_ajaran }}</td>
            <td style="border: 1px solid #aaa; padding: 7px;">{{ $item->nama_aspek }}</td>
            <td style="border: 1px solid #aaa; padding: 7px;">{{ $item->nama_poin }}</td>
            <td style="border: 1px solid #aaa; padding: 7px;">
                {{ $item->nilai === 'mb' ? 'Mulai Berkembang' : ($item->nilai === 'bsh' ? 'Berkembang Sesuai Harapan' : ($item->nilai === 'bsb' ? 'Berkembang Sangat Baik' : '-')) }}
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>