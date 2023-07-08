@extends('layouts.main')

@section('container')
<header class="mastheadform">
    <div class="container mt-5">
        <div class="cardrelawan">
            <ul class="cardpostion">
                <select class="form-control col-3 mb-5" onchange="location = this.value;">
                    <option>Pilih Daerah</option>
                    <option value="/lokasi/Sleman">Sleman</option>
                    <option value="/lokasi/Bantul">Bantul</option>
                    <option value="/lokasi/Kulon%20Progo">Kulon Progo</option>
                    <option value="/lokasi/Gunung%20Kidul">Gunung Kidul</option>
                    <option value="/lokasi/Kota%20Yogyakarta">Kota Yogyakarta</option>
                </select>
                <div class="row justify-content-center">
                    <div class="col-md-6"> 
                        <form action="/relawan">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                                <button class="btn btn-outline-secondary" type="submit">Search</button>
                              </div>
                        </form>
                    </div>
                </div>

                @if ($relawan->count()) 
                @foreach ($relawan as $post)
                <div class="border-bottom"></div>
                    <div class="textposition sm:px-6">
                        <div class="namajenis">
                            <a class="namarelawan" href="/relawan/{{ $post["id"] }}">{{ $post["name"] }}</a>
                            @if ($post->jenis_id == '1')
                            <div class="jenisambulance">
                                <span class="vertikasiambulance">{{ $post->jenis->jenis_mobil }}</span>
                            </div>
                            @else
                            <div class="jenisambulance">
                                <span class="vertikasijenazah">{{ $post->jenis->jenis_mobil }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="mainkontak mt-2 sm:flex sm:justify-beetwen">
                            <p class="kontak"><a href="/lokasi/{{ $post->lokasi->kabupaten }}">{{ $post->lokasi->kabupaten }}</a></p>
                            <div class="flex items-start">
                                @if ($post->vertifikasi == 'Terverifikasi')
                                <a class="vertifikasi">
                                    <svg height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Layer_2" data-name="Layer 2">
                                            <path d="m21.187 10.007a3.457 3.457 0 0 1 -.864-.712 3.378 3.378 0 0 1 .277-1.141c.291-.821.62-1.751.092-2.474s-1.525-.7-2.4-.68a3.422 3.422 0 0 1 -1.155-.078 3.369 3.369 0 0 1 -.425-1.063c-.248-.845-.531-1.8-1.4-2.086-.838-.27-1.614.324-2.3.846a3.285 3.285 0 0 1 -1.012.631 3.285 3.285 0 0 1 -1.023-.631c-.684-.519-1.457-1.119-2.299-.845-.867.282-1.15 1.24-1.4 2.085a3.418 3.418 0 0 1 -.421 1.061 3.482 3.482 0 0 1 -1.157.08c-.878-.024-1.867-.05-2.4.68s-.2 1.653.092 2.473a3.336 3.336 0 0 1 .281 1.141 3.449 3.449 0 0 1 -.863.713c-.732.5-1.563 1.069-1.563 1.993s.831 1.491 1.563 1.993a3.449 3.449 0 0 1 .863.712 3.335 3.335 0 0 1 -.273 1.142c-.29.82-.618 1.75-.091 2.473s1.521.7 2.4.68a3.426 3.426 0 0 1 1.156.078 3.4 3.4 0 0 1 .424 1.063c.248.845.531 1.8 1.4 2.086a1.424 1.424 0 0 0 .431.068 3.382 3.382 0 0 0 1.868-.914 3.285 3.285 0 0 1 1.012-.631 3.285 3.285 0 0 1 1.023.631c.685.523 1.461 1.12 2.3.845.867-.282 1.15-1.24 1.4-2.084a3.388 3.388 0 0 1 .424-1.062 3.425 3.425 0 0 1 1.153-.08c.878.021 1.867.05 2.4-.68s.2-1.653-.092-2.474a3.38 3.38 0 0 1 -.281-1.139 3.436 3.436 0 0 1 .864-.713c.732-.5 1.563-1.07 1.563-1.994s-.834-1.492-1.567-1.993z" fill="#49adf4"/>
                                            <path d="m11 14.75a.745.745 0 0 1 -.53-.22l-2-2a.75.75 0 0 1 1.06-1.06l1.54 1.54 3.48-2.61a.75.75 0 0 1 .9 1.2l-4 3a.751.751 0 0 1 -.45.15z" fill="#fff"/>
                                        </g>
                                    </svg>
                                    {{ $post["vertifikasi"] }}
                                </a>
                                @else
                                <a class="vertifikasi">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g><path d="m21.56 10.7401-1.36-1.58004c-.26-.3-.47-.86-.47-1.26v-1.7c0-1.06-.87-1.93-1.93-1.93h-1.7c-.39 0-.96-.21-1.26-.47l-1.58-1.36c-.69-.59-1.82-.59-2.52 0l-1.57 1.37c-.3.25-.87.46-1.26.46h-1.73c-1.06 0-1.93.87-1.93 1.93v1.71c0 .39-.21.95-.46 1.25l-1.35 1.59004c-.58.69-.58 1.81 0 2.5l1.35 1.59c.25.3.46.86.46 1.25v1.71c0 1.06.87 1.93 1.93 1.93h1.73c.39 0 .96.21 1.26.47l1.58 1.36c.69.59 1.82.59 2.52 0l1.58-1.36c.3-.26.86-.47 1.26-.47h1.7c1.06 0 1.93-.87 1.93-1.93v-1.7c0-.39.21-.96.47-1.26l1.36-1.58c.58-.69.58-1.83-.01-2.52zm-5.4-.63-4.83 4.83c-.14.14-.33.22-.53.22s-.39-.08-.53-.22l-2.42-2.42c-.29-.29-.29-.77 0-1.06s.77-.29 1.06 0l1.89 1.89 4.3-4.30004c.29-.29.77-.29 1.06 0s.29.77 0 1.06004z" fill="#696969" data-original="#000000" class="">
                                        </path></g>
                                    </svg>
                                    {{ $post["vertifikasi"] }}
                                </a> 
                                @endif
                            </div>
                        </div>
                        <div class="nomor">
                            <p class="mainnomor">
                                <i class="fa-solid fa-phone"></i>
                                <input class="textnomor" type="text" value="{{ $post["nomor"] }}" id="copyText" readonly>
                            </p>
                            {{-- ini untuk tombol salin --}}
                            <div class="salin">
                                <button class="mainsalin" id="copyBtn">
                                    <i class="fa-regular fa-copy"></i>
                                    Salin
                                </button>
                            </div>
                        </div>
                        <div class="nomor">
                            <p class="mainalamat sm:mt-0">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <a class="textalamat" type="text">{{ $post["alamat"] }}</a>
                            </p>
                            <div class="flex items-start">
                                <button class="mainsalin">
                                    <i class="fa-regular fa-map"></i>
                                    <a href="{{ $post["link_alamat"] }}" target="_blank">Buka Peta</a>
                                </button>
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
                @else
                    <p class="text-center mt-5" style="font-mediun">No Relawan Found.</p>
                @endif
            </ul>
            <div class="d-flex justify-content-center">
                {{ $relawan->links() }}
            </div>
        </div>
    </div>
@endsection

{{-- <h2>
    <a href="/relawan/{{ $post["slug"] }}">{{ $post["nama"] }}</a>
</h2>
<h5>{{ $post["nomor"] }}</h5>
<p>{{ $post["alamat"] }}</p> --}}