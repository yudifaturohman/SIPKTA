@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>My Profile</h3>
                    <p class="text-subtitle text-muted">
                        Silahkan lihat data diri anda atau ubah data diri anda
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard/myprofile/user">My profile</a>
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
                    <h4 class="card-title">Data Diri</h4>
                </div>
                <div class="card-body">
                    <form action="/dashboard/myprofile/user/{{ auth()->user()->id }}" class="form" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            @if (session('profile'))
                            {!! session('profile') !!}
                            @endif
                            <div class="col-lg-4 col-12">
                                @if (auth()->user()->image)
                                <img src="{{ asset('storage/'. auth()->user()->image) }}" alt=""
                                    class="img-preview img-fluid mb-2" style="border-radius: 30px;">
                                @else
                                <img src="/assets/static/images/faces/2.jpg"
                                    class="img-preview  img-fluid mb-2" style="border-radius: 30px">
                                @endif
                                <!-- File uploader with image preview -->
                                <input type="file" class="form-control mt-2" id="customFile" name="image"
                                    onchange="previewImage()">
                            </div>
                            <div class="col-lg-8 col-12  ">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" class="form-control @error('nama')
                                                is-invalid
                                            @enderror" placeholder="Nama" name="nama"
                                                value="{{ auth()->user()->nama }}" />
                                            @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control" placeholder="Email"
                                                value="{{ auth()->user()->email }}" disabled name="email" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="text" id="nik" class="form-control"
                                                placeholder="Nomor Induk Kependudukan" name="nik"
                                                value="{{ auth()->user()->nik }}" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nohp">No. Handphone</label>
                                            <input type="text" id="nohp" class="form-control @error('nohp')
                                                is-invalid
                                            @enderror" name="nohp" placeholder="No. Handphone"
                                                value="{{ auth()->user()->nohp }}" />
                                            @error('nohp')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control @error('alamat')
                                                is-invalid
                                            @enderror" id="alamat" rows="2"
                                                name="alamat">{{ auth()->user()->alamat }}</textarea>
                                            @error('alamat')
                                            <span class="text-danger">{{ $message }}</span>
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
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ubah Password</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9">
                            @if (session('message'))
                            {!! session('message') !!}
                            @endif
                            <form action="/dashboard/updatepassword/{{ auth()->user()->id }}" method="post"
                                class="form form-horizontal">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Password Lama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="first-name-horizontal" class="form-control 
                                                @error('current_password')
                                                    is-invalid
                                                @enderror" name="current_password"
                                                placeholder="Masukan password lama anda" name="current_password" />
                                            @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Password Baru</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="first-name-horizontal" class="form-control @error('password')
                                                is-invalid
                                            @enderror" name="password" placeholder="Masukan password baru anda" />
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Ketik Ulang Password Baru</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="first-name-horizontal" class="form-control"
                                                name="password_confirmation"
                                                placeholder="Ketikan ulang password baru anda" />
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
<script>
    function previewImage() {
    const imagePreview = document.querySelector('.img-preview');
    const image = document.querySelector('#customFile');
    const ofReader = new FileReader();
    

    imagePreview.classList.replace('d-none', 'd-block')
    
    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function (ofREvent) {
    imagePreview.src = ofREvent.target.result;
    }


    }
</script>
@endsection