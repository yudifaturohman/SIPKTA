@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dashboard</h3>
                    <p class="text-subtitle text-muted">
                        Informasi global data pengaduan
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div
                                        class="stats-icon purple mb-2 d-flex justify-content-center align-items-center">
                                        <div class="icon-box">
                                            <i class="bi bi-headset"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">
                                        Total Pengaduan
                                    </h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalPengaduan->count() ?? '0' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon blue mb-2 d-flex justify-content-center align-items-center">
                                        <div class="icon-box">
                                            <i class="bi bi-stack"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Belum Ditanggapi</h6>
                                    <h6 class="font-extrabold mb-0">{{ $belumDitanggapi->count() ?? '0' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon green mb-2 d-flex justify-content-center align-items-center">
                                        <div class="icon-box">
                                            <i class="bi bi-list-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pengaduan Selesai</h6>
                                    <h6 class="font-extrabold mb-0">{{ $sudahDitanggapi->count() ?? '0' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon red mb-2 d-flex justify-content-center align-items-center">
                                        <div class="icon-box">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pengguna</h6>
                                    <h6 class="font-extrabold mb-0">{{ $users->count() ?? '0' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chart Data Pengaduan</h4>
                </div>
                <div class="card-body">
                    <canvas id="akuChart"></canvas>
                </div>
            </div>

        </section>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <script src="/js/myscript.js"></script> --}}
<script>
    const cty = document.getElementById("akuChart");
    const labels = {{ $tahun }};
    const data = {
        labels: labels,
        datasets: [{
        label: 'Data Pengaduan',
        data: {{ $dataPengaduan }},
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
        }]
    };
    new Chart(cty, {
      type: "line",
      data: data,
    });
   
</script>

@endsection