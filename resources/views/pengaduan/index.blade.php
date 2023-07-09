@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pengaduan Kekerasan anak</h3>
                    <p class="text-subtitle text-muted">
                        Halaman ini untuk membuat laporan kekerasan terhadap anak.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard/pengaduan">Pengaduan</a>
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
            @if (session('message'))
            {!! session('message') !!}
            @endif
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">List pengaduan kekerasan anak</h4>
                    <div class="action-container d-flex">
                        @can('admin')
                        <a href="/dashboard/cetakpdf" class="btn btn-danger mx-2"><i class="bi bi-filetype-pdf"></i>
                            Cetak PDF</a>
                        @endcan
                        <a href="/dashboard/pengaduan/create" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Buat
                            Pengaduan</a>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Masalah</th>
                                <th>Pasal</th>
                                <th>Status</th>
                                <th>Lokasi kejadian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduans as $pengaduan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pengaduan->perkara_pelaporan }}</td>
                                <td>{{ $pengaduan->pasal_pelaporan }}</td>
                                <td>
                                    @if ($pengaduan->status === 'verified')
                                    <span class="badge bg-info">{{ $pengaduan->status }}</span>
                                    @elseif ($pengaduan->status === 'success')
                                    <span class="badge bg-success">{{ $pengaduan->status }}</span>
                                    @else
                                    <span class="badge bg-warning">{{ $pengaduan->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $pengaduan->waktu_kejadian }} : {{ $pengaduan->jam_kejadian }}</td>
                                <td>
                                    <a href="/dashboard/pengaduan/{{ $pengaduan->id }}"
                                        class="btn btn-warning btn-sm text-white mb-1"><i class="bi bi-eye"></i></a>
                                    <a href="/dashboard/pengaduan/{{ $pengaduan->id }}/edit"
                                        class="btn btn-primary btn-sm mb-1"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/pengaduan/{{ $pengaduan->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm mb-1"
                                            onclick="return confirm('apakah anda yakin?')"><i
                                                class="bi bi-trash-fill"></i></button>
                                    </form>
                                    @can('admin')
                                    @if ($pengaduan->status === 'verified' || $pengaduan->status === 'success')
                                    <a href="/dashboard/pengaduan/tanggapan/{{ $pengaduan->id }}"
                                        class="btn btn-success btn-sm text-white mb-1"><i
                                            class="bi bi-chat-right-text"></i></a>
                                    @endif

                                    <a href="/dashboard/pengaduan/{{ $pengaduan->id }}"
                                        class="btn btn-info btn-sm text-white mb-1"><i
                                            class="bi bi-check-circle-fill"></i></a>
                                    @endcan

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection