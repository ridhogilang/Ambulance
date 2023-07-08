@extends('layouts.mainadmin')

@push('header_dash')
<link href="css/admin/style.css" rel="stylesheet">
@endpush

@section('container')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">register</a></li>
            </ol>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-primary solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
            {{ session('success') }}
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col-xl-6 col-lg-15">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Registrasi Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/register" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" placeholder="Your Full Name" id="name" autocomplete="off" required value="{{ old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                         </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" placeholder="Your Email" id="email" autocomplete="off" required value="{{ old('email') }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" placeholder="Your Password" id="password" autocomplete="off" required>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer_dash')
<script src="java/admin/global.min.js"></script>
<script src="java/admin/bootstrap-select.min.js"></script>
<script src="java/admin/custom.min.js"></script>
<script src="java/admin/deznav-init.js"></script>
@endpush