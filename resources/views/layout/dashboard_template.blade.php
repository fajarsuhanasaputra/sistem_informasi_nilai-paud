@extends('layout.source_dashboard')
@section('content')
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="{{ asset('templates/dashboard/assets/img/logo-ct.png') }}" class="navbar-brand-img h-100"
                alt="main_logo" />
            <span class="ms-1 font-weight-bold text-white">PAUD Teratai</span>
        </a>
    </div>

    <hr class="horizontal light mt-0 mb-2" />

    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() === 'dashboard' ? 'active bg-gradient-primary' : '' }}"
                    href="/dashboard">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>

                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            @if(Auth::user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() === 'users' ? 'active bg-gradient-primary' : '' }}"
                    href="/dashboard/users">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">account_circle</i>
                    </div>

                    <span class="nav-link-text ms-1">Data Akun</span>
                </a>
            </li>
            @endif
            @if(Auth::user()->role === 'guru')
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() === 'aspek' ? 'active bg-gradient-primary' : '' }}"
                    href="/dashboard/aspek">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">post_add</i>
                    </div>

                    <span class="nav-link-text ms-1">Aspek</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() === 'poin_penilaian' ? 'active bg-gradient-primary' : '' }}"
                    href="/dashboard/poin-penilaian">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">checklist</i>
                    </div>

                    <span class="nav-link-text ms-1">Poin Penilaian</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() === 'nilai' ? 'active bg-gradient-primary' : '' }}"
                    href="/dashboard/nilai">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">text_snippet</i>
                    </div>

                    <span class="nav-link-text ms-1">Penilaian Siswa</span>
                </a>
            </li>
            @endif

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Akun
                </h6>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="./profile.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>

                    <span class="nav-link-text ms-1">Profil</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<main class="main-content border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">
                            {{ Route::currentRouteName() !== 'dashboard' ? 'Dashboard' : '' }}
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                        {{ Route::currentRouteName() }}
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">{{ strtoupper(Route::currentRouteName()) }}</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control" />
                    </div>
                </div>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item d-flex align-items-center mt-3">
                        <form action="{{ route('logout.action') }}" method="POST">
                            @csrf
                            <button class="btn btn-warning" type="submit"
                                class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-light fa-right-from-bracket"></i>
                                <span class="d-sm-inline d-none">Keluar</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                @yield('dashboard-content')
            </div>
        </div>
    </div>
</main>
@endsection