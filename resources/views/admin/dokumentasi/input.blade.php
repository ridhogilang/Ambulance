@extends('layouts.mainadmin')

@push('header_dash')
    <link href="{{ asset('css/admin/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
@endpush

@section('container')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                        
                    <h4></h4>
                    <p class="mb-0">Validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dokumentasi</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Input</a></li>
                </ol>
            </div>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-primary solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
            {{ session('success') }}
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
        </div>
        @endif
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Input</h4>
                    </div>
                    <form method="POST" action="/dokumentasi">
                        @csrf
                        <div class="card-body">
                            <div class="form-validation">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label for="nama" class="col-lg-4 col-form-label">Nama Pemohon
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" >
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image" class="col-lg-4 col-form-label">Nomor HP
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control  @error('image')is-invalid @enderror" id="image" name="image" placeholder="Foto KTP" value="{{ old('image') }}">
                                                @error('image')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nohp" class="col-lg-4 col-form-label">Nomor HP
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control  @error('nohp')is-invalid @enderror" id="nohp" name="nohp" placeholder="No HP/WA" value="{{ old('nohp') }}">
                                                @error('nohp')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_id" class="col-lg-4 col-form-label">Jenis Mobil
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('jenis_id')is-invalid @enderror" id="jenis_id" name="jenis_id" placeholder="Jenis Mobil" value="{{ old('jenis') }}">
                                                @error('jenis_id')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namapasien" class="col-lg-4 col-form-label">Nama Pasien
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('namapasien')is-invalid @enderror" id="namapasien" name="namapasien" placeholder="Nama Pasien" value="{{ old('namapasien') }}">
                                                @error('namapasien')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="almarhum" class="col-lg-4 col-form-label">Nama Almarhum
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('almarhum')is-invalid @enderror" id="almarhum" name="almarhum" placeholder="Nama Almarhum" value="{{ old('almarhum') }}">
                                                @error('almarhum')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-lg-4 col-form-label">Alamat
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control  @error('alamat')is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat tinggal/nama jalan" value="{{ old('alamat') }}">
                                                @error('alamat')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="rtrw" class="col-lg-4 col-form-label">RT/RW
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('rtrw')is-invalid @enderror" id="rtrw" name="rtrw" placeholder="RT/RW" value="{{ old('rtrw') }}">
                                                @error('rtrw')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kecamatan" class="col-lg-4 col-form-label">Kecamatan
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{{ old('kecamatan') }}">
                                                @error('kecamatan')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="desa" class="col-lg-4 col-form-label">Desa
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('desa')is-invalid @enderror" id="desa" name="desa" placeholder="Masukkan Nama Desa" value="{{ old('desa') }}">
                                                @error('desa')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="umur" class="col-lg-4 col-form-label">Umur
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('umur')is-invalid @enderror" id="umur" name="umur" placeholder="Umur" value="{{ old('umur') }}">
                                                @error('umur')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="infeksius" class="col-lg-4 col-form-label">Infeksius
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('infeksius')is-invalid @enderror" id="infeksius" name="infeksius" placeholder="Infeksi/Tidak" value="{{ old('infeksius') }}">
                                                @error('infeksius')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label for="penyakit" class="col-lg-4 col-form-label">Penyakit
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('penyakit')is-invalid @enderror" id="penyakit" name="penyakit" placeholder="Penyakit" value="{{ old('penyakit') }}">
                                                @error('penyakit')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kondisi" class="col-lg-4 col-form-label">Kondisi Pasien
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('kondisi')is-invalid @enderror" id="kondisi" name="kondisi" placeholder="Kondisi Pasien" value="{{ old('kondisi') }}">
                                                @error('kondisi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-lg-4 col-form-label">Status Pasien
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('status')is-invalid @enderror" id="status" name="status" placeholder="Status Pasien" value="{{ old('status') }}">
                                                @error('status')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="prokes" class="col-lg-4 col-form-label">Prokes Covid
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control @error('prokes')is-invalid @enderror" id="prokes" name="prokes" placeholder="Prokes/Tidak" value="{{ old('prokes') }}">
                                                @error('prokes')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="makam" class="col-lg-4 col-form-label">Lokasi Pemakaman
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('makam')is-invalid @enderror" id="makam" name="makam" placeholder="Nama dan alamat/daerah makam" value="{{ old('makam') }}">
                                                @error('makam')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label  for="lokasi" class="col-lg-4 col-form-label">Lokasi Penjemputan
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control  @error('lokasi')is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Lokasi Penjemputan" value="{{ old('lokasi') }}">
                                                @error('lokasi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tujuan" class="col-lg-4 col-form-label">Tujuan
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('tujuan')is-invalid @enderror" id="tujuan" name="tujuan" placeholder="Lokasi Tujuan" value="{{ old('tujuan') }}">
                                                @error('tujuan')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="antar" class="col-lg-4 col-form-label">Pulang Pergi
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('antar')is-invalid @enderror" id="antar" name="antar" placeholder="Dihantar pergi s/d pulang" value="{{ old('antar') }}">
                                                @error('antar')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tanggal" class="col-lg-4 col-form-label">Tanggal Penjemputan
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('tanggal')is-invalid @enderror" id="tanggal" name="tanggal" placeholder="Tanggal penjemputan" value="{{ old('tanggal') }}">
                                                @error('tanggal')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pukul" class="col-lg-4 col-form-label">Jam Penjemputan
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('pukul')is-invalid @enderror" id="pukul" name="pukul" placeholder="Jam" value="{{ old('pukul') }}">
                                                @error('pukul')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lain" class="col-lg-4 col-form-label">Tambahan Informasi
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea type="text" class="form-control @error('lain')is-invalid @enderror" id="lain" name="lain" placeholder="catatan tambahan" value="{{ old('lain') }}"></textarea>
                                                @error('lain')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <div class="col-lg-2 ml-auto">
                                                <a href="/dokumentasi" type="submit" class="btn btn-secondary">Kembali</a>
                                            </div>
                                            <div class="col-lg-5 mr-3">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
</div>
@endsection

@push('footer_dash')
<script src="{{ asset('java/admin/global.min.js') }}"></script>
<script src="{{ asset('java/admin/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('java/admin/custom.min.js') }}"></script>
<script src="{{ asset('java/admin/deznav-init.js') }}"></script>
@endpush