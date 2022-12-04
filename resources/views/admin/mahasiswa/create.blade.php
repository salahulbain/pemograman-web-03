@extends('layouts.app')
@section('title','Data Mahasiswa')

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Data Mahasiswa</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Tambah Data Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('mahasiswa.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="npm" class="form-label">NPM</label>
                                <input type="number" class="form-control" name="npm" id="npm"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">nik</label>
                                <input type="number" oninput="this.value=this.value.slice(0,this.maxLength)" min="3"
                                    maxlength="16" class="form-control @error('nik')
                                        is-invalid
                                    @enderror" name="nik" id="nik">

                                @error('nik')
                                <span>nik error</span>

                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Np Hp</label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tempat Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Comments</label>
                                <textarea class="form-control" placeholder="Alamat" id="alamat" name="alamat"
                                    style="height: 100px"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('mahasiswa.index') }}" type="button"
                                class="btn btn-outline-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection