@extends('layouts.main')

@section('container')
<header class="mastheadform">
        <body class="hold-transition layout-top-nav">
            <div class="wrapper">
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
              <div class="container">
                {{-- Main Form --}}
                <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto" id="navbarCollapse">
                </div>
                
              </div>
            </nav>
            <div class="content-wrapper">  
             <div class="content-header">
              <div class="container">
              <div class="row mb-2">   
                    
              </div>
          </div>
             </div>
             <div class="content">  
              <div class="container">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btnn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            <form method="POST" action="/formrelawan" enctype="multipart/form-data"  id="form" role="form">
              @csrf
              <div class="row">		
                  <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header bg-gradient-info">
                          <h3 class="card-title">Formulir Pendaftaran Relawan</h3>
                        </div>                           
                          <div class="card-body">  
                            <div class="row">
                              <div class="col-md-6">                  
                            <label style="font-size:1.2rem">Pendaftaran / Penanggung jawab</label>
                            <div class="form-group row">
                              <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('nama')is-invalid @enderror" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                                @error('nama')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>  
                           
                            <div class="form-group row">
                              <label for="nama_organisasi" class="col-sm-4 col-form-label">Nama instansi/Organisasi</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('nama_organisasi')is-invalid @enderror" id="nama_organisasi" name="nama_organisasi" placeholder="Nama Organisasi/Instansi" value="{{ old('nama_organisasi') }}">
                                @error('nama_organisasi')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>  
                           
          
                            <div class="form-group row">
                              <label for="nohp" class="col-sm-4 col-form-label">No HP/WA (untuk vertivikasi)</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control numberonly @error('nohp')is-invalid @enderror" id="nohp" name="nohp" placeholder="No HP/WA" value="{{ old('nohp') }}">
                                @error('nohp')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>  
          
                            <div class="form-group row">
                              <label for="jenis" class="col-sm-5 col-form-label">Jenis Mobil </label>
                              <div class="col-sm-7">
                                <select name="jenis_id" id="jenis" class="form-control form-control-sm">
                                  @foreach ($jenis as $post)
                                  <option value="{{ $post->id }}">{{ $post["jenis_mobil"] }}</option>   
                                  @endforeach
                                </select>
                              </div>
                            </div> 
                            
                            <div class="form-group row">
                              <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control @error('alamat')is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat Kantor Instansi/Organisasi" value="{{ old('alamat') }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div> 

                            <div class="form-group row">
                              <label for="link_alamat" class="col-sm-4 col-form-label">Link Alamat (Google Maps)</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control @error('link_alamat')is-invalid @enderror" id="link_alamat" name="link_alamat" placeholder="Link Alamat dari Google Maps" value="{{ old('link_alamat') }}">
                                @error('link_alamat')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>  
          
                            {{-- <div class="form-group row tipe1">
                              <label for="namapasien" class="col-sm-4 col-form-label">Nama Pasien</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm  @error('namapasien')is-invalid @enderror" id="namapasien" name="namapasien" placeholder="Nama Pasien" value="{{ old('namapasien') }}">
                                @error('namapasien')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>   
          
                            <div class="form-group row tipe2" style="display:none">
                              <label for="almarhum" class="col-sm-5 col-form-label">Nama Almarhum </label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm @error('almarhum')is-invalid @enderror" id="almarhum" name="almarhum" placeholder="Nama Almarhum" value="{{ old('almarhum') }}">
                                @error('almarhum')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>        
          
                            <div class="form-group row">
                              <label for="alamat" class="col-sm-4 col-form-label" id="rumah-tinggal">Alamat Tinggal </label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('alamat')is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat tinggal/nama jalan" value="{{ old('alamat') }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>                  
          
                            <div class="form-group row">
                              <label for="rtrw" class="col-sm-4 col-form-label">RT/RW</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('rtrw')is-invalid @enderror" id="rtrw" name="rtrw" placeholder="RT/RW" value="{{ old('rtrw') }}">
                                @error('rtrw')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>                  
          
                            <div class="form-group row">
                              <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan </label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('kecamatan')is-invalid @enderror" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{{ old('kecamatan') }}">
                                @error('kecamatan')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>
          
                            <div class="form-group row">
                              <label for="desa" class="col-sm-4 col-form-label">Desa/Kelurahan </label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('desa')is-invalid @enderror" id="desa" name="desa" placeholder="Masukkan Nama Desa" value="{{ old('desa') }}">
                                @error('desa')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>
          
                            <div class="form-group row tipe1">
                              <label for="umur" class="col-sm-4 col-form-label">Umur</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control numberonly @error('umur')is-invalid @enderror" id="umur" name="umur" placeholder="Umur" value="{{ old('umur') }}">
                                @error('umur')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>  
          
                            <div class="form-group row" id="infeksi-wrapper">
                              <label for="infeksi" class="col-sm-5"><span>Kategori Infeksius</span><br/>
                              <span style="font-size:12px">Apakah Penyakitnya menular ? misal covid19, TBC dll</span></label>
                              <div class="col-sm-7">
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="infeksius" name="infeksius" value="Infeksius">
                                  <label for="infeksius1">Ya</label>
                                </div>
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="infeksius" name="infeksius" value="Non Infeksius">
                                  <label for="infeksius2">Tidak</label>
                                </div>
                              </div>
                            </div>
          
                            <div class="form-group row tipe1">
                              <label for="penyakit" class="col-sm-4 col-form-label">Penyakit</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="penyakit" name="penyakit" placeholder="Penyakit" value="">
                              </div>
                            </div>
          
                            <div class="form-group row" id="kondisi-wrapper">
                              <label for="kondisi" class="col-sm-5"><span>Kondisi pasien</span></label>
                              <div class="col-sm-7">
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="kondisi" name="kondisi" value="Duduk">
                                  <label for="kondisi1">Duduk</label>
                                </div>
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="kondisi" name="kondisi" value="Tidur">
                                  <label for="kondisi2">Tidur</label>
                                </div>
                              </div>
                            </div>
          
                            <div class="form-group row" id="kondisi-wrapper">
                                <label for="status" class="col-sm-5">Status Pengajuan</label>
                                <div class="col-sm-7">        
                                  <div class="icheck-primary d-inline">
                                    <input type="radio" id="status" name="status" value="Darurat">
                                    <label for="status1">Darurat</label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="radio" id="status" name="status" value="Biasa">
                                    <label for="status2">Biasa</label>
                                  </div>
                                </div>                         
                              </div>
          
                              <div class="form-group row" id="prokes-wrapper" style="display:none">
                                    <label for="prokes" class="col-sm-4">Keterangan</label>
                                    <div class="col-sm-8">        
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="prokes1" name="prokes" value="PROKES">
                                        <label for="prokes1">Prokes</label>
                                      </div>
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="prokes2" name="prokes" value="NON PROKES">
                                        <label for="prokes2">Non Prokes</label>
                                      </div>
                                    </div>                         
                              </div>
          
                              <div class="form-group row tipe2" style="display:none">
                                    <label for="makam" class="col-sm-5 col-form-label">Lokasi Pemakaman </label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-sm @error('makam')is-invalid @enderror" id="makam" name="makam" placeholder="Nama dan alamat/daerah makam" value="{{ old('makam') }}">
                                      @error('makam')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                  </div> --}}
                            
                            </div>
                            <div class="col-md-6">
                                  <label style="font-size:1.2rem">Data</label>
                                  {{-- <div class="form-group row">
                                    <label for="lokasi" class="col-sm-5 col-form-label">Lokasi Penjemputan
                                    </label>
                                    <div class="col-sm-7">  
                                      <select name="pilihlokasi" id="pilihlokasi" class="form-control">
                                      <option value="-">Pilih lokasi</option>
                                      <option value="Rumah">Rumah</option>
                                      <option value="Lain">Rumah Sakit/lainnya</option>
                                      </select>   
                                      <br/>
                                      <input type="text" class="form-control form-control-sm" id="lokasi" name="lokasi"  style="display: none" value="">
                                      <span id="keterangan-lokasi" style="font-size:0.7rem;display:none">silahkan dirubah jika alamat penjemputan berbeda dari alamat anda</span>
          
                                    </div> 
                                  </div> --}}
                                  <div class="form-group row">
                                    <label for="nama_sopir" class="col-sm-4 col-form-label">Nama Sopir </label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control form-control-sm @error('nama_sopir')is-invalid @enderror" id="nama_sopir" name="nama_sopir" placeholder="Nama Sopir Ambulance" value="{{ old('nama_sopir') }}">
                                      @error('nama_sopir')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="kondisi" class="col-sm-4 col-form-label">Kondisi Mobil </label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control form-control-sm @error('kondisi')is-invalid @enderror" id="kondisi" name="kondisi" placeholder="Kondisi Mobil Saat Ini" value="{{ old('kondisi') }}">
                                      @error('kondisi')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="image_in" class="col-sm-4 col-form-label">Foto Mobil Bagian Dalam</label>
                                    <div class="col-sm-8">
                                      <div class="input-group">
                                      <input class="form-control @error('image_in')is-invalid @enderror" type="file" id="image_in" name="image_in">
                                      @error('image_in')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                      {{-- <button id="btn-camera" class="btnform btn-primary"><i class="fas fa-camera"></i> Ambil Foto</button> --}}
                                      <span style="font-size:0.8rem">Pada saat mengambil gambar mobil, sebaiknya dengan posisi dan pencahaan yang baik.</span>
                                    </div>
                                    <div id="image-holder" class="form-group">                   
                                    
                                    </div>
                                    <div class="form-group"></div>
                                     <button type="button" class="btn btn-danger" id="remove_btn" style="display:none;"><i class="fa fa-trash-o"></i> Hapus foto</button>
                                  </div>
                                  </div>
              
                                  <div class="form-group row">
                                    <label for="image_out" class="col-sm-4 col-form-label">Foto Mobil Bagian Luar</label>
                                    <div class="col-sm-8">
                                      <div class="input-group">
                                      <input class="form-control @error('image_out')is-invalid @enderror" type="file" id="image_out" name="image_out">
                                      @error('image_out')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                      {{-- <button id="btn-camera" class="btnform btn-primary"><i class="fas fa-camera"></i> Ambil Foto</button> --}}
                                      <span style="font-size:0.8rem">Pada saat mengambil gambar mobil, sebaiknya dengan posisi dan pencahaan yang baik.</span>
                                    </div>
                                    <div id="image-holder" class="form-group">                   
                                    
                                    </div>
                                    <div class="form-group"></div>
                                     <button type="button" class="btn btn-danger" id="remove_btn" style="display:none;"><i class="fa fa-trash-o"></i> Hapus foto</button>
                                  </div>



                                  {{-- <div class="form-group row">
                                    <label for="image" class="col-sm-4 col-form-label">Foto KTP/SIM</label>
                                    <div class="col-sm-8">
                                      <div class="input-group">
                                      <input class="form-control @error('image')is-invalid @enderror" type="file" id="image" name="image">
                                      @error('image')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                      {{-- <button id="btn-camera" class="btnform btn-primary"><i class="fas fa-camera"></i> Ambil Foto</button> --}}
                                      {{-- <span style="font-size:0.8rem">Pada saat mengambil gambar ktp, sebaiknya tutup NIK anda dengan jari atau benda lainnya.</span> --}}
                                    {{-- </div>
                                    <div id="image-holder" class="form-group">                   
                                    
                                    </div>
                                    <div class="form-group">
                                     <button type="button" class="btn btn-danger" id="remove_btn" style="display:none;"><i class="fa fa-trash-o"></i> Hapus foto</button>
                                  </div> --}}
                                    
                                  {{-- <div class="form-group row" id="tujuan-wrapper">
                                    <label for="tujuan" class="col-sm-5 col-form-label">Tujuan</label>
                                    <div class="col-sm-7">
                                      <select name="pilihtujuan" id="pilihtujuan" class="form-control">
                                      <option value="-">Pilih tujuan</option>
                                      <option value="Rumah">Rumah</option>
                                      <option value="Lain">Rumah Sakit/lainnya</option>
                                      </select>   
                                      <br/>
                                      <input type="text" class="form-control form-control-sm" id="tujuan" name="tujuan" style="display: none;" value="">
                                      <span id="keterangan-tujuan" style="font-size:0.7rem;display:none">silahkan diganti jika alamat tidak sama</span>
                                    </div>
                                  </div>
                                  <div class="form-group row tipe1" id="antar-wrapper">
                                    <label for="antar" class="col-sm-5 col-form-label">Dihantar pergi s/d pulang</label>
                                    <div class="col-sm-7">        
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="antar" name="antar" value="Ya">
                                        <label for="antar1">Ya</label>
                                      </div>
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="antar" name="antar" value="Tidak">
                                        <label for="antar2">Tidak</label>
                                      </div>
                                    </div>                         
                              </div>
                              <div class="form-group row" id="tanggal-wrapper">                   
                                    <label for="tanggal" class="col-sm-5 col-form-label">Tanggal penjemputan</label>
                                    <div class="col-sm-7">
                                      <div class="input-group date">
                                <input type="text" class="form-control form-control-sm @error('tanggal')is-invalid @enderror" name="tanggal" id="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fas fa-calendar-check"></i></span></div>
                              </div>
                                    </div>
                                  </div>
                                  <div class="form-group row" id="waktu-wrapper">
                                    <label for="pukul" class="col-sm-5 col-form-label">Jam penjemputan </label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-sm @error('pukul')is-invalid @enderror" id="pukul" name="pukul" placeholder="Jam" value="{{ old('pukul') }}">
                                      @error('pukul')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                  </div>
          
                                  <div class="form-group row" id="waktu-wrapper">
                                    <label for="lain" class="col-sm-5 col-form-label">Lain-lain </label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-sm @error('lain')is-invalid @enderror" id="lain" name="lain" placeholder="catatan tambahan" value="{{ old('lain') }}">
                                      @error('lain')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                  </div>
          
                                  <label>Mohon dikirimkan kendaraan ke alamat yang sudah saya sampaikan.<br/>
                                  <br/>
                                  Terima kasih.</label> 
                                  
                              </div> --}}
                                </div>
                              </div> 
                            </div>
                          </form>
                            
                  </div>
                     
                  
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                          <button id="loading" class="btn btn-xs bg-blue btn-block progress-bar progress-bar-striped progress-bar-animated" style="display: none">Silahkan tunggu, data sedang diproses</button>
                      </div>
                    </div>
                  </div>
                   
                <div class="card-footer">        
                          <button class="btnform btn-primary btn-lg" type="submit" id="" style="float:right;"><i class="fas fa-location-arrow"></i> Kirim</button>
                        </div> 
                <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title"><span data-card-widget="collapse" style="cursor:pointer">Syarat dan Ketentuan My Ambulance Care :</span></h3>
              
              {{-- card --}}
            </div>
            {{-- card atas --}}
            <div class="card-body" style="display: block;">
              <ol>
              <li>Layanan ambulance dan mobil jenazah yang disediakan oleh MyAmbulance adalah GRATIS.</li>
              <li>Aplikasi Web ini dikelola oleh OneSquad sedangkan mobil ambulance bekerjasama dengan relawan yang sudah terverifikasi.</li>
              <li>Aplikasi Web ini disediakan untuk seluruh warga Daerah Istimewa Yogyakarta agar mendapatkan fasilitas ambulance dan mobil jenazah secara mudah dan cepat.
              </li>
              <li>Layanan ambulance dan mobil jenazah tergantung pada ketersediaan unit mobil pada saat pemohon mengajukan permohonan melalui aplikasi web.</li>
              <li>Layanan ambulance disediakan untuk segala sesuatu yang berhubungan dengan orang sakit, antara lain ; antar jemput pasien ke rumah sakit, antar pasien dari satu lokasi ke lokasi lainnya, menjemput korban kecelakaan dan lain sebagainya.</li>
              <li>Pengelola dan operator MyAmbulance terlepas dan tidak bertanggung jawab dari segala bentuk kejadian yang diluar kendali kami</li>
              <li>Pemohon diharapkan memberikan informasi yang akurat terhadap kondisi pasien kepada operator cariambulan.com.</li>
              <li>Dalam kondisi tertentu, kami mungkin tidak bisa diandalkan untuk kondisi pasien yang membutuhkan penanganan darurat yang cepat seperti ; serangan jantung dll. Untuk kondisi tersebut, diharapkan pemohon mencari bantuan yang terdekat terlebih dahulu.
              </li>
              <li>Kami membutuhkan photo KTP anda hanya sebagai media verifikasi. Kami tidak menyimpan KTP anda di server kami dan tidak pula membagikannya kepihak lain termasuk driver ambulan kami. 
              Sebagai langkah preventif keamanan data anda, silahkan tutup NIK anda dengan jari / benda lain  atau diedit terlebih dahulu sebelum dikirim ke kami.</li>
              <li>Hubungi call center kami di +62895-1967-2044 untuk info lebih lanjut.</li>
            </ol>
            </div>
            {{-- card body --}}
          </div>
                    <div class="didukung">Didukung oleh:<br/>
                    <img src="https://i.postimg.cc/tT1jrQqW/1.png" class="logo-bawah" alt="logo bawah 1"/>
                    <img src="https://i.postimg.cc/nVB8M1CF/2.png" class="logo-bawah" alt="logo bawah 2"/>
                  </div>     
              </div>	
            </form>
          </div>
             </div>
             {{-- Hak Cipta --}}
            <footer class="main-footer text-white">    
              <strong> Hak Cipta &copy; Team A Basis Data 2022</strong>
            </footer>
          </div>
          
          {{-- script resource --}}
          <script src="https://cariambulan.com/assets/plugins/jquery/jquery.min.js"></script>
          <script src="https://cariambulan.com/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="https://cariambulan.com/assets/js/adminlte.min.js"></script>
          <script src="https://cariambulan.com/assets/js/icheck.js"></script>
          <script src="https://cariambulan.com/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
          <script src="https://cariambulan.com/assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>
          <script src="https://cariambulan.com/sw.js"></script>
              <script>
                  if (!navigator.serviceWorker.controller) {
                      navigator.serviceWorker.register("/sw.js").then(function (reg) {
                          console.log("Service worker has been registered for scope: " + reg.scope);
                      });
                  }
              </script>
          <script src='https://cariambulan.com/assets/js/bootstrap-filestyle.min.js' type="text/javascript"></script>
          <link href="https://cariambulan.com/assets/plugins/sweetalert2/sweetalert2.css" rel="stylesheet"/>
          <link href="https://cariambulan.com/assets/css/custom.css" rel="stylesheet"/> 
          <script src="https://cariambulan.com/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
          <script src="https://cariambulan.com/assets/plugins/moment/moment.min.js"></script>
          <script src='https://cariambulan.com/assets/js/number-divider.min.js'></script>
          <script src="https://cariambulan.com/assets/js/custom.js"></script>
          <script>
          
          </script>
          </body>
</header>

@endsection

@push('footer_script')
<script src="java/form.js"></script>
@endpush