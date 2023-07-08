<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Relawan;
use App\Models\Lokasi;
use App\Models\JenisMobil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() 
    {
        // \App\Models\User::factory(10)->create();

        Lokasi::create([
            'id' => '1',
            'kabupaten' => 'Sleman'
        ]);
        Lokasi::create([
            'id' => '2',
            'kabupaten' => 'Bantul'
        ]);
        Lokasi::create([
            'id' => '3',
            'kabupaten' => 'Kulon Progo'
        ]);
        Lokasi::create([
            'id' => '4',
            'kabupaten' => 'Gunung Kidul'
        ]);
        Lokasi::create([
            'id' => '5',
            'kabupaten' => 'Kota Yogyakarta'
        ]);

        User::create([
            'name' => 'Ridho',
            'email' => 'ridho@gmail.com',
            'password' => bcrypt('21330057'),
            'foto' => 'https://i.postimg.cc/HW31Mkb1/ridho.jpg'
        ]);
        User::create([
            'name' => 'Dicky',
            'email' => 'dicky@gmail.com',
            'password' => bcrypt('21330012'),
            'foto' => 'https://i.postimg.cc/zGyyMMq3/dicky.jpg'
        ]);
        User::create([
            'name' => 'Annisa',
            'email' => 'annisa@gmail.com',
            'password' => bcrypt('21330055'),
            'foto' => 'https://i.postimg.cc/kGYFWpQ8/annisa.jpg'
        ]);
        User::create([
            'name' => 'Yohanes',
            'email' => 'yohanes@gmail.com',
            'password' => bcrypt('21330023'),
            'foto' => 'https://i.postimg.cc/VNyXF1Xz/yohanes.jpg'
        ]);
        User::create([
            'name' => 'Rezky',
            'email' => 'rezky@gmail.com',
            'password' => bcrypt('20330005'),
            'foto' => 'https://i.postimg.cc/4NB8wK3s/rezky.jpg'
        ]);

        JenisMobil::create([
            'id' => '1',
            'jenis_mobil' => 'Ambulance'
        ]);
        
        JenisMobil::create([
            'id' => '2',
            'jenis_mobil' => 'Mobil Jenazah'
        ]);

        Relawan::create([
            'id' => '001',
            'name' => 'Ambulance Gratis Jogja',
            'lokasi_id' => '2',
            'nomor' => '081326310779',
            'alamat' => 'Jl. Raya Piyungan No.RT 09, Mungur, Srimartani, Kec. Piyungan, Bantul, Daerah Istimewa Yogyakarta 55792',
            'link_alamat' => 'https://goo.gl/maps/oPfBhf4tZBYdugp79',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via WhatsApp',
            'plat_nomor' => 'AB 7865 DX',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '002',
            'name' => 'AmbulanMu DIY',
            'lokasi_id' => '5',
            'nomor' => '087721222900',
            'alamat' => 'Jl. Gedongkuning No.108, Rejowinangun, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55171',
            'link_alamat' => 'https://goo.gl/maps/6fKEbrzbtBfCTzG17',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via Telepon',
            'plat_nomor' => 'AB 6897 ZA',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '003',
            'name' => 'Ambulance Gratis Wonosari dan Sekitarnya',
            'lokasi_id' => '4',
            'nomor' => '081391934411',
            'alamat' => ' ',
            'link_alamat' => ' ',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via Telepon',
            'plat_nomor' => 'AB 9875 CB',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
            
        Relawan::create([
            'id' => '004',
            'name' => 'Ambulance Peduli Muslim',
            'lokasi_id' => '5',
            'nomor' => '081383333118',
            'alamat' => 'Jl. Banjarsari No. 1549, RT.78/RW.17, Dukuh, Gedongkiwo, Kec. Mantrijeron',
            'link_alamat' => 'https://goo.gl/maps/pegvmLWaBLBLFYmw5',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via WhatsApp',
            'plat_nomor' => 'AB 7895 YT',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '005',
            'name' => 'Ambulans Lazis NU Gunung Kidul',
            'lokasi_id' => '4',
            'nomor' => '081227273458',
            'alamat' => ' ',
            'link_alamat' => ' ',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via Telepon',
            'plat_nomor' => 'AB 4235 XA',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '006',
            'name' => 'BMH Yogyakarta',
            'lokasi_id' => '1',
            'nomor' => '085877177162',
            'alamat' => 'Jl. Kaliurang Km. 11,5',
            'link_alamat' => 'https://goo.gl/maps/jiDNtyh3hLCamjoC7',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via Getcontact',
            'plat_nomor' => 'AB 1857 IU',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '007',
            'name' => 'Baitul Maal Hidayatullah',
            'lokasi_id' => '5',
            'nomor' => '085877177162',
            'alamat' => ' ',
            'link_alamat' => ' ',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via Getcontact',
            'plat_nomor' => 'AB 9523 QA',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
            ]);
            
        Relawan::create([
            'id' => '008',
            'name' => 'DT Peduli',
            'lokasi_id' => '5',
            'nomor' => '085877177162',
            'alamat' => 'Jl. H. Agus Salim No.56 A, Notoprajan, Ngampilan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55262',
            'link_alamat' => 'https://goo.gl/maps/6G6QhTY7GMojAUtA8',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via Getcontact',
            'plat_nomor' => 'AB 6587 XP',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '009',
            'name' => 'Dompet Dhuafa DIY',
            'lokasi_id' => '5',
            'nomor' => '085103004489',
            'alamat' => 'Jl. Madubronto No.35, Patangpuluhan, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55251',
            'link_alamat' => 'https://goo.gl/maps/cmf7CGqNZMmmcNT19',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via Getcontact',
            'plat_nomor' => 'AB 2047 MA',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
            ]);
            
        Relawan::create([
            'id' => '010',
            'name' => 'Global Transport',
            'lokasi_id' => '5',
            'nomor' => '087839991000',
            'alamat' => 'Jl. Imogiri Tim. No.200B, Giwangan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55163',
            'link_alamat' => 'https://goo.gl/maps/R2hDKHtmDJgnMbL66',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via Telepon',
            'plat_nomor' => 'AB 9047 DH',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);

        Relawan::create([
            'id' => '011',
            'name' => 'Global Transport',
            'lokasi_id' => '5',
            'nomor' => '087839991000',
            'alamat' => 'Jl. Imogiri Tim. No.200B, Giwangan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55163',
            'link_alamat' => 'https://goo.gl/maps/udj1Swo1fSUMEYP19',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 7532 IK',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '012',
            'name' => 'Human Initiative',
            'lokasi_id' => '5',
            'nomor' => '08112646123',
            'alamat' => 'Jl. Bangirejo Taman No.9, Karangwaru, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55241',
            'link_alamat' => 'https://goo.gl/maps/BSyepEkrtHfvLyY28',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 7248 VS',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '013',
            'name' => 'Inisiatif Zakat Indonesia DIY',
            'lokasi_id' => '5',
            'nomor' => '081218880121',
            'alamat' => 'Jl. Bangirejo Taman No.12, RT.36/RW.10, Karangwaru, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55241',
            'link_alamat' => 'https://goo.gl/maps/iXSRTXHNckQC9jXn8',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Chat Whatsapp',
            'plat_nomor' => 'AB 3765 TI',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
            
        Relawan::create([
            'id' => '014',
            'name' => 'Ambulance Anugrah Wijaya',
            'lokasi_id' => '5',
            'nomor' => '085893010118',
            'alamat' => 'Jl. Prawirotaman Timuran No.651 RT.33, RW.09, Brontokusuman, Kec. Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55153',
            'link_alamat' => 'https://g.page/ambulancejogja?share',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via WhatsApp',
            'plat_nomor' => 'AB 6834 TS',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '015',
            'name' => 'LAZIS Muhammadiyah',
            'lokasi_id' => '5',
            'nomor' => '081904058055',
            'alamat' => 'Jl. Gedongkuning No.152, RT.41, Rejowinangun, Kec. Kotagede',
            'link_alamat' => 'https://goo.gl/maps/HpTPh678bbMbgNF77',
            'jenis_id' => '1',
            'vertifikasi' => 'Terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Chat Whatsapp',
            'plat_nomor' => 'AB 9392 RS',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '016',
            'name' => 'LAZISNU DIY',
            'lokasi_id' => '5',
            'nomor' => '08113601926',
            'alamat' => 'Jl. MT. Haryono No.40-42, Suryodiningratan, Kec. Mantrijeron',
            'link_alamat' => 'https://goo.gl/maps/ZkmDG5NfVDjK9a7Z9',
            'jenis_id' => '1',
            'vertifikasi' => 'Terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Chat Whatsapp',
            'plat_nomor' => 'AB 5714 TF',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '017',
            'name' => 'Muhammadiyah Commad Center Yogyakarta',
            'lokasi_id' => '5',
            'nomor' => '081227429495',
            'alamat' => 'Jl. Sultan Agung No.14, Wirogunan, Pakualaman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55151',
            'link_alamat' => 'https://goo.gl/maps/qGgXTN2dh1cUh67R6',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 4652 TS',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);

        Relawan::create([
            'id' => '018',
            'name' => 'Sewa ambulance mer-c jogja',
            'lokasi_id' => '1',
            'nomor' => '85740632111',
            'alamat' => 'Jl. Arjuna, Kalongan, Tlogoadi, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55286',
            'link_alamat' => 'https://goo.gl/maps/ThT4xKrnWDfbQCtu7',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Chat Whatsapp',
            'plat_nomor' => 'AB 3759 TU',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '019',
            'name' => 'Layanan Ambulan Gratis',
            'lokasi_id' => '2',
            'nomor' => '087819121000',
            'alamat' => 'JBibis, Bangunjiwo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55184',
            'link_alamat' => 'https://goo.gl/maps/grW1cKFmxq7x3mDr7',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Chat Whatsapp',
            'plat_nomor' => 'AB 9823 GJ',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '020',
            'name' => 'Sewa Ambulan Jogja',
            'lokasi_id' => '5',
            'nomor' => '087813311912',
            'alamat' => ' Jl. Jogja - Wonosari No.Km. 14, Mungur, Srimartani, Kec. Piyungan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55792',
            'link_alamat' => 'https://goo.gl/maps/uALZAvaNQUU6Hzcs6',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Chat Whatsapp',
            'plat_nomor' => 'AB 4876 IH',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
            
        Relawan::create([
            'id' => '021',
            'name' => 'Layanan AmbulanMu Sewon Utara',
            'lokasi_id' => '2',
            'nomor' => '082323072308',
            'alamat' => 'Salakan, Bangunharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188',
            'link_alamat' => 'https://goo.gl/maps/bcoAf7wyvivhVZ2p8',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Vertifikasi Via WhatsApp',
            'plat_nomor' => 'AB 8546 HK',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '022',
            'name' => 'Ambulance Ummat',
            'lokasi_id' => '2',
            'nomor' => '081298735720',
            'alamat' => ' Manukan, Sendangsari, Kec. Pajangan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55751',
            'link_alamat' => 'https://goo.gl/maps/GNHdgZtdEHzLT4mB8 ',
            'jenis_id' => '1',
            'vertifikasi' => 'Terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Chat Whatsapp',
            'plat_nomor' => 'AB 5834 FG',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '023',
            'name' => 'Layanan Ambulan PCM Depok',
            'lokasi_id' => '1',
            'nomor' => '085602497683',
            'alamat' => 'Jl. Kradenan, Meguwo, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282',
            'link_alamat' => 'https://goo.gl/maps/vWoyTBR2TZaRLVJ97',
            'jenis_id' => '1',
            'vertifikasi' => 'Terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Chat Whatsapp',
            'plat_nomor' => 'AB 5543 KN',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '024',
            'name' => 'PCM Bantul',
            'lokasi_id' => '2',
            'nomor' => '081904097878',
            'alamat' => 'Jl. Jend. A. Yani No.30, Area Sawah, Bantul, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55711',
            'link_alamat' => 'https://goo.gl/maps/9Ufag4Xg4z9vui7s5',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 5378 LM',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            

        Relawan::create([
            'id' => '025',
            'name' => 'PCM Depok Sleman',
            'lokasi_id' => '1',
            'nomor' => '8122733803',
            'alamat' => 'Jl. Kradenan, Meguwo, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282',
            'link_alamat' => 'https://goo.gl/maps/wfF6PxtRGWPKcSHYA',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 8872 KH',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '026',
            'name' => 'PCS 119 Bantul',
            'lokasi_id' => '2',
            'nomor' => '(0274) 2811119',
            'alamat' => 'Jalan Srandakan KM1, Dagaran, Palbapang, Kecamatan Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta',
            'link_alamat' => 'https://goo.gl/maps/TjphE878h4NTbPhZ9',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 3872 IG',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '027',
            'name' => 'PCS 119 Kulonprogo',
            'lokasi_id' => '5',
            'nomor' => '82258800119',
            'alamat' => ' Jl. Suparman No.1, Terbah, Wates, Kec. Wates, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55651',
            'link_alamat' => 'https://goo.gl/maps/dugSxj25CotSdNr7A',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 7645 RC',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
            
        Relawan::create([
            'id' => '028',
            'name' => 'PSC 119 YES Kota Jogja',
            'lokasi_id' => '5',
            'nomor' => '(0274) 420118',
            'alamat' => 'Komplek Balaikota, Jl. Ireda, Muja Muju, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55165',
            'link_alamat' => 'https://goo.gl/maps/bcoAf7wyvivhVZ2p8',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 5463 KA',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '029',
            'name' => 'Panti Syihabudin',
            'lokasi_id' => '1',
            'nomor' => '87848209777',
            'alamat' => ' 8CRP+3PF, Sembungan, Wukirsari, Kec. Cangkringan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55583',
            'link_alamat' => 'https://goo.gl/maps/thpMiir6xJ6hvQUM6',
            'jenis_id' => '1',
            'vertifikasi' => 'Terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Getcontact',
            'plat_nomor' => 'AB 6654 TQ',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '030',
            'name' => 'Relawan PKS',
            'lokasi_id' => '1',
            'nomor' => '87838927473',
            'alamat' => 'Jl. Wira Jaya No.132 D, Gejayan, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
            'link_alamat' => 'https://goo.gl/maps/kgHBk4mvqpdCBSbn7',
            'jenis_id' => '1',
            'vertifikasi' => 'Terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Telepon',
            'plat_nomor' => 'AB 7528 MN',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
        Relawan::create([
            'id' => '031',
            'name' => 'Rumah Zakat',
            'lokasi_id' => '5',
            'nomor' => '(0274) 377671',
            'alamat' => 'Jl. Veteran No.9, Muja Muju, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55165',
            'link_alamat' => 'https://goo.gl/maps/niPVCgR37LE78EA29',
            'jenis_id' => '1',
            'vertifikasi' => 'terverifikasi',
            'via_vertifikasi' => 'Verifikasi via Getcontact',
            'plat_nomor' => 'AB 6453 IH',
            'kondisi_mobil' => 'Sangat Baik',
            'foto_dalam' => 'Tidak ada',
            'foto_luar' => 'Tidak ada'
        ]);
            
    }
}