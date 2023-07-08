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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form View</a></li>
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
                        <h4 class="card-title">Form View</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nama Pendaftar
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["nama"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nama Organisasi
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["nama_organisasi"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nomor Telepon
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post['nohp'] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Jenis Mobil
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post->jenis->jenis_mobil }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Alamat
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["alamat"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Link Alamat
                                        </label>
                                        <div class="col-lg-6">
                                            <a href="{{ $post["link_alamat"] }}" target="_blank">
                                                <span class="form-control">{{ $post["link_alamat"] }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nama Sopir
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["nama_sopir"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kondisi
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["kondisi"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Status Pasien
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["status"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Foto Mobil Dalam
                                        </label>
                                        
                                        <a href="/{{ $post["image_in"] }}" target="_blank">
                                            <img class="ml-3" width="100" src="{{ asset('storage/' . $post->image_in) }}">
                                        </a>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Foto Mobil Luar
                                        </label>
                                        
                                        <a href="/{{ $post["image_out"] }}" target="_blank">
                                            <img class="ml-3" width="100" src="{{ asset('storage/' . $post->image_out) }}">
                                        </a>
                                        
                                    </div>
                                    <div class="form-group row mt-5">
                                        <div class="col-lg-2 ml-auto">
                                            <a href="/pendaftaran" type="submit" class="btn btn-secondary">Kembali</a>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="{{ route('pendaftaran.edit', $post->nama) }}" type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                        </div>
                                        <div class="col-lg-3">
                                            <form action="{{ route('pendaftaran.destroy', $post->nama) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                            {{-- <a href="/dashboard/relawan" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
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