@extends('layouts.main')

@push('header_home')
<link rel="stylesheet" href="css/faq.css">
@endpush

@section('container')

{{-- Headder --}}
<header class="masthead">
    <div id="page-top" class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">My Ambulance Care</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Relawan Ambulance Pembuka Harapan</h2>
        <a href="/form" class="btn btn-primary" id="Need">Butuh Ambulance</a>
      </div>
    </div>
  </header>

  {{-- About --}}
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Tujuan dan Cita-Cita Kami</h2>
          <hr class="accessory">
          <p class="text-white-50">Program pelayanan tanggap darurat kebutuhan transportasi dalam upaya penanganan kasus kesehatan dan kematian bagi kaum dhuafa, layanan ini di berikan secara gratis bagi mereka yang membutuhkan.
            Program Ambulan gratis diharapkan mampu menyelesaikan masalah mustahik saat tertimpa mushibah sehingga tidak menambah beban duka yang sedang mereka alami.</p>
          <img src='{{ asset('css/1.png') }}' class="col-lg-6 img-fluid unionicon" alt=""> <img src="https://i.postimg.cc/nVB8M1CF/2.png" class="col-lg-6 img-fluid cresticon" alt="">

          <p class="text-white-50">Tujuan Penggunaannya adalah Pengangkutan penderita yang tidak memerlukan perawatan khusus/ tindakan darurat untuk menyelamatkan nyawa dan diperkirakan tidak akan timbul kegawatan selama dalam perjalanan.</p>

          <h3 class="text-white mb-4">Team A Basis Data</h3>

          <hr class="accessory" width="50%">
          <br>

        </div>
      </div>

      <!-- Headshots -->
      <div class="container-fluid">

        <!-- Row 1 -->
        <div class="row headshots">

          <div class="col-sm-2">

            <figure class="one">
              <img src='https://i.postimg.cc/zGyyMMq3/dicky.jpg' class="headshotphoto" />
              <p class="text-white headshottext">Dicky Eko</p>
              <p class="text-white headshotgrade"> <b>NIM</b>: 21330012</p>
              <p class="text-white headshotgrade"> <b>Jurusan</b>: Teknik Informatika </p>
              <p class="text-white headshotgrade"> <b>Matkul</b>: Pemrograman Basis Data</p>
            </figure>

          </div>

          <div class="col-sm-2">

            <figure class="one">
              <img src='https://i.postimg.cc/4NB8wK3s/rezky.jpg' class="headshotphoto" />
              <p class="text-white headshottext">Rezky Ismanto</p>
              <p class="text-white headshotgrade"> <b>NIM</b>: 20330005</p>
              <p class="text-white headshotgrade"> <b>Jurusan</b>: Teknik Informatika </p>
              <p class="text-white headshotgrade"> <b>Matkul</b>: Pemrograman Basis Data</p>
            </figure>

          </div>

          <div class="col-sm-2">

            <figure class="one">
              <img src='https://i.postimg.cc/VNyXF1Xz/yohanes.jpg' class="headshotphoto" />
              <p class="text-white headshottext">Yohanes</p>
              <p class="text-white headshotgrade"> <b>NIM</b>: 21330023</p>
              <p class="text-white headshotgrade"> <b>Jurusan</b>: Teknik Informatika </p>
              <p class="text-white headshotgrade"> <b>Matkul</b>: Pemrograman Basis Data</p>

            </figure>

          </div>

          <div class="col-sm-2">

            <figure class="one">
              <img src='https://i.postimg.cc/kGYFWpQ8/annisa.jpg' class="headshotphoto" />
              <p class="text-white headshottext">Annisa Eka</p>
              <p class="text-white headshotgrade"> <b>NIM</b>: 21330055</p>
              <p class="text-white headshotgrade"> <b>Jurusan</b>: Teknik Informatika </p>
              <p class="text-white headshotgrade"> <b>Matkul</b>: Pemrograman Basis Data</p>
            </figure>

          </div>

          <div class="col-sm-3">

            <figure class="one">
              <img src='https://i.postimg.cc/HW31Mkb1/ridho.jpg' class="headshotphoto" />
              <p class="text-white headshottext">Ridho Gilang</p>
              <p class="text-white headshotgrade"> <b>NIM</b>: 21330057</p>
              <p class="text-white headshotgrade"> <b>Jurusan</b>: Teknik Informatika </p>
              <p class="text-white headshotgrade"> <b>Matkul</b>: Pemrograman Basis Data</p>
            </figure>

          </div>

        </div>

      </div> <br><br>

    </div>
    <!-- Container div -->

  </section>

  {{-- Relawan Maps --}}
  <section id="projects" class="projects-section">
    <div class="container-fluit">
      <h2 class="text-black mb-4 text-center">Temukan Relawan Kami</h2>
          <hr class="accessory" width="50%">
        <div class="relawan">
          <div id="map" class="map">

          </div>
        </div>
    </div>

  {{-- FAQ's --}}

  <section class="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 text-center">
                <div class="section-title">
                    <h4>FAQ's</h4>
                    <h2>Frequently Asking <span>Question's</span></h2>
                    <hr class="accessory" width="50%">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btnf btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Dimana saya bisa mendapatkan Ambulance Gratis?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body text-left	">
                                      <br>
                                        Anda bisa mendapatkan Ambulance Gratis dengan mengisi form permintaan mobil ambulance yang ada di tombol "Butuh Ambulance" di halaman utama atau anda bisa <a href="/form">Klik Disini.</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btnf btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Apa yang harus saya lakukan setelah mengisi form permohonan Mobil Ambulance?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body text-left">
                                      <br>
                                         Anda bisa menunggu kami menghubungi anda dalam waktu 15 menit, apabila kami belum menghubungi dalam kurun waktu tersebut anda dapat menghubungi kami melewati nomor yang sudah tertera di halamn terakhir.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btnf btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           Apa yang harus saya lakukan apabila salah dalam input data permohonan mobil ambulance?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body text-left">
                                      <br>
                                        Apabila ada kesalahan dalam input data, anda dapat menghubungi langsung ke nomor kami yang ada di halaman depan. Atau anda juga dapat mengirimkan ulang formulir dengan menambah pada kolom keterangan dengan "Perbaikan Formulir Sebelumnya"
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btnf btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                            Apa yang harus saya lakukan apabila Mobil Ambulance saya tidak datang?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body text-left">
                                      <br>
                                        Apabila dalam kurun waktu 15 menit setelah anda mengirimkan formulir permohonan ambulance kepada kami dan belum mendapatkan pesan dari kami. Maka kami sarankan anda untuk menghubungi kami pada nomor berikut +62 865-9876-2345
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btnf btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse5" aria-expanded="false" aria-controls="collapseOne">
                                            Dimana saya bisa mendaftar sebagai relawan Ambulance?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse5" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body text-left">
                                      <br>
                                        Apabila organisasi anda berniat untuk bergabung berjuang bersama kami sebagai relawan Ambulance Gratis, maka anda dapat mendaftarkan diri pada link berikut <a href="/formrelawan">Klik Disini</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btnf btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                                            Setelah saya mendaftar sebagai relawan, apa yang harus dilakukan?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse6" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body text-left">
                                      <br>
                                         Anda perlu menunggu kami untuk menghubungi anda untuk validasi tahap 1, setelah itu tim My Ambulance Care akan datang ke tempat anda untuk tahap validasi ke-2.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btnf btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                            Apakah saya perlu membayar kepada ambulance yang saya pesan?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse7" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body text-left">
                                      <br>
                                        Semua relawan yang terdaftar di Aplikasi My Ambulance Care bersifat gratis untuk masyarakat kurang mampu yang membutuhkan bantuan ambulance.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btnf btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                                            Ada Pertanyaan lainnya?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse8" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body text-left">
                                      <br>
                                        Apabila anda mempunyai pertanyaan lebih detail bisa hubungi kami di nomor <a href="/">Klik Disini</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
  </section>

  {{-- Subscribe --}}
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Submit your email for news & event updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btns btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  {{-- Contact Us --}}
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Alamat Kami</h4>
              <hr class="my-4">
              <div class="small text-black-50">Universitas Janabadra Fakultas Teknik</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">teamabasisdata@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Telepon</h4>
              <hr class="my-4">
              <div class="small text-black-50">+62 (882) 2772-8073</div>
            </div>
          </div>
        </div>
      </div>

      {{-- Footer --}}
      <div class="social d-flex justify-content-center">
        <a href="" class="mx-2">
            <i class="fab fa-instagram"></i>
          </a>
        <a href="" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
        <a href="" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
      </div>
      {{-- Tombol Button Ke atas --}}
      <a class="gotopbtn js-scroll-trigger" href="#page-top"><i class="fa-solid fa-arrow-up rounded-cicrle"></i></a>
    </div>
  </section>

  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Hak Cipta &copy; Team A Basis Data 2022
    </div>
  </footer>
  
@endsection

@push('footer_home')
<script src="java/maps.js"></script>
@endpush