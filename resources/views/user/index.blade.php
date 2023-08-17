@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Management User</h3>
                    <p class="text-subtitle text-muted">
                        Halaman ini untuk management akun konselor kabupaten.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard/management-user">Management User</a>
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
                    <h4 class="card-title">List akun user konselor kabupaten</h4>
                    <div class="action-container d-flex">
                        @can('admin')
                        <a href="/dashboard/management-user/create" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Buat
                            User</a>
                        @endcan

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NIK</th>
                                <th>No. HP</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->nik }}</td>
                                <td>{{ $user->nohp }}</td>
                                <td>{{ $user->alamat }}</td>
                                <td>
                                    <a href="/dashboard/management-user/{{ $user->id }}/edit"
                                        class="btn btn-primary btn-sm mb-1"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/management-user/{{ $user->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm mb-1"
                                            onclick="return confirm('apakah anda yakin?')"><i
                                                class="bi bi-trash-fill"></i></button>
                                    </form>

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