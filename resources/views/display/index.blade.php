<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disfo Desa Banyumudal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body background="{{ asset('background/'.$background->foto) }}" style="background-size: cover;">
   <style>
      .custom-marquee {
        font-size: 25px; /* Sesuaikan ukuran teks sesuai keinginan Anda */
      }
      .custom-toast {
    max-width: 800px; /* Set the maximum width as per your preference */
  }

  .custom-toast .toast-body {
    font-size: 25px; /* Set the font size as per your preference */
  }
  .galeri-desa img {
    height: 340px; /* Set the desired height */
    object-fit: cover; /* Adjust as needed (cover, contain, etc.) */
    width: 100%; /* Ensure the width takes up the full space within the carousel */
  }
  .perangkat-desa img {
    height: 90px; /* Set the desired height */
    object-fit: cover; /* Adjust as needed (cover, contain, etc.) */
    width: 100px; /* Ensure the width takes up the full space within the carousel */
  }
  .iklan-desa img {
    height: 270px; /* Set the desired height */
    object-fit: cover; /* Adjust as needed (cover, contain, etc.) */
    width: 100%; /* Ensure the width takes up the full space within the carousel */
  }
  .kolom {
    height: 100px; /* Set the height of the card */
    overflow-y: auto; /* Enable vertical scrolling */
  }
    </style>
   <div class="row">
      <div class="col d-flex align-items-center" style="background:linear-gradient(to right, rgb(37, 37, 37), rgb(65, 65, 65));">
          <div class="col-1">
          <img src="{{asset('admintemplate/img/logopemalang.png')}}" style="width:100px;float:right" class="mr-2">
        </div>
        <div class="col-9">
          <h3 class="mb-0 text-light">{{ $display->header }}</h3>
          <h6 class="mb-0 text-light">{{ $display->sub_header }}</h6>
        </div>
        <div class="col-2" style="padding-right: 2rem">
          <h6 class="mb-0 text-light text-end" id="dateDisplay"></h6>
          <h5 class="mb-0 text-light text-end" id="timeDisplay"></h5>
        </div>
        
      </div>
  </div>
  
      <div class="row" style="margin-bottom:-10px">
        <div class="col-6">
          <div class="container py-4 px-4">
  <div class="card text-dark border border-dark border-3">
    <div id="carouselAgendaDesa" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @if($jumlahAgenda==0)
        <div class="carousel-item galeri-desa active">
          <img src="{{asset('admintemplate/img/tidakAdaAgendaDesa.png')}}" class="d-block w-100 card-img" alt="slide1">
        </div>

        <div class="card-img-overlay">
          <h5 class="card-title text-dark text-center">
            <span class="highlight-text d-inline-block align-middle" style="background-color: rgba(255, 255, 255, 0.5); border: 1px solid rgb(0, 0, 0); padding: 10px;">
              <strong>AGENDA DESA</strong>
            </span>
          </h5>
          <div class="row" style="margin-top:145px;margin-bottom:-20px">
            <div class="col-3">
              <div class="container px-4">

                <div class="row" style="border-radius: 10px; border: 1px solid #000000;background-color: rgba(255, 255, 255, 0.6);">
                  <div class="col">
                    <p class="card-text text-center text-dark" style="height:30px;font-size:15px;margin-top:2px;"><strong id="waktu">-</strong></p>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-9">

            </div>
          </div>
          <div class="row">

            <div class="col-3">
              <div class="container p-4">
                {{-- <div class="card">
                  <div class="card-body"> --}}
                    <div class="row" style="border-radius: 10px 10px 0 0;border: 1px solid #000000;background-color: rgba(255, 23, 23, 0.6);">
                      <div class="col">
                        <p class="card-text text-center text-light" style="height:30px;"><strong id="bulanTahun">-</strong></p>
                      </div>
                    </div>
                    <div class="row" style="border-radius: 0 0 10px 10px;border: 1px solid #000000;border-top:none;background-color: rgba(255, 255, 255, 0.6);">
                      <div class="col">
                        <p class="card-text text-dark text-center" style="height:50px;padding-top:10px"><strong id="tanggal">-</strong></p>
                      </div>
                    </div>
                  {{-- </div>
                </div> --}}
                
            </div>
            </div>
            <div class="col-9">
              <div class="container p-4">
                {{-- <div class="card">
                  <div class="card-body"> --}}
                    <div class="row">
                      <div class="col" style="border-radius: 10px 10px 0 0;background-color: rgba(180, 180, 180, 0.6);border: 1px solid #000000;">
                        <p class="card-text text-dark text-left" style="height:50px;padding-top:10px"><strong id="nama_agenda">-</strong></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-1" style="border-radius: 0 0 0 10px;border: 1px solid #000000;border-top: none;border-right: none;background-color: rgba(255, 171, 171, 0.5);">
                        {{-- <p class="card-text text-dark text-center" style="height:30px;padding-top:2px"><strong>B</strong></p> --}}
                        <img src="{{asset('admintemplate/img/logo-lokasi.png')}}" style="width:20px;height:auto;">
                      </div>
                      <div class="col-11" style="background-color: rgba(255, 255, 255, 0.6);border-radius: 0 0 10px 0;border: 1px solid #000000;border-top: none;">
                        <p class="card-text text-dark text-left" style="height:30px;padding-top:2px"><strong id="lokasi">-</strong></p>
                      </div>
                    </div>
                  {{-- </div>
                </div> --}}
              </div>
            </div>


          </div>
        </div>
        @else
        @foreach($agenda as $data)
          <div class="carousel-item galeri-desa @if($loop->first) active @endif">
            <img src="{{ asset('admintemplate/img/' . $data->foto) }}" class="d-block w-100 card-img" alt="slide1">
          </div>
        @endforeach
        <div class="card-img-overlay">
          <h5 class="card-title text-dark text-center">
            <span class="highlight-text d-inline-block align-middle" style="background-color: rgba(255, 255, 255, 0.5); border: 1px solid rgb(0, 0, 0); padding: 10px;">
              <strong>AGENDA DESA</strong>
            </span>
          </h5>
          <div class="row" style="margin-top:145px;margin-bottom:-20px">
            <div class="col-3">
              <div class="container px-4">

                <div class="row" style="border-radius: 10px; border: 1px solid #000000;background-color: rgba(255, 255, 255, 0.6);">
                  <div class="col">
                    <p class="card-text text-center text-dark" style="height:30px;font-size:15px;margin-top:2px;"><strong id="waktu">{{ $agenda[0]->waktu }}</strong></p>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-9">

            </div>
          </div>
          <div class="row">

            <div class="col-3">
              <div class="container p-4">
                {{-- <div class="card">
                  <div class="card-body"> --}}
                    <div class="row" style="border-radius: 10px 10px 0 0;border: 1px solid #000000;background-color: rgba(255, 23, 23, 0.6);">
                      <div class="col">
                        <p class="card-text text-center text-light" style="height:30px;"><strong id="bulanTahun">{{ $agenda[0]->bulan_tahun }}</strong></p>
                      </div>
                    </div>
                    <div class="row" style="border-radius: 0 0 10px 10px;border: 1px solid #000000;border-top:none;background-color: rgba(255, 255, 255, 0.6);">
                      <div class="col">
                        <p class="card-text text-dark text-center" style="height:50px;padding-top:10px"><strong id="tanggal">{{ $agenda[0]->tanggal }}</strong></p>
                      </div>
                    </div>
                  {{-- </div>
                </div> --}}
                
            </div>
            </div>
            <div class="col-9">
              <div class="container p-4">
                {{-- <div class="card">
                  <div class="card-body"> --}}
                    <div class="row">
                      <div class="col" style="border-radius: 10px 10px 0 0;background-color: rgba(180, 180, 180, 0.6);border: 1px solid #000000;">
                        <p class="card-text text-dark text-left" style="height:50px;padding-top:10px"><strong id="nama_agenda">{{ $agenda[0]->nama_agenda }}</strong></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-1" style="border-radius: 0 0 0 10px;border: 1px solid #000000;border-top: none;border-right: none;background-color: rgba(255, 171, 171, 0.5);">
                        {{-- <p class="card-text text-dark text-center" style="height:30px;padding-top:2px"><strong>B</strong></p> --}}
                        <img src="{{asset('admintemplate/img/logo-lokasi.png')}}" style="width:20px;height:auto;">
                      </div>
                      <div class="col-11" style="background-color: rgba(255, 255, 255, 0.6);border-radius: 0 0 10px 0;border: 1px solid #000000;border-top: none;">
                        <p class="card-text text-dark text-left" style="height:30px;padding-top:2px"><strong id="lokasi">{{ $agenda[0]->lokasi }}</strong></p>
                      </div>
                    </div>
                  {{-- </div>
                </div> --}}
              </div>
            </div>


          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>


        </div>
        
        <div class="col-6">

          <div class="container py-4 px-4">
            <div class="card text-dark border border-dark border-3">
              <iframe id="youtubeVideo" width="100%" height="340" src="https://www.youtube.com/embed/{{ $display->link_youtube }}?autoplay=1&loop=1&autopause=0&muted=1" frameborder="0" allow='autoplay' allowfullscreen></iframe>
            </div>
          </div>
          


        </div>


      </div>
      <div class="row">
<div class="col-8">
      <div class="row" style="margin-bottom:10px">
        <div class="col d-flex justify-content-center">

          <div class="card w-100 mx-4 border border-dark border-2" style="background-color: rgba(255, 255, 255, 0.6);">
            <div class="card-body">
                <h5 class="card-title mb-0" style="border-bottom: 2px solid #000000;padding-bottom: 5px;"><strong>{{ $display->title1 }}</strong></h5>
                <div class="kolom" id="scrollingDiv1">
                <p class="card-text my-0"><br></p>
                <p class="card-text my-0"><strong>{!! nl2br($display->text1) !!}</strong></p>
              </div>
            </div>
        </div>
        
  
      </div>
      <div class="col d-flex justify-content-center">

        <div class="card w-100 mx-4 border border-dark border-2" style="background-color: rgba(255, 255, 255, 0.6);">
          <div class="card-body">
              <h5 class="card-title mb-0" style="border-bottom: 2px solid #000000;padding-bottom: 5px;"><strong>{{ $display->title2 }}</strong></h5>
              <div class="kolom" style="" id="scrollingDiv2">
                <p class="card-text my-0"><br></p>
                <p class="card-text my-0"><strong>{!! nl2br($display->text2) !!}</strong></p>
            </div>
          </div>
      </div>
      

    </div>

  </div>


  <div class="row" style="margin-bottom:10px">
    <div class="col d-flex justify-content-center">

      <div class="card w-100 mx-4 border border-dark border-2" style="background-color: rgba(255, 255, 255, 0.6);">
        <div class="card-body">
            <h5 class="card-title mb-0" style="border-bottom: 2px solid #000000;padding-bottom: 5px;"><strong>{{ $display->title3 }}</strong></h5>
            <div class="kolom" id="scrollingDiv3">
            <p class="card-text my-0"><br></p>
            <p class="card-text my-0"><strong>{!! nl2br($display->text3) !!}</strong></p>
          </div>
        </div>
    </div>
    

  </div>
  <div class="col d-flex justify-content-center">

    <div class="card w-100 mx-4 border border-dark border-2" style="background-color: rgba(255, 255, 255, 0.6);">
      <div class="card-body">
          <h5 class="card-title mb-0" style="border-bottom: 2px solid #000000;padding-bottom: 5px;"><strong>{{ $display->title4 }}</strong></h5>
          <div class="kolom" style="" id="scrollingDiv4">
            <p class="card-text my-0"><br></p>
            <p class="card-text my-0"><strong>{!! nl2br($display->text4) !!}</strong></p>
        </div>
      </div>
  </div>
  

</div>

</div>

</div>

<div class="col-4">
  <div class="row" style="margin-bottom:10px">
<div class="col d-flex justify-content-center">

      <div class="card w-100 mx-4 border border-dark border-2" style="background-color: rgba(255, 255, 255, 0.6);">
        <div class="card-body">
            <h5 class="card-title mb-0" style="border-bottom: 2px solid #000000;padding-bottom: 5px;">
                <strong>{{ $display->title5 }}</strong>
            </h5>
            <div class="row">
                <div class="col">
                    <div class="carousel slide" style="margin-top:5px" data-bs-ride="carousel">
                        <div class="carousel-inner">

                          @foreach($iklan as $key => $data)
                          <div class="carousel-item iklan-desa {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset('iklan/' . $data->foto) }}" class="d-block w-100 card-img" alt="slide2">
                        </div>
                        @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    </div>
  </div>

  
</div>
</div>



       <div class="row">
         <div class="col bg-danger">
            <marquee behavior="scroll" class="custom-marquee text-light" direction="left">{{ $display->running_text }}</marquee>

         </div>
      </div>


      {{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

      <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast custom-toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="{{asset('admintemplate/img/logopemalang.png')}}" style="width:40px" class="rounded me-2">
            <strong class="me-auto">Balai Desa Banyumudal</strong>
            <small>Baru Saja</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div> --}}

      <script>
        var toastTrigger = document.getElementById('liveToastBtn');
        var toastLiveExample = document.getElementById('liveToast');
      
        if (toastTrigger) {
          toastTrigger.addEventListener('click', function () {
            var toast = new bootstrap.Toast(toastLiveExample);
      
            toast.show();
          });
        }
      </script>
<script>
  var scrollingDiv1 = document.getElementById("scrollingDiv1");
  var scrollSpeed1 = 1; // Kecepatan scroll (nilai yang lebih besar berarti lebih lambat)

  function startScroll1(timestamp) {
    var currentScroll1 = scrollingDiv1.scrollTop;
    var targetScroll1 = scrollingDiv1.scrollHeight - scrollingDiv1.clientHeight;

    if (currentScroll1 < targetScroll1) {
      currentScroll1 += scrollSpeed1;
    } else {
      // Setelah mencapai bawah, reset ke atas
      currentScroll1 = 0;
    }

    scrollingDiv1.scrollTop = currentScroll1;

    // Memanggil startScroll pada frame berikutnya
    requestAnimationFrame(startScroll1);
  }

  // Panggil startScroll untuk pertama kali
  setTimeout(function() {
    requestAnimationFrame(startScroll1);
  }, 2000);
</script>

<script>
  var scrollingDiv2 = document.getElementById("scrollingDiv2");
  var scrollSpeed2 = 1; // Kecepatan scroll (nilai yang lebih besar berarti lebih lambat)

  function startScroll2(timestamp) {
    var currentScroll2 = scrollingDiv2.scrollTop;
    var targetScroll2 = scrollingDiv2.scrollHeight - scrollingDiv2.clientHeight;

    if (currentScroll2 < targetScroll2) {
      currentScroll2 += scrollSpeed2;
    } else {
      // Setelah mencapai bawah, reset ke atas
      currentScroll2 = 0;
    }

    scrollingDiv2.scrollTop = currentScroll2;

    // Memanggil startScroll pada frame berikutnya
    requestAnimationFrame(startScroll2);
  }

  // Panggil startScroll untuk pertama kali
  setTimeout(function() {
    requestAnimationFrame(startScroll2);
  }, 2000);
</script>

<script>
  var scrollingDiv3 = document.getElementById("scrollingDiv3");
  var scrollSpeed3 = 1; // Kecepatan scroll (nilai yang lebih besar berarti lebih lambat)

  function startScroll3(timestamp) {
    var currentScroll3 = scrollingDiv3.scrollTop;
    var targetScroll3 = scrollingDiv3.scrollHeight - scrollingDiv3.clientHeight;

    if (currentScroll3 < targetScroll3) {
      currentScroll3 += scrollSpeed3;
    } else {
      // Setelah mencapai bawah, reset ke atas
      currentScroll3 = 0;
    }

    scrollingDiv3.scrollTop = currentScroll3;

    // Memanggil startScroll pada frame berikutnya
    requestAnimationFrame(startScroll3);
  }

  // Panggil startScroll untuk pertama kali
  setTimeout(function() {
    requestAnimationFrame(startScroll3);
  }, 2000);
</script>


<script>
  var scrollingDiv4 = document.getElementById("scrollingDiv4");
  var scrollSpeed4 = 1; // Kecepatan scroll (nilai yang lebih besar berarti lebih lambat)

  function startScroll4(timestamp) {
    var currentScroll4 = scrollingDiv4.scrollTop;
    var targetScroll4 = scrollingDiv4.scrollHeight - scrollingDiv4.clientHeight;

    if (currentScroll4 < targetScroll4) {
      currentScroll4 += scrollSpeed4;
    } else {
      // Setelah mencapai bawah, reset ke atas
      currentScroll4 = 0;
    }

    scrollingDiv4.scrollTop = currentScroll4;

    // Memanggil startScroll pada frame berikutnya
    requestAnimationFrame(startScroll4);
  }

  // Panggil startScroll untuk pertama kali
  setTimeout(function() {
    requestAnimationFrame(startScroll4);
  }, 2000);
</script>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    {{-- <script>
      $('#carouselPerangkatDesa').on('slid.bs.carousel', function (e) {
          var nama;
          var jabatan;

          switch (e.to) {
              case 0:
                  nama = 'Prabowo Subianto';
                  jabatan = 'Presiden Indonesia';
                  break;
              case 1:
                  nama = 'Vladimir Putin';
                  jabatan = 'Presiden Russia';
                  break;
              case 2:
                  nama = 'Bose';
                  jabatan = 'Kucing';
                  break;
              default:
                  nama = '';
          }
  
          $('#namaDetail').text(nama);
          $('#jabatanDetail').text(jabatan);
      });
  </script> --}}

<script>
  var agendaData = @json($agenda);
  // Mendeteksi perubahan slide pada carousel setelah selesai transisi
  $('#carouselAgendaDesa').on('slid.bs.carousel', function (e) {
      var nama_agenda;
      var waktu;
      var bulanTahun;
      var tanggal;
      var agenda;
      var lokasi;


      if (agendaData[e.to]) {
            nama_agenda = agendaData[e.to].nama_agenda;
            waktu = agendaData[e.to].waktu;
            bulan_tahun = agendaData[e.to].bulan_tahun;
            tanggal = agendaData[e.to].tanggal;
            agenda = agendaData[e.to].agenda;
            lokasi = agendaData[e.to].lokasi;
        }

      // Memperbarui teks pada elemen dengan id 'namaDetail' dan 'jabatanDetail'
        $('#nama_agenda').text(nama_agenda || '');
        $('#waktu').text(waktu || '');
        $('#bulanTahun').text(bulan_tahun || '');
        $('#tanggal').text(tanggal || '');
        $('#agenda').text(agenda || '');
        $('#lokasi').text(lokasi || '');
  });
</script>

<script>
  // Menangkap elemen iframe
  var youtubeVideo = document.getElementById('youtubeVideo');

  // Menambahkan event listener untuk mendeteksi akhir video
  youtubeVideo.addEventListener('ended', function() {
    // Memulai ulang video
    youtubeVideo.src += "?autoplay=1";
  });
</script>

  
<script>
  function updateClock() {
    // Mendapatkan waktu saat ini
    var now = new Date();
  
    // Mendapatkan elemen-elemen HTML yang akan diubah
    var dateDisplay = document.getElementById('dateDisplay');
    var timeDisplay = document.getElementById('timeDisplay');
  
    // Mendapatkan informasi tanggal dan waktu
    var dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    var timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false, timeZoneName: 'short' };
  
    // Memperbarui teks pada elemen HTML
    dateDisplay.textContent = now.toLocaleDateString('id-ID', dateOptions);
    timeDisplay.textContent = now.toLocaleTimeString('id-ID', timeOptions).replace(/\./g, ' : ');
  }
  
  // Memanggil fungsi updateClock setiap detik (1000 milidetik)
  setInterval(updateClock, 1000);
  
  // Memanggil fungsi updateClock pada saat halaman pertama kali dimuat
  updateClock();
</script>

  
  </body>
</html>


