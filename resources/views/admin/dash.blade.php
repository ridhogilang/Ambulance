@extends('layouts.mainadmin')

@push('header_dash')
<link href="../css/admin/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../css/admin/bootstrap-select.min.css" rel="stylesheet">
    <link href="../css/admin/style.css" rel="stylesheet">
@endpush


@section('container')
        
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
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
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Relawan Aktif</h4>
                                <a class="btn btn-primary" href="/dashrelawan/create">New Relawan</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Lokasi</th>
                                                <th>Nomor</th>
                                                <th>Alamat</th>
                                                <th>Jenis</th>
                                                <th>Vertifikasi</th>
                                                <th>Plat Nomor</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($relawan as $post)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $post["name"] }}</td>
                                                <td>{{ $post->lokasi->kabupaten }}</td>
                                                <td>{{ $post["nomor"] }}</td>
                                                <td>{{ $post["alamat"] }}</td>
                                                @if ($post->jenis_id == '1')
                                                    <td><span class="badge badge-warning">{{ $post->jenis->jenis_mobil }}</span>
                                                @else
                                                    <td><span class="badge badge-danger">{{ $post->jenis->jenis_mobil }}</span> 
                                                @endif
                                                <td>{{ $post["vertifikasi"] }}</td>
                                                <td>{{ $post["plat_nomor"] }}</td>
                                                <td>
													<div class="d-flex">
														<a href="{{ route('dashrelawan.show', $post->name) }}" class="btn btn-secondary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
														<a href="{{ route('dashrelawan.edit', $post->name) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <form action="{{ route('dashrelawan.destroy', $post->id) }}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa fa-trash"></i></button>
                                                        </form>
														{{-- <a href="#" class="btn btn-danger shadow btn-xs sharp"></a> --}}
													</div>												
												</td>												
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
<script src="../java/admin/global.min.js"></script>
<script src="../java/admin/bootstrap-select.min.js"></script>
<script src="../java/admin/custom.min.js"></script>
<script src="../java/admin/deznav-init.js"></script>
<script src="../java/admin/jquery.dataTables.min.js"></script>
<script src="../java/admin/datatables.init.js"></script>
@endpush