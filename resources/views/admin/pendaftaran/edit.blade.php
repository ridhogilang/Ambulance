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
                        
                    <h4>{{ $post["nama"] }}</h4>
                    <p class="mb-0">Validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form Edit</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $post["nama"] }}</a></li>
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
                        <h4 class="card-title">Form Edit</h4>
                    </div>
                    <form method="POST" action="{{ route('pendaftaran.update', $post->nama) }}">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-validation">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label for="nama" class="col-lg-4 col-form-label">Nama Pendaftaran
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" name="nama" placeholder="Nama Pendaftar" value="{{ old('nama', $post->nama) }}" >
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama_organisasi" class="col-lg-4 col-form-label">Nama Organisasi
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control  @error('nama_organisasi')is-invalid @enderror" id="nama_organisasi" name="nama_organisasi" placeholder="Nama Organisasi" value="{{ old('nama_organisasi', $post->nama_organisasi) }}">
                                                @error('nama_organisasi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nohp" class="col-lg-4 col-form-label">Nomor
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control  @error('nohp')is-invalid @enderror" id="nohp" name="nohp" placeholder="No HP/WA" value="{{ old('nohp', $post->nohp) }}">
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
                                                <input type="text" class="form-control @error('jenis_id')is-invalid @enderror" id="jenis_id" name="jenis_id" placeholder="Jenis Mobil" value="{{ old('jenis_id', $post->jenis_id) }}">
                                                @error('jenis_id')
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
                                                <input type="text" class="form-control @error('alamat')is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat" value="{{ old('alamat', $post->alamat) }}">
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
                                                <input type="text" class="form-control @error('link_alamat')is-invalid @enderror" id="link_alamat" name="link_alamat" placeholder="Link Alamat" value="{{ old('link_alamat', $post->link_alamat) }}">
                                                @error('link_alamat')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label for="nama_sopir" class="col-lg-4 col-form-label">Nama Sopir
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('nama_sopir')is-invalid @enderror" id="nama_sopir" name="nama_sopir" placeholder="Nama Sopir" value="{{ old('nama_sopir', $post->nama_sopir) }}">
                                                @error('nama_sopir')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kondisi" class="col-lg-4 col-form-label">Kondisi Mobil
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('kondisi')is-invalid @enderror" id="kondisi" name="kondisi" placeholder="Kondisi Mobil" value="{{ old('kondisi', $post->kondisi) }}">
                                                @error('kondisi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image_in" class="col-lg-4 col-form-label">Foto Dalam
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('image_in')is-invalid @enderror" id="image_in" name="image_in" placeholder="Foto Dalam Mobil" value="{{ old('image_in', $post->image_in) }}">
                                                @error('image_in')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image_out" class="col-lg-4 col-form-label">Foto Luar
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control @error('image_out')is-invalid @enderror" id="image_out" name="image_out" placeholder="Foto Luar Mobil" value="{{ old('image_out', $post->image_out) }}">
                                                @error('image_out')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="form-group row mt-5">
                                            <div class="col-lg-2 ml-auto">
                                                <a href="/pendaftaran" type="submit" class="btn btn-secondary">Kembali</a>
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
    </div>
</div>
@endsection

@push('footer_dash')
<script src="{{ asset('java/admin/global.min.js') }}"></script>
<script src="{{ asset('java/admin/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('java/admin/custom.min.js') }}"></script>
<script src="{{ asset('java/admin/deznav-init.js') }}"></script>
@endpush