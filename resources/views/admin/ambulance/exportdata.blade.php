<!DOCTYPE html>
<html>
<head>
<style>
.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
  padding: 10px; }

.form-group {
  margin-bottom: 1rem; }

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #f0f1f5;
  border-radius: 0.75rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }

</style>
</head>
<body>

<h1>A Fancy Table</h1>

<div class="row">
    <div class="col-xl-6">
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Nama Pemohon
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["nama"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Foto KTP
            </label>
            
            <a href="/{{ $post["image"] }}" target="_blank">
                <img class="ml-3" width="100" src="{{ asset('storage/' . $post->image) }}">
            </a>
            
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Nomor HP
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["nohp"] }}</span>
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
            <label class="col-lg-4 col-form-label">Nama Pasien
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["namapasien"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Nama Almarhum
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post[""] }}</span>
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
            <label class="col-lg-4 col-form-label">RT/RW
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["rtrw"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Kecamatan
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["kecamatan"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Desa
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["desa"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Umur
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["umur"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Infeksius
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["infeksius"] }}</span>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Penyakit
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["penyakit"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Kondisi Pasien
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
            <label class="col-lg-4 col-form-label">Prokes Covid
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["prokes"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Lokasi Pemakaman
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["makam"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Lokasi Penjemputan
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["lokasi"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Tujuan
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["tujuan"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Pulang Pergi
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["antar"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Jam Penjemputan
            </label>
            <div class="col-lg-6">
                <span class="form-control">{{ $post["pukul"] }}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label">Tambahan Informasi
            </label>
            <div class="col-lg-6">
                <textarea class="form-control" readonly>{{ $post["lain"] }}</textarea>
            </div>
        </div>
    </div>
</div>  
{{-- <table id="customers">
  <tr>
    <th>ID</th>
    <th>Nama Pemohon</th>
    <th>Foto KTP</th>
    <th>Nomor</th>
    <th>Nama Pasien</th>
    <th>Alamat</th>
    <th>Umur</th>
    <th>Infeksius</th>
    <th>Penyakit</th>
    <th>Kondisi</th>
    <th>Status</th>
    <th>Lokasi Penjemputan</th>
    <th>Tujuan</th>
    <th>Pulang Pergi</th>
    <th>Tanggal</th>
    <th>Jam Penjemputan</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>{{ $post["id"] }}</td>
    <td>{{ $post["nama"] }}</td>
    <td>{{ $post["image"] }}</td>
    <td>{{ $post["nohp"] }}</td>
    <td>{{ $post["namapasien"] }}</td>
    <td>{{ $post["alamat"] }}</td>
    <td>{{ $post["umur"] }}</td>
    <td>{{ $post["infeksius"] }}</td>
    <td>{{ $post["penyakit"] }}</td>
    <td>{{ $post["kondisi"] }}</td>
    <td>{{ $post["status"] }}</td>
    <td>{{ $post["lokasi"] }}</td>
    <td>{{ $post["tujuan"] }}</td>
    <td>{{ $post["antar"] }}</td>
    <td>{{ \Carbon\Carbon::parse($post->tanggal)->format('l, d F Y') }}</td>
    <td>{{ \Carbon\Carbon::parse($post->created_at)->format('h:i')}} </td>
    <td>{{ $post["status"] }}</td>
  </tr>
</table> --}}

</body>
</html>


