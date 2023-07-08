@extends('layouts.main')

@section('container')
<header class="mastheadform">
    <div class="container">
        <div class="headpost">
            <div class="mainpost">
                <h1 class="namepost sm:text-2xl sm:truncat">{{ $post["name"] }}</h1>
                <p class="keterangan">Informasi {{ $post["name"] }}  - Ambulance Gratis di {{ $post->lokasi->kabupaten }}, D.I. Yogyakarta yang dikumpulkan relawan melalui pencarian di internet atau media sosial.
            </div>
        </div>
        <div class="masterid">
            <div class="undermaster">
                <div class="tabelshow">
                    <div class="undertabel border-bottom sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="namatabel">Penyedia</dt>
                        <dd class="undernama sm:mt-0 sm:col-span-2">
                            <span class="isitabel">{{ $post["name"] }}</span>
                            <div class="underisi"></div>
                        </dd>
                    </div>
                    <div class="undertabel  border-bottom sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="namatabel">Lokasi</dt>
                        <dd class="undernama sm:mt-0 sm:col-span-2">
                            <span class="isitabel">{{ $post->lokasi->kabupaten }}</span>
                            <div class="underisi"></div>
                        </dd>
                    </div>
                    <div class="undertabel  border-bottom sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="namatabel">Telepon</dt>
                        <dd class="undernama sm:mt-0 sm:col-span-2">
                            <p class="mainnomor">
                                <input class="textnomor" type="text" value="{{ $post["nomor"] }}" id="copyText" readonly>
                            </p>
                            <div class="underisi"></div>
                        </dd>
                        <div class="salin">
                            <button class="mainsalin" id="copyBtn">
                                <i class="fa-regular fa-copy"></i>
                                Salin
                            </button>
                        </div>
                    </div>
                    <div class="undertabel  border-bottom sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="namatabel">Alamat</dt>
                        <dd class="undernama sm:mt-0 sm:col-span-2">
                            <span class="isitabel">{{ $post["alamat"] }}</span>
                            <div class="underisi"></div>
                        </dd>
                        <div class="flex items-start">
                            <button class="mainsalin">
                                <i class="fa-regular fa-map"></i>
                                <a href="{{ $post["link_alamat"] }}" target="_blank">Buka Peta</a>
                            </button>
                        </div>
                    </div>
                    <div class="undertabel  border-bottom sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="namatabel">Status Vertifikasi</dt>
                        <dd class="undernama sm:mt-0 sm:col-span-2">
                            <span class="isitabel">{{ $post["vertifikasi"] }}</span>
                            <div class="underisi"></div>
                        </dd>
                    </div>
                    <div class="undertabel  border-bottom sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="namatabel">Bentuk Vertifikasi</dt>
                        <dd class="undernama sm:mt-0 sm:col-span-2">
                            <span class="isitabel">{{ $post["via_vertifikasi"] }}</span>
                            <div class="underisi"></div>
                        </dd>
                    </div>
                    <div class="undertabel  border-bottom sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="namatabel">Tambahan Informasi</dt>
                        <dd class="undernama sm:mt-0 sm:col-span-2">
                            <span class="isitabel"> Kondisi Mobil {{ $post["kondisi_mobil"] }}</span>
                            <div class="underisi"></div>
                        </dd>
                    </div>
                    <div class="undertabel  border-bottom sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="namatabel">Terakhir Update</dt>
                        <dd class="undernama sm:mt-0 sm:col-span-2">
                            <span class="isitabel">{{ $post->updated_at->diffForHumans() }}</span>
                            <div class="underisi"></div>
                        </dd>
                    </div>
                    <div class="d-flex justify-content-start mb-5 mt-5">
                        <a href="/relawan" class="ml-5"><svg id="Gradient" height="20" viewBox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <linearGradient id="linear-gradient" gradientUnits="userSpaceOnUse" x1="3.775" x2="12.147" y1="3.814" y2="12.186"><stop offset="0" stop-color="#87f1fc"/><stop offset=".2557" stop-color="#7fd4fb"/><stop offset=".5295" stop-color="#78bcfb"/><stop offset=".7844" stop-color="#74aefa"/><stop offset="1" stop-color="#73a9fa"/></linearGradient>
                            <path d="m15.5 8a1.9932 1.9932 0 0 1 -1.97 2h-6.31l1.07 1.09a2.01 2.01 0 0 1 0 2.82 1.9373 1.9373 0 0 1 -1.39.59h-.01a1.9373 1.9373 0 0 1 -1.39-.59l-4.42-4.5a2.004 2.004 0 0 1 0-2.82l4.42-4.5a1.9835 1.9835 0 0 1 2.79 2.82l-1.07 1.09h6.31a1.9932 1.9932 0 0 1 1.97 2z" fill="url(#linear-gradient)"/>
                        </svg> 
                        Back to All Relawan</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection