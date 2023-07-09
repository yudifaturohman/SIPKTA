@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Pengaduan</h3>
                    <p class="text-subtitle text-muted">
                        Lihat lebih detail pengaduan yang sudah anda buat
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard/pengaduan/{{ $pengaduan->id }}">Detail Pengaduan</a>
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
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title text-center">{{ $pengaduan->perkara_pelaporan }}</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Waktu kejadian</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->waktu_kejadian }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Jam kejadian</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->jam_kejadian }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Lokasi kejadian</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->tempat_kejadian }}</div>
                    </div>
                    @if ($pengaduan->status === 'verified')
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Status Laporan</div>
                        <div class="col-lg-9 col-12"><span class="badge bg-info">{{$pengaduan->status }}</span></div>
                    </div>
                    @elseif($pengaduan->status === 'success')
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Status Laporan</div>
                        <div class="col-lg-9 col-12"><span class="badge bg-success">{{$pengaduan->status }}</span></div>
                    </div>
                    @else
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Status Laporan</div>
                        <div class="col-lg-9 col-12"><span class="badge bg-warning">{{$pengaduan->status }}</span></div>
                    </div>
                    @endif
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Saksi 1</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->saksi1}}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Saksi 2</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->saksi2}}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Pasal yand dituduhkan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->pasal_pelaporan}}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold mb-1">Kronologi</div>
                        <div class="col-12" style="text-align: justify">{{$pengaduan->kronologi}}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 fw-semibold mb-1">Bukti</div>
                        <div class="col-lg-4 col-12" style="text-align: justify"><img
                                src="{{ asset('storage/'.$pengaduan->bukti1) }}" class="w-100 rounded mb-3" alt="">
                        </div>
                        <div class="col-lg-4 col-12" style="text-align: justify"><img
                                src="{{ asset('storage/'.$pengaduan->bukti2) }}" class="w-100 rounded mb-3" alt="">
                        </div>
                        <div class="col-lg-4 col-12" style="text-align: justify"><img
                                src="{{ asset('storage/'.$pengaduan->bukti3) }}" class="w-100 rounded mb-3" alt="">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold mb-1">Tanggapan</div>
                        <div class="col-12" style="text-align: justify">{{$pengaduan->tanggapan ?? "-" }}</div>
                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">Data Pelapor</h3>
                </div>
                <div class="card-body">

                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Nama</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nama_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Tempat, Tanggal Lahir</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->ttl_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Usia</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->usia_pelapor }}</div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Jenis kelamin</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->jenis_kelamin_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Email</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->email_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">No Handphone</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nohp_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">NIK</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nik_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Agama</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->agama_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Kewarganegaraan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->kewarganegaraan_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Suku</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->suku_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Pekerjaan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->pekerjaan_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Pendidikan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->pendidikan_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Provinsi/kabupaten</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nama_domisili_pelapor }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Alamat</div>
                        <div class="col-lg-9 col-12">{{ $pengaduan->alamat_pelapor }} {{ $pengaduan->kode_pos_pelapor ??
                            '' }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Hubungan pelapor</div>
                        <div class="col-lg-9 col-12">{{ $pengaduan->hubungan_pelapor }}</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">Data Pelaku</h3>
                </div>
                <div class="card-body">

                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Nama</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nama_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Tempat, Tanggal Lahir</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->ttl_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Usia</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->usia_pelaku }}</div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Jenis kelamin</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->jenis_kelamin_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Email</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->email_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">No Handphone</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nohp_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">NIK</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nik_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Agama</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->agama_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Kewarganegaraan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->kewarganegaraan_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Suku</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->suku_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Pekerjaan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->pekerjaan_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Pendidikan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->pendidikan_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Provinsi/kabupaten</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nama_domisili_pelaku }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Alamat</div>
                        <div class="col-lg-9 col-12">{{ $pengaduan->alamat_pelaku }} {{ $pengaduan->kode_pos_pelaku ??
                            '' }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Hubungan pelaku</div>
                        <div class="col-lg-9 col-12">{{ $pengaduan->hubungan_pelaku }}</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">Data Korban</h3>
                </div>
                <div class="card-body">

                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Nama</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nama_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Tempat, Tanggal Lahir</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->ttl_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Usia</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->usia_korban }}</div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Jenis kelamin</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->jenis_kelamin_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">NIK</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nik_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Agama</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->agama_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Kewarganegaraan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->kewarganegaraan_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Suku</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->suku_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Pekerjaan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->pekerjaan_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Pendidikan</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->pendidikan_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Provinsi/kabupaten</div>
                        <div class="col-lg-9 col-12">{{$pengaduan->nama_domisili_korban }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-lg-3 col-12 fw-semibold">Alamat</div>
                        <div class="col-lg-9 col-12">{{ $pengaduan->alamat_korban }} {{ $pengaduan->kode_pos_pelaku ??
                            '' }}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="/dashboard/pengaduan" class="btn btn-primary">
                        <i class="bi bi-arrow-bar-left"></i> Back </a>
                    @can('admin')
                    <form action="/dashboard/pengaduan/verifikasi/{{ $pengaduan->id }}" class="d-inline" method="post">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-info text-white" onclick="return confirm('apakah anda yakin ingin memverifikasi pengaduan?')"><i class="bi bi-check-circle-fill"></i>
                            Verifikasi</button>
                    </form>
                    @endcan
                </div>
            </div>

        </section>
    </div>
</div>
@endsection