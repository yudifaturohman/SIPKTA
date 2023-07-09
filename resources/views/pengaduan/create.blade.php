@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Buat Pengaduan</h3>
                    <p class="text-subtitle text-muted">
                        Buat laporan pengaduan disini
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard/pengaduan/create">Buat Pengaduan</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Pengaduan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Penduanduan</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="/dashboard/pengaduan" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-12">
                                <h5>Identitas Pelapor</h5>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nama_pelapor">Nama Lengkap</label>
                                    <input type="text" id="nama_pelapor" class="form-control @error('nama_pelapor')
                                        is-invalid
                                    @enderror" placeholder="Nama Lengkap" name="nama_pelapor"
                                        value="{{ old('nama_pelapor', auth()->user()->nama)}}" />
                                    @error('nama_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="ttl_pelapor">Tempat/Tanggal Lahir</label>
                                    <input type="text" id="ttl_pelapor" class="form-control @error('ttl_pelapor')
                                        is-invalid
                                    @enderror " placeholder="Tempat, tanggal lahir" name="ttl_pelapor"
                                        value="{{ old('ttl_pelapor') }}" />
                                    @error('ttl_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="usia_pelapor">Usia</label>
                                    <input type="text" id="usia_pelapor" class="form-control @error('usia_pelapor')
                                        is-invalid
                                    @enderror " placeholder="Usia" name="usia_pelapor"
                                        value="{{ old('usia_pelapor') }}" />
                                    @error('usia_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nik_pelapor">NIK</label>
                                    <input type="text" id="nik_pelapor" class="form-control @error('nik_pelapor')
                                        is-invalid
                                    @enderror " name="nik_pelapor" placeholder="Nomor Identitas Kependudukan"
                                        value="{{ old('nik_pelapor',auth()->user()->nik) }}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="jenis_kelamin_pelapor" @error('jenis_kelamin_pelapor')
                                        style="color: #D63042;" @enderror>Jenis Kelamin</label>
                                    @error('jenis_kelamin_pelapor')
                                    <p class="mt-1" style="color: #D63042; font-size: 14px;">{{ $message }}</p>
                                    @enderror
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault1"
                                            name="jenis_kelamin_pelapor" value="laki-laki"
                                            @checked(old('jenis_kelamin_pelapor')==='laki-laki' ) />
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault2"
                                            name="jenis_kelamin_pelapor" value="perempuan"
                                            @checked(old('jenis_kelamin_pelapor')==='perempuan' ) />
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="agama_pelapor">Agama</label>
                                    <input type="text" id="agama_pelapor" class="form-control @error('agama_pelapor')
                                        is-invalid
                                    @enderror " name="agama_pelapor" placeholder="Agama"
                                        value="{{ old('agama_pelapor') }}" />
                                    @error('agama_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="kewarganegaraan_pelapor">Kewarganegaraan</label>
                                    <input type="text" id="kewarganegaraan_pelapor" class="form-control @error('kewarganegaraan_pelapor')
                                        is-invalid
                                    @enderror" placeholder="Kewarganegaraan" name="kewarganegaraan_pelapor"
                                        value="{{ old('kewarganegaraan_pelapor') }}" />
                                    @error('kewarganegaraan_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="suku_pelapor">Suku</label>
                                    <input type="text" id="suku_pelapor" class="form-control @error('suku_pelapor')
                                        is-invalid
                                    @enderror" name="suku_pelapor" placeholder="Suku"
                                        value="{{ old('suku_pelapor') }}" />
                                    @error('suku_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="pekerjaan_pelapor">Pekerjaan</label>
                                    <input type="text" id="pekerjaan_pelapor" class="form-control @error('pekerjaan_pelapor')
                                        is-invalid
                                    @enderror" placeholder="Pekerjaan" name="pekerjaan_pelapor"
                                        value="{{old('pekerjaan_pelapor')}}" />
                                    @error('pekerjaan_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="pendidikan_pelapor">Pendidikan</label>
                                    <input type="text" id="pendidikan_pelapor" class="form-control @error('pendidikan_pelapor')
                                        is-invalid
                                    @enderror " name="pendidikan_pelapor" placeholder="Pendidikan"
                                        value="{{ old('pendidikan_pelapor') }}" />

                                    @error('pendidikan_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email_pelapor">Email</label>
                                    <input type="text" id="email_pelapor" class="form-control @error('email_pelapor')
                                        is-invalid
                                    @enderror" placeholder="Email" name="email_pelapor"
                                        value="{{ old('email_pelapor',auth()->user()->email) }}" />
                                    @error('email_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nohp_pelapor">No. Handphone/Telepon</label>
                                    <input type="text" id="nohp_pelapor" class="form-control @error('nohp_pelapor')
                                        is-invalid
                                    @enderror" name="nohp_pelapor" placeholder="No Handphone/Telepon"
                                        value="{{ old('nohp_pelapor',auth()->user()->nohp) }}" />
                                    @error('nohp_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class=" col-12">
                                <div class="form-group">
                                    <label for="hubungan_pelapor">Hubungan dengan korban</label>
                                    <input type="text" id="hubungan_pelapor" class="form-control @error('hubungan_pelapor')
                                        is-invalid
                                    @enderror " name="hubungan_pelapor" placeholder="Hubungan Pelapor"
                                        value="{{old('hubungan_pelapor')}}" />
                                    @error('hubungan_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="domisili_pelapor">Daerah</label>
                                    <select class="form-select" id="domisili_pelapor" name="domisili_pelapor">
                                        <option selected disabled> Pilih daerah</option>
                                        @if (old('domisili_pelapor') === 'kabupaten')
                                        <option value="kabupaten" selected>
                                            Kabupaten</option>
                                        @else
                                        <option value="kabupaten">
                                            Kabupaten</option>
                                        @endif
                                        @if (old('domisili_pelapor') === 'provinsi')
                                        <option value="provinsi" selected>
                                            Provinsi</option>
                                        @else
                                        <option value="provinsi">
                                            Provinsi</option>
                                        @endif
                                    </select>
                                    @error('domisili_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nama_domisili_pelapor">Nama Provinsi/Kabupaten</label>
                                    <input type="text" id="nama_domisili_pelapor" class="form-control @error('nama_domisili_pelapor')
                                        is-invalid
                                    @enderror" name="nama_domisili_pelapor" placeholder="Nama Provinsi/Kabupaten"
                                        value="{{ old('nama_domisili_pelapor') }}" />
                                    @error('nama_domisili_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-10 col-12">
                                <div class="form-group">
                                    <label for="alamat_pelapor">Alamat</label>
                                    <textarea class="form-control @error('alamat_pelapor')
                                        is-invalid
                                    @enderror" id="alamat_pelapor" rows="2"
                                        name="alamat_pelapor">{{ old('alamat_pelapor') }}</textarea>
                                    @error('alamat_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="kode_pos_pelapor">Kode Pos</label>
                                    <input type="text" id="kode_pos_pelapor" class="form-control @error('kode_pos_pelapor')
                                        is-invalid
                                    @enderror" name="kode_pos_pelapor" placeholder="Kode pos"
                                        value="{{ old('kode_pos_pelapor') }}" />
                                    @error('kode_pos_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 mt-3">
                            <div class="col-12 flex">
                                <hr>
                                <h5>Identitas Pelaku</h5>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nama_pelaku">Nama Lengkap</label>
                                    <input type="text" id="nama_pelaku" class="form-control @error('nama_pelaku')
                                                        is-invalid
                                                    @enderror" placeholder="Nama Lengkap" name="nama_pelaku"
                                        value="{{ old('nama_pelaku')}}" />
                                    @error('nama_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="ttl_pelaku">Tempat/Tanggal Lahir</label>
                                    <input type="text" id="ttl_pelaku" class="form-control @error('ttl_pelaku') is-invalid
                                    @enderror " placeholder="Tempat, tanggal lahir" name="ttl_pelaku"
                                        value="{{ old('ttl_pelaku') }}" />
                                    @error('ttl_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="usia_pelaku">Usia</label>
                                    <input type="text" id="usia_pelaku"
                                        class="form-control @error('usia_pelaku')  is-invalid @enderror "
                                        placeholder="Usia" name="usia_pelaku" value="{{ old('usia_pelaku') }}" />
                                    @error('usia_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nik_pelaku">NIK</label>
                                    <input type="text" id="nik_pelaku"
                                        class="form-control @error('nik_pelaku') is-invalid @enderror "
                                        name="nik_pelaku" placeholder="Nomor Identitas Kependudukan"
                                        value="{{ old('nik_pelaku') }}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="jenis_kelamin_pelaku" @error('jenis_kelamin_pelaku')
                                        style="color: #D63042;" @enderror>Jenis
                                        Kelamin</label>
                                    @error('jenis_kelamin_pelaku')
                                    <p class="mt-1" style="color: #D63042; font-size: 14px;">{{ $message }}</p>
                                    @enderror
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault3"
                                            name="jenis_kelamin_pelaku" value="laki-laki"
                                            @checked(old('jenis_kelamin_pelaku')==='laki-laki' ) />
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault4"
                                            name="jenis_kelamin_pelaku" value="perempuan"
                                            @checked(old('jenis_kelamin_pelaku')==='perempuan' ) />
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="agama_pelaku">Agama</label>
                                    <input type="text" id="agama_pelaku"
                                        class="form-control @error('agama_pelaku') is-invalid @enderror "
                                        name="agama_pelaku" placeholder="Agama" value="{{ old('agama_pelaku') }}" />
                                    @error('agama_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="kewarganegaraan_pelaku">Kewarganegaraan</label>
                                    <input type="text" id="kewarganegaraan_pelaku"
                                        class="form-control @error('kewarganegaraan_pelaku') is-invalid @enderror"
                                        placeholder="Kewarganegaraan" name="kewarganegaraan_pelaku"
                                        value="{{ old('kewarganegaraan_pelaku') }}" />
                                    @error('kewarganegaraan_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="suku_pelaku">Suku</label>
                                    <input type="text" id="suku_pelaku"
                                        class="form-control @error('suku_pelaku') is-invalid @enderror"
                                        name="suku_pelaku" placeholder="Suku" value="{{ old('suku_pelaku') }}" />
                                    @error('suku_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="pekerjaan_pelaku">Pekerjaan</label>
                                    <input type="text" id="pekerjaan_pelaku"
                                        class="form-control @error('pekerjaan_pelaku') is-invalid @enderror"
                                        placeholder="Pekerjaan" name="pekerjaan_pelaku"
                                        value="{{old('pekerjaan_pelaku')}}" />
                                    @error('pekerjaan_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="pendidikan_pelaku">Pendidikan</label>
                                    <input type="text" id="pendidikan_pelaku"
                                        class="form-control @error('pendidikan_pelaku') is-invalid @enderror "
                                        name="pendidikan_pelaku" placeholder="Pendidikan"
                                        value="{{ old('pendidikan_pelaku') }}" />

                                    @error('pendidikan_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email_pelaku">Email</label>
                                    <input type="text" id="email_pelaku"
                                        class="form-control @error('email_pelaku') is-invalid @enderror"
                                        placeholder="Email" name="email_pelaku" value="{{ old('email_pelaku') }}" />
                                    @error('email_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nohp_pelaku">No. Handphone/Telepon</label>
                                    <input type="text" id="nohp_pelaku"
                                        class="form-control @error('nohp_pelaku') is-invalid @enderror"
                                        name="nohp_pelaku" placeholder="No Handphone/Telepon"
                                        value="{{ old('nohp_pelaku') }}" />
                                    @error('nohp_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class=" col-12">
                                <div class="form-group">
                                    <label for="hubungan_pelaku">Hubungan dengan korban</label>
                                    <input type="text" id="hubungan_pelaku"
                                        class="form-control @error('hubungan_pelaku') is-invalid @enderror "
                                        name="hubungan_pelaku" placeholder="Hubungan Pelaku"
                                        value="{{old('hubungan_pelaku')}}" />
                                    @error('hubungan_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="domisili_pelaku">Daerah</label>
                                    <select class="form-select" id="domisili_pelaku" name="domisili_pelaku">
                                        <option selected disabled> Pilih daerah</option>
                                        @if (old('domisili_pelaku') === 'kabupaten')
                                        <option value="kabupaten" selected>
                                            Kabupaten</option>
                                        @else
                                        <option value="kabupaten">
                                            Kabupaten</option>
                                        @endif
                                        @if (old('domisili_pelaku') === 'provinsi')
                                        <option value="provinsi" selected>
                                            Provinsi</option>
                                        @else
                                        <option value="provinsi">
                                            Provinsi</option>
                                        @endif
                                    </select>
                                    @error('domisili_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nama_domisili_pelaku">Nama Provinsi/Kabupaten</label>
                                    <input type="text" id="nama_domisili_pelaku"
                                        class="form-control @error('nama_domisili_pelaku') is-invalid @enderror"
                                        name="nama_domisili_pelaku" placeholder="Nama Provinsi/Kabupaten"
                                        value="{{ old('nama_domisili_pelaku') }}" />
                                    @error('nama_domisili_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-10 col-12">
                                <div class="form-group">
                                    <label for="alamat_pelaku">Alamat</label>
                                    <textarea class="form-control @error('alamat_pelaku')
                                    is-invalid @enderror" id="alamat_pelaku" rows="2"
                                        name="alamat_pelaku">{{ old('alamat_pelaku') }}</textarea>
                                    @error('alamat_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="kode_pos_pelaku">Kode Pos</label>
                                    <input type="text" id="kode_pos_pelaku"
                                        class="form-control @error('kode_pos_pelaku') is-invalid @enderror"
                                        name="kode_pos_pelaku" placeholder="Kode pos"
                                        value="{{ old('kode_pos_pelaku') }}" />
                                    @error('kode_pos_pelaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2 mt-3">
                            <div class="col-12 ">
                                <hr>
                                <h5>Identitas Korban</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nama_korban">Nama Lengkap</label>
                                    <input type="text" id="nama_korban"
                                        class="form-control @error('nama_korban') is-invalid @enderror"
                                        placeholder="Nama Lengkap" name="nama_korban" value="{{ old('nama_korban')}}" />
                                    @error('nama_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="ttl_korban">Tempat/Tanggal Lahir</label>
                                    <input type="text" id="ttl_korban"
                                        class="form-control @error('ttl_korban') is-invalid @enderror "
                                        placeholder="Tempat, tanggal lahir" name="ttl_korban"
                                        value="{{ old('ttl_korban') }}" />
                                    @error('ttl_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="usia_korban">Usia</label>
                                    <input type="text" id="usia_korban"
                                        class="form-control @error('usia_korban')  is-invalid @enderror "
                                        placeholder="Usia" name="usia_korban" value="{{ old('usia_korban') }}" />
                                    @error('usia_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nik_korban">NIK</label>
                                    <input type="text" id="nik_korban"
                                        class="form-control @error('nik_korban') is-invalid @enderror "
                                        name="nik_korban" placeholder="Nomor Identitas Kependudukan"
                                        value="{{ old('nik_korban') }}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="jenis_kelamin_korban" @error('jenis_kelamin_korban')
                                        style="color: #D63042;" @enderror>Jenis
                                        Kelamin</label>
                                    @error('jenis_kelamin_korban')
                                    <p class="mt-1" style="color: #D63042; font-size: 14px;">{{ $message }}</p>
                                    @enderror
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault5"
                                            name="jenis_kelamin_korban" value="laki-laki"
                                            @checked(old('jenis_kelamin_korban')==='laki-laki' ) />
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault6"
                                            name="jenis_kelamin_korban" value="perempuan"
                                            @checked(old('jenis_kelamin_korban')==='perempuan' ) />
                                        <label class="form-check-label" for="flexRadioDefault6">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="agama_korban">Agama</label>
                                    <input type="text" id="agama_korban"
                                        class="form-control @error('agama_korban') is-invalid @enderror "
                                        name="agama_korban" placeholder="Agama" value="{{ old('agama_korban') }}" />
                                    @error('agama_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="kewarganegaraan_korban">Kewarganegaraan</label>
                                    <input type="text" id="kewarganegaraan_korban"
                                        class="form-control @error('kewarganegaraan_korban') is-invalid @enderror"
                                        placeholder="Kewarganegaraan" name="kewarganegaraan_korban"
                                        value="{{ old('kewarganegaraan_korban') }}" />
                                    @error('kewarganegaraan_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="suku_korban">Suku</label>
                                    <input type="text" id="suku_korban"
                                        class="form-control @error('suku_korban') is-invalid @enderror"
                                        name="suku_korban" placeholder="Suku" value="{{ old('suku_korban') }}" />
                                    @error('suku_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="pekerjaan_korban">Pekerjaan</label>
                                    <input type="text" id="pekerjaan_korban"
                                        class="form-control @error('pekerjaan_korban') is-invalid @enderror"
                                        placeholder="Pekerjaan" name="pekerjaan_korban"
                                        value="{{old('pekerjaan_korban')}}" />
                                    @error('pekerjaan_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="pendidikan_korban">Pendidikan</label>
                                    <input type="text" id="pendidikan_korban"
                                        class="form-control @error('pendidikan_korban') is-invalid @enderror "
                                        name="pendidikan_korban" placeholder="Pendidikan"
                                        value="{{ old('pendidikan_korban') }}" />

                                    @error('pendidikan_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="domisili_korban">Daerah</label>
                                    <select class="form-select" id="domisili_korban" name="domisili_korban">
                                        <option selected disabled> Pilih daerah</option>
                                        @if (old('domisili_korban') === 'kabupaten')
                                        <option value="kabupaten" selected>
                                            Kabupaten</option>
                                        @else
                                        <option value="kabupaten">
                                            Kabupaten</option>
                                        @endif
                                        @if (old('domisili_korban') === 'provinsi')
                                        <option value="provinsi" selected>
                                            Provinsi</option>
                                        @else
                                        <option value="provinsi">
                                            Provinsi</option>
                                        @endif
                                    </select>
                                    @error('domisili_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nama_domisili_korban">Nama Provinsi/Kabupaten</label>
                                    <input type="text" id="nama_domisili_korban"
                                        class="form-control @error('nama_domisili_korban') is-invalid @enderror"
                                        name="nama_domisili_korban" placeholder="Nama Provinsi/Kabupaten"
                                        value="{{ old('nama_domisili_korban') }}" />
                                    @error('nama_domisili_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-10 col-12">
                                <div class="form-group">
                                    <label for="alamat_korban">Alamat</label>
                                    <textarea class="form-control @error('alamat_korban')
                                    is-invalid @enderror" id="alamat_korban" rows="2"
                                        name="alamat_korban">{{ old('alamat_korban') }}</textarea>
                                    @error('alamat_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="kode_pos_korban">Kode Pos</label>
                                    <input type="text" id="kode_pos_korban"
                                        class="form-control @error('kode_pos_korban') is-invalid @enderror"
                                        name="kode_pos_korban" placeholder="Kode pos"
                                        value="{{ old('kode_pos_korban') }}" />
                                    @error('kode_pos_korban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 mt-3">
                            <div class="col-12 flex">
                                <hr>
                                <h5>Telah Melapor di kantor Komnas Perlindungan Anak (KPA) Provinsi Banten
                                </h5>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="perkara_pelaporan">Perkara yang dilaporkan</label>
                                    <input type="text" id="perkara_pelaporan" class="form-control @error('perkara_laporan')
                                        is-invalid
                                    @enderror" placeholder="Perkara yang dilaporkan" name="perkara_pelaporan"
                                        value="{{ old('perkara_pelaporan') }}" />
                                    @error('perkara_pelaporan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="pasal_pelaporan">Pasal yang dituduhkan</label>
                                    <input type="text" id="pasal_pelaporan" class="form-control @error('pasal_pelaporan')
                                        is-invalid
                                    @enderror" placeholder="Perkara yang dilaporkan" name="pasal_pelaporan"
                                        value="{{ old('pasal_pelaporan') }}" />
                                    @error('pasal_pelaporan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="waktu_kejadian">Waktu Kejadian</label>
                                    <input type="date" id="waktu_kejadian" class="form-control @error('waktu_kejadian')
                                        is-invalid
                                    @enderror" placeholder="Waktu kejadian" name="waktu_kejadian"
                                        value="{{ old('waktu_kejadian') }}" />
                                    @error('waktu_kejadian')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="jam_kejadian">Jam Kejadian</label>
                                    <input type="time" id="jam_kejadian" class="form-control @error('jam_kejadian')
                                        is-invalid
                                    @enderror" placeholder="Jam kejadian" name="jam_kejadian"
                                        value="{{ old('jam_kejadian') }}" />
                                    @error('jam_kejadian')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="tempat_kejadian">Tempat Kejadian</label>
                                    <input type="text" id="tempat_kejadian" class="form-control @error('tempat_kejadian')
                                        is-invalid
                                    @enderror" placeholder="Tempat kejadian" name="tempat_kejadian"
                                        value="{{ old('tempat_kejadian') }}" />
                                    @error('tempat_kejadian')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="saksi1">Saksi 1</label>
                                    <input type="text" id="saksi1" class="form-control @error('saksi1')
                                        is-invalid
                                    @enderror" placeholder="Saksi 1" name="saksi1" value="{{ old('saksi1') }}" />
                                    @error('saksi1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="saksi2">Saksi 2</label>
                                    <input type="text" id="saksi2" class="form-control @error('saksi2')
                                        is-invalid
                                    @enderror" placeholder="Saksi 2" name="saksi2" value="{{ old('saksi2') }}" />
                                    @error('saksi2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kronologi">Kronologi</label>
                                    <textarea class="form-control @error('kronologi')
                                        is-invalid
                                    @enderror" id="kronologi" rows="5"
                                        name="kronologi">{{ old('kronologi') }}</textarea>
                                    @error('kronologi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="bukti1">Bukti 1</label>
                                    <img class="img-preview1  img-fluid mb-2 mt-2 rounded">
                                    <!-- File uploader with image preview -->
                                    <input type="file" class="form-control mt-2 @error('bukti1')
                                        is-invalid
                                    @enderror" id="customFile1" name="bukti1" onchange="previewImage1()">
                                    @error('bukti1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="bukti2">Bukti 2</label>
                                    <img class="img-preview2  img-fluid mb-2 mt-2 rounded">
                                    <!-- File uploader with image preview -->
                                    <input type="file" class="form-control mt-2 @error('bukti2')
                                        is-invalid
                                    @enderror" id="customFile2" name="bukti2" onchange="previewImage2()">
                                    @error('bukti2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="bukti3">Bukti 2</label>
                                    <img class="img-preview3  img-fluid mb-2 mt-2 rounded ">
                                    <!-- File uploader with image preview -->
                                    <input type="file" class="form-control mt-2 @error('bukti3')
                                        is-invalid
                                    @enderror" id="customFile3" name="bukti3" onchange="previewImage3()">
                                    @error('bukti3')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>




                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>
</div>
<script>
    function previewImage1() {
    const imagePreview = document.querySelector('.img-preview1');
    const image = document.querySelector('#customFile1');
    const ofReader = new FileReader();
    
    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function (ofREvent) {
    imagePreview.src = ofREvent.target.result;
    }
    }
    function previewImage2() {
    const imagePreview = document.querySelector('.img-preview2');
    const image = document.querySelector('#customFile2');
    const ofReader = new FileReader();
    
    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function (ofREvent) {
    imagePreview.src = ofREvent.target.result;
    }
    }
    function previewImage3() {
    const imagePreview = document.querySelector('.img-preview3');
    const image = document.querySelector('#customFile3');
    const ofReader = new FileReader();
    
    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function (ofREvent) {
    imagePreview.src = ofREvent.target.result;
    }
    }
</script>
@endsection