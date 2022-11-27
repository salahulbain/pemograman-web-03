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
                    <a href="#" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data Mahasiswa</a>
                    <a href="#" class="btn btn-success"><i class="bi bi-filetype-csv"></i> Tambah Data Mahasiswa</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-stripet">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1234556</td>
                                    <td>Nama</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info">view</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection