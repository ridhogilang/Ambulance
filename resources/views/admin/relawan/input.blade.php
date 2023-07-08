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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form Input</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Relawan Baru</a></li>
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
                        <h4 class="card-title">Form Relawan Baru</h4>
                    </div>
                    <form method="POST" action="/dashrelawan">
                        @csrf
                        <div class="card-body">
                            <div class="form-validation">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-lg-4 col-form-label">Nama Relawan
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" placeholder="Nama Relawan" value="{{ old('name')}}" >
                                                @error('name')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lokasi_id" class="col-lg-4 col-form-label">Lokasi
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="lokasi_id" id="lokasi_id" class="form-control">
                                                    <option>Pilih Lokasi</option>
                                                    <option value="1">Sleman</option>
                                                    <option value="2">Bantul</option>
                                                    <option value="3">Kulon Progo</option>
                                                    <option value="4">Gunung Kidul</option>
                                                    <option value="5">Kota Yogyakarta</option>
                                                </select>
                                            </div>
                                            {{-- <div class="col-lg-6">
                                                <input type="text" class="form-control  @error('lokasi_id')is-invalid @enderror" id="lokasi_id" name="lokasi_id" placeholder="Lokasi" value="{{ old('lokasi_id') }}">
                                                @error('lokasi_id')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div> --}}
                                        </div>
                                        <div class="form-group row">
                                            <label for="nomor" class="col-lg-4 col-form-label">Nomor
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control  @error('nomor')is-invalid @enderror" id="nomor" name="nomor" placeholder="No HP/WA" value="{{ old('nomor') }}">
                                                @error('nomor')
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
                                                <input type="text" class="form-control @error('alamat')is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                                                @error('alamat')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="link_alamat" class="col-lg-4 col-form-label">Link Alamat
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('link_alamat')is-invalid @enderror" id="link_alamat" name="link_alamat" placeholder="Link Alamat" value="{{ old('link_alamat') }}">
                                                @error('link_alamat')
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
                                                <select name="jenis_id" id="jenis_id" class="form-control">
                                                    <option>Pilih Jenis Mobil</option>
                                                    <option value="1">Ambulance</option>
                                                    <option value="2">Mobil Jenazah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="vertifikasi" class="col-lg-4 col-form-label">Vertifikasi
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="vertifikasi" id="vertifikasi" class="form-control">
                                                    <option>Status Verifikasi</option>
                                                    <option value="Terverifikasi">Sudah</option>
                                                    <option value="Belum Terverifikasi">Belum</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="via_vertifikasi" class="col-lg-4 col-form-label">Vertifikasi Via
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('via_vertifikasi')is-invalid @enderror" id="via_vertifikasi" name="via_vertifikasi" placeholder="Via Vertifikasi" value="{{ old('via_vertifikasi') }}">
                                                @error('via_vertifikasi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label for="plat_nomor" class="col-lg-4 col-form-label">Plat Nomor
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('plat_nomor')is-invalid @enderror" id="plat_nomor" name="plat_nomor" placeholder="Plat Nomor Mobil" value="{{ old('plat_nomor')}}">
                                                @error('plat_nomor')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kondisi_mobil" class="col-lg-4 col-form-label">Kondisi Mobil
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('kondisi_mobil')is-invalid @enderror" id="kondisi_mobil" name="kondisi_mobil" placeholder="Kondisi Mobil" value="{{ old('kondisi_mobil') }}">
                                                @error('kondisi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto_dalam" class="col-lg-4 col-form-label">Foto Dalam
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('foto_dalam')is-invalid @enderror" id="foto_dalam" name="foto_dalam" placeholder="Foto Dalam Mobil" value="{{ old('foto_dalam') }}">
                                                @error('foto_dalam')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto_luar" class="col-lg-4 col-form-label">Foto Luar
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control @error('foto_luar')is-invalid @enderror" id="foto_luar" name="foto_luar" placeholder="Foto Luar Mobil" value="{{ old('foto_luar') }}">
                                                @error('foto_luar')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="form-group row mt-5">
                                            <div class="col-lg-2 ml-auto">
                                                <a href="/dashrelawan" type="submit" class="btn btn-secondary">Kembali</a>
                                            </div>
                                            <div class="col-lg-5 mr-3">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Input</button>
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
    </div>
</div>
@endsection

@push('footer_dash')
<script src="{{ asset('java/admin/global.min.js') }}"></script>
<script src="{{ asset('java/admin/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('java/admin/custom.min.js') }}"></script>
<script src="{{ asset('java/admin/deznav-init.js') }}"></script>
@endpush