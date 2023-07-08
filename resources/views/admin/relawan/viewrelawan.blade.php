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
                    <h4>{{ $post["name"] }}</h4>
                    <p class="mb-0">Validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form View</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $post["name"] }}</a></li>
                </ol>
            </div>
        </div>
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
                                        <label class="col-lg-4 col-form-label">Nama Relawan
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["name"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Lokasi
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post->lokasi->kabupaten }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nomor
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["nomor"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Alamat
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" rows="4" readonly>{{ $post["alamat"] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Link Alamat
                                        </label>
                                        <div class="col-lg-6">
                                            <a href="{{ $post["link_alamat"] }}" target="_blank"><span class="form-control">{{ $post["link_alamat"] }}</span></a>
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
                                        <label class="col-lg-4 col-form-label">Vertifikasi
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["vertifikasi"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Vertifikasi Via
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["via_vertifikasi"] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Plat Nomor
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["plat_nomor"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kondisi Mobil
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["kondisi_mobil"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Foto Dalam
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["foto_dalam"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Foto Luar
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post["foto_luar"] }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Terakhir Update
                                        </label>
                                        <div class="col-lg-6">
                                            <span class="form-control">{{ $post->updated_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <div class="col-lg-2 ml-auto">
                                            <a href="/dashrelawan" type="submit" class="btn btn-secondary">Kembali</a>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="/dashrelawan" type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                        </div>
                                        <div class="col-lg-3">
                                            <form action="/dashrelawan/{{ $post->name }}" method="POST">
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
    </div>
</div>
@endsection

@push('footer_dash')
<script src="{{ asset('java/admin/global.min.js') }}"></script>
<script src="{{ asset('java/admin/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('java/admin/custom.min.js') }}"></script>
<script src="{{ asset('java/admin/deznav-init.js') }}"></script>
@endpush