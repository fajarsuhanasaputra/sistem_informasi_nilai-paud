@extends('layout.dashboard_template')
@section('dashboard-content')

<div class="container-fluid px-2 px-md-4">
    <a href="{{ url('dashboard/nilai') }}" class="btn btn-outline-secondary">Kembali</a>
    <div class="page-header min-height-300 border-radius-xl mt-2"
        style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="../assets/img/bruce-mars.jpg" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        Richard Davis
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        CEO / Co-Founder
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-12 col-xl-3">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Biodata</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="javascript:;">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit Profile"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally
                                difficult paths, choose the one more painful in the short term (pain avoidance is
                                creating an illusion of equality).
                            </p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                        Name:</strong> &nbsp; Alec M. Thompson</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Location:</strong> &nbsp; USA</li>
                                <li class="list-group-item border-0 ps-0 pb-0">
                                    <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-instagram fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-9">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Rapor Nilai Siswa</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#tambah_data">
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Semester</th>
                                            <th scope="col">Tahun Ajaran</th>
                                            <th scope="col">Aspek</th>
                                            <th scope="col">Poin Penilaian</th>
                                            <th scope="col">Nilai</th>
                                            <th scope="col"></th>
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
                                            <td>
                                                <form action="{{url('dashboard/nilai/'.$item->user_id.'/'.$item->id)}}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-outline-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="mb-5 ps-3">
                        <h6 class="mb-1">Daftar Nilai</h6>
                        <p class="text-sm">Architects design houses</p>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambah_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah_data">Rapor Penilaian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('dashboard/nilai/'.request('user_id'))}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group input-group-static mb-4">
                                <label for="semester" class="ms-0">Semester</label>
                                <input min="1" type="number" name="semester" id="semester" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="awal_ajaran" class="ms-0">Awal Ajaran (tahun)</label>
                                <input min="1900" max="2099" step="1" type="number" name="awal_ajaran" id="awal_ajaran"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="akhir_ajaran" class="ms-0">Akhir Ajaran (tahun)</label>
                                <input min="1900" max="2099" step="1" type="number" name="akhir_ajaran"
                                    id="akhir_ajaran" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group input-group-static mb-4">
                                <label for="poin" class="ms-0">Poin Aspek Penilaian</label>
                                <select name="poin_id" class="form-control" id="poin" required>
                                    <option value="">Pilih poin aspek yang akan dinilai</option>
                                    @if(count($poins) > 0)
                                    @foreach($poins as $poin)
                                    <option value="{{$poin->id}}">
                                        ({{$poin->nama_aspek}}) {{$poin->nama_poin}}
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group input-group-static mb-4">
                                <label for="nilai" class="ms-0">Nilai</label>
                                <select name="nilai" class="form-control" id="nilai" required>
                                    <option value="">Pilih nilai</option>
                                    <option value="selalu">Selalu</option>
                                    <option value="kadang">Kadang-kadang</option>
                                    <option value="jarang">Jarang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection