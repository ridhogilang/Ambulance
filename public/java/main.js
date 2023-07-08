(function($) {
    "use strict"; 
    // Pengguliran halus menggunakan pelonggaran jQuery
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 70)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
  
    // Menutup menu responsif ketika tautan pemicu gulir diklik
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Aktifkan scrollspy untuk menambahkan kelas aktif ke item navbar di scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 100
    });
  
    // Ciutkan Navbar
    var navbarCollapse = function() {
      if ($("#mainNav").offset().top > 100) {
        $("#mainNav").addClass("navbar-shrink");
      } else {
        $("#mainNav").removeClass("navbar-shrink");
      }
    };
    // Ciutkan sekarang jika halaman tidak berada di atas
    navbarCollapse();
    // Perkecil bilah navigasi saat halaman digulir
    $(window).scroll(navbarCollapse);
  
  })(jQuery); // Akhir penggunaan 

  const questions = document.querySelectorAll('.question-answer');

  questions.forEach(function(question) {
      const btn = question.querySelector('.question-btn');
      btn.addEventListener("click", function() {
          questions.forEach(function(item) {
              if (item !== question) {
                  item.classList.remove("show-text");
              }
          })
          question.classList.toggle("show-text");
      })
  })


  const copyBtn = document.getElementById('copyBtn')
  const copyText = document.getElementById('copyText')
            
  copyBtn.onclick = () => {
    copyText.select();    // Selects the text inside the input
    document.execCommand('copy');    // Simply copies the selected text to clipboard 
      Swal.fire({         //displays a pop up with sweetalert
        icon: 'success',
        title: 'Text copied to clipboard',
        showConfirmButton: false,
        timer: 1000
      });
  }