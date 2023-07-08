var image_holder = $("#image-holder");
var reader;
var files = "";
$("#fotoktp").on('change',function (f) {
      if (typeof (FileReader) != "undefined") {        
        image_holder.empty();
        files = f.target.files;

        reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-preview"
            }).appendTo(image_holder);            
        }
        image_holder.show();

        var data = new FormData();
        var my_url = "https://cariambulan.com/save-ktp";
        if (files.length > 0) {
           data.append("fotoktp",files[0]);
        } else {
           data.append("fotoktp","");
        }
        data.append('_token','MOzKmGm928YxmOhvAmw8Ut4Dqld8GAR382YLsET6');
        $.ajax({
          type: "POST",
          url: my_url,
          contentType: false,
          processData: false,
          data: data,
          dataType: 'json',
          success: function (res) {
            console.log(res['file']);
            $("#filektp").val(res['file']);
          },
          error: function (data) {
              console.log("Error:" + data);
          }
        });        
        reader.readAsDataURL($(this)[0].files[0]);
        $("#remove_btn").show();
      } else {
        alert("this browser does not support FileReader.");
      }
   });
$("#remove_btn").click(function(){
  image_holder.empty();
  files = "";
  $("#filektp").val('');
  $("#remove_btn").hide();
});
$("#form").trigger('reset');
$("#kecamatan").on('change',function(e){
    var kec = e.target.value;
    $.get("https://cariambulan.com/getdesa/" + kec, function (data) {
      $("#desa").empty();
      $("#desa").append("<option value='0'> Pilih Desa </option>");
      $.each(data, function(index,subcatObj){
          $('#desa').append('<option value="'+subcatObj.id+'">'+subcatObj.desa_name+'</option>');
      });
    });
});

$("#jenis").on('change',function(e){
  var jenis = e.target.value;
  if (jenis==1) {
     $(".tipe1,#infeksi-wrapper,#kondisi-wrapper,#tujuan-wrapper").fadeIn("fast");
     $(".tipe2,#prokes-wrapper").fadeOut('fast');
     $("#pilihlokasi").empty();
    $("#pilihlokasi").append("<option value='-'> Pilih Lokasi </option><option value='Rumah'>Rumah</option><option value='Lain'>Rumah Sakit/lainnya</option>");
    $("#rumah-tinggal").html('Rumah Tinggal');
    $("#alamat").attr("placeholder","Alamat Tinggal/nama jalan");
  } else if (jenis==2) {
    $('.tipe2,#prokes-wrapper').fadeIn("fast");
    $(".tipe1,#infeksi-wrapper,#kondisi-wrapper,#tujuan-wrapper").fadeOut('fast');
    $("#pilihlokasi").empty();
    $("#pilihlokasi").append("<option value='-'> Pilih Lokasi </option><option value='Rumah'>Rumah Duka</option><option value='Lain'>Rumah Sakit/lainnya</option>");
    $("#rumah-tinggal").html('Rumah Duka');
    $("#alamat").attr("placeholder","Alamat Rumah Duka");
  } 
});

$("#pilihlokasi").on('change', function(e){
  var loc = e.target.value;
  if (loc=='Rumah') {
    $("#lokasi").val($("#alamat").val()).fadeIn('fast');
    $("#keterangan-lokasi").fadeIn('fast');
  } else if (loc=='Lain') {
    $("#lokasi").attr('placeholder','tulis nama rumah sakit/lainnya').val('').fadeIn('fast');
    $("#keterangan-lokasi").fadeOut('fast');
  } else {
    $("#lokasi,#keterangan-lokasi").fadeOut('fast');
  }
});

$("#pilihtujuan").on('change', function(e){
  var loc = e.target.value;
  if (loc=='Rumah') {
    $("#tujuan").val($("#alamat").val()).fadeIn('fast');
    $("#keterangan-tujuan").fadeIn('fast');
  } else if (loc=='Lain') {
    $("#tujuan").attr('placeholder','tulis nama rumah sakit/lainnya').val('').fadeIn('fast');
  } else {
    $("#tujuan").fadeOut('fast');
  }
});

$("input:radio[name=status]").on('change',function(e){
  var status = e.target.value;
  if (status=='Darurat') {
    $("#tanggal-wrapper,#waktu-wrapper").fadeOut('fast');
  } else {
    $("#tanggal-wrapper,#waktu-wrapper").fadeIn('fast');
  }
});

$('.input-group.date').datepicker({
    language: "id",
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy-mm-dd',
});

$("#btn-camera").click(function(e)
{
  e.preventDefault();
  var  data = new FormData(); 
  data.append('_token','MOzKmGm928YxmOhvAmw8Ut4Dqld8GAR382YLsET6');
  data.append('name',$("#nama").val());
  data.append('alamat',$("#alamat").val());
  data.append('rtrw',$("#rtrw").val());
  data.append('desa',$("#desa").val());
  data.append('kecamatan',$("#kecamatan").val());
  data.append('jenis',$("#jenis").val());
  data.append('nohp',$("#nohp").val());
  data.append('acara',$("#acara").val());
  data.append('lama',$("#lama").val());
  data.append('makam',$("#makam").val());
  data.append('almarhum',$("#almarhum").val());
  data.append('lokasi',$("#lokasi").val());
  data.append('tujuan',$("#tujuan").val());
  data.append('tanggal',$("#tanggal").val());
  data.append('pukul',$("#pukul").val());
  data.append('jenisantar',$("input:radio[name=jenisantar]:checked").val());
  data.append('infeksius',$("input:radio[name=infeksius]:checked").val());
  data.append('status',$("input:radio[name=status]:checked").val());
  data.append('prokes',$("input:radio[name=prokes]:checked").val());
  data.append('namapasien',$("#namapasien").val());
  data.append('nohp2',$("#nohp2").val());
  data.append('umur',$("#umur").val());
  data.append('penyakit',$("#penyakit").val());
  data.append('kondisi',$("input:radio[name=kondisi]:checked").val());
  data.append('antar',$("input:radio[name=antar]:checked").val());
  data.append('lain',$("#lain").val());
  var type = "POST";
  var my_url = "https://cariambulan.com/get-camera"; 

  $.ajax({
    type:type,
    url:my_url,
    data:data,
    contentType: false,
    processData: false,
    dataType: 'json',
    success: function(data){    
      document.location.href = "https://cariambulan.com/upload-ktp";
    },
    error: function (data) {
        console.log("Error:" + data);
    }
  });
});

$("#btn-kirim").click(function(e){
    e.preventDefault();    
    if ($("#nama").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Nama Penanggung jawab.'});
    } else if ($("#nohp").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan No HP.'});
    } else if ($("#jenis").val()==1 && $("#namapasien").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Nama Pasien.'});
    } else if ($("#alamat").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Alamat Tinggal.'});
    } else if ($("#rtrw").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan RT/RW.'});
    } else if ($("#kecamatan").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Kecamatan.'});
    } else if ($("#desa").val()=="0") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Desa/Kelurahan.'});
    }  else if ($("#jenis").val()==1 && $("#umur").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Umur Pasien.'});
    } else if ($("#jenis").val()==1 && $("input:radio[name=infeksius]:checked").val()==undefined) {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Kategori Infeksius.'});
    } else if ($("#jenis").val()==1 && $("#penyakit").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Penyakit Pasien.'});
    } else if ($("#jenis").val()==1 && $("input:radio[name=kondisi]:checked").val()==undefined) {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Kondisi Pasien.'});
    } else if ($("#jenis").val()==1 && $("input:radio[name=status]:checked").val()==undefined) {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Status Pengajuan.'});
    } else if ($("#jenis").val()==2 && $("input:radio[name=prokes]:checked").val()==undefined) {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Keterangan prokes.'});
    } else if ($("#lokasi").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Lokasi Penjemputan.'});
    } else if ($("#tujuan").val()=="" && $("#jenis").val()==1) {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Tujuan Penjemputan.'});
    } else if ($("#pilihtujuan").val()=="Rumah" && $("#pilihlokasi").val()=="Rumah") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda  memasukkan Tujuan Penjemputan yang sama.'});
    } else if ($("#jenis").val()==1 && $("input:radio[name=antar]:checked").val()==undefined) {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan dihantar pergi s/d pulang.'});
    } else if ($("#tanggal").val()=="") {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Tanggal Penjemputan.'});
    } else if ($("#pukul").val()=="" && $("input:radio[name=status]:checked").val()=='Biasa') {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Pukul Penjemputan.'});
    } else if ($("#almarhum").val()=="" && $("#jenis").val()==2) {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Nama Almarhum.'});
    } else if ($("#makam").val()=="" && $("#jenis").val()==2) {
      Swal.fire({icon:"error", title:'Perhatian', text:'Anda belum memasukkan Makam.'});
    } else {
      $("#loading").fadeIn('slow');
      $("#btn-kirim").fadeOut('fast');
      var  data = new FormData(); 
      //data.append("fotoktp",files[0]);
      data.append('_token','MOzKmGm928YxmOhvAmw8Ut4Dqld8GAR382YLsET6');
      data.append('name',$("#nama").val());
      data.append('alamat',$("#alamat").val());
      data.append('rtrw',$("#rtrw").val());
      data.append('desa',$("#desa").val());
      data.append('kecamatan',$("#kecamatan").val());
      data.append('jenis',$("#jenis").val());
      data.append('nohp',$("#nohp").val());
      data.append('acara',$("#acara").val());
      data.append('lama',$("#lama").val());
      data.append('makam',$("#makam").val());
      data.append('almarhum',$("#almarhum").val());
      data.append('lokasi',$("#lokasi").val());
      data.append('tujuan',$("#tujuan").val());
      data.append('tanggal',$("#tanggal").val());
      data.append('pukul',$("#pukul").val());
      data.append('jenisantar',$("input:radio[name=jenisantar]:checked").val());
      data.append('infeksius',$("input:radio[name=infeksius]:checked").val());
      data.append('status',$("input:radio[name=status]:checked").val());
      data.append('prokes',$("input:radio[name=prokes]:checked").val());
      data.append('namapasien',$("#namapasien").val());
      data.append('nohp2',$("#nohp2").val());
      data.append('umur',$("#umur").val());
      data.append('penyakit',$("#penyakit").val());
      data.append('kondisi',$("input:radio[name=kondisi]:checked").val());
      data.append('antar',$("input:radio[name=antar]:checked").val());
      data.append('lain',$("#lain").val());
      data.append('filektp',$("#filektp").val());
      var type = "POST";
      var my_url = "https://cariambulan.com/mobil"; 

      $.ajax({
        type:type,
        url:my_url,
        data:data,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(data){            
            Swal.fire({icon:"success", title:'Terima kasih', html:'Terima kasih atas pemesanan layanan mobil Lazismu Klaten.<br>Petugas kami akan segera menghubungi anda.<br>Pastikan WA anda aktif.<br>Jika dalam 15 menit tidak menerima notifikasi dari kami, hubungi call center kami',onClose: function(){
              document.location.href = "https://cariambulan.com";
            }});
            
        },
        error: function (data) {
            console.log("Error:" + data);
        }
      });
    }

});

function previewImage() {
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}