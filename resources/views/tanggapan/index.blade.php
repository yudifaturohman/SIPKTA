@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tanggapan Pengaduan</h3>
                    <p class="text-subtitle text-muted">
                        Buatlah tanggapan pengaduan yang bijak
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard/pengaduan/tanggapan/{{ $pengaduan->id }}">Tanggapan Pengaduan</a>
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

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tanggapan Pengaduan</h4>
                </div>
                <div class="card-body">
                    <form action="/dashboard/pengaduan/tanggapan/{{ $pengaduan->id }}" class="form" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="tanggapan" class="mb-1">Tanggapan</label>
                                    <textarea class="form-control @error('tanggapan') is-invalid @enderror"
                                        id="tanggapan" rows="5" name="tanggapan">{{ old('tanggapan') }}</textarea>
                                    @error('tanggapan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
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


@endsection