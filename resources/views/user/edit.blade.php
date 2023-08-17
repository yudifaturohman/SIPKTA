@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit User </h3>
                    <p class="text-subtitle text-muted">
                        Edit user disini
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard/management-user/create">Buat User</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Management User
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form User</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="/dashboard/management-user/{{ $user->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" id="nama" class="form-control @error('nama')
                                        is-invalid
                                    @enderror" placeholder="Nama Lengkap" name="nama"
                                        value="{{ old('nama', $user->nama)}}" />
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control @error('email')
                                        is-invalid
                                    @enderror " placeholder="Email" name="email"
                                        value="{{ old('email', $user->email) }}" />
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" id="nik" class="form-control @error('nik')
                                        is-invalid
                                    @enderror " placeholder="NIK" name="nik"
                                        value="{{ old('nik', $user->nik) }}" />
                                    @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nohp">No Handphone</label>
                                    <input type="text" id="nohp" class="form-control @error('nohp')
                                        is-invalid
                                    @enderror " name="nohp" placeholder="Nomor Handphone"
                                        value="{{ old('nohp', $user->nohp) }}" />
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control @error('alamat')
                                        is-invalid
                                    @enderror" id="alamat" rows="2"
                                        name="alamat">{{ old('alamat', $user->alamat) }}</textarea>
                                    @error('alamat')
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