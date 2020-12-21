@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span><Informasi Kartu Keluarga</span>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="" class="col-form-label">Nomor Kartu Keluarga</label>
                        </div>

                        <div class="col-md-3">
                            <label for="" class="col-form-label">{{ $keluarga->no }}</label>
                        </div>

                        <div class="col-md-3">
                            <label for="" class="col-form-label">Tanggal Pencatatan</label>
                        </div>

                        <div class="col-md-3">
                            <label for="" class="col-form-label">{{ $keluarga->tanggal_pencatatan }}</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="" class="col-form-label">Nagari</label>
                        </div>

                        <div class="col-md-3">
                            <label for="" class="col-form-label">{{ $keluarga->jorong->nagari->nama }}</label>
                        </div>

                        <div class="col-md-3">
                            <label for="" class="col-form-label">Jorong</label>
                        </div>

                        <div class="col-md-3">
                            <label for="" class="col-form-label">{{ $keluarga->jorong->nama }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Informasi Anggota Keluarga
                    <span class="float-right">
                        <a href="{{ route('penduduk.create') }}" class="btn btn-">
                            <i class="fas fa fa-plus-circle"></i>
                        <span>Tambah Anggota Keluarga</span> </a>

                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-md table-bordered table-stripped">
                        <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Status</th>
                            <th>Status Pernikahan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($penduduks as $penduduk)
                                <tr>
                                    <td>{{ $penduduk->nik }}</td>
                                    <td>{{ $penduduk->nama }}</td>
                                    <td>{{ $penduduk->tempat_lahir }}</td>
                                    <td>{{ $penduduk->tanggal_lahir }}</td>
                                    <td>{{ $penduduk->status_keluarga }}</td>
                                    <td>{{ $penduduk->status_pernikahan }}</td>
                                    <td>
                                        <a href="{{ route('keluarga.anggota.destroy',[$keluarga->id, $penduduk->id]) }}" class="btn btn-sm btn-danger">
                                            <i class="fas fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
