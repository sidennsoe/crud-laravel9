@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $siswa->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Induk Siswa</label>
                            <input type="text" class="form-control " name="nis" value="{{ $siswa->nis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control " name="nis" value="{{ $siswa->jenis_kelamin }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <input type="text" class="form-control " name="nis" value="{{ $siswa->agama }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" readonly>{{ $siswa->alamat }}</textarea>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection