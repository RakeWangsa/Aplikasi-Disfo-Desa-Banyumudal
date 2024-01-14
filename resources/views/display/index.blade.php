<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disfo Desa Banyumudal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   <style>
      .custom-marquee {
        font-size: 30px; /* Sesuaikan ukuran teks sesuai keinginan Anda */
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
    height: 100px; /* Set the desired height */
    object-fit: cover; /* Adjust as needed (cover, contain, etc.) */
    width: 100%; /* Ensure the width takes up the full space within the carousel */
  }
  .kolom {
    height: 100px; /* Set the height of the card */
    overflow-y: auto; /* Enable vertical scrolling */
  }
    </style>
   <div class="row">
      <div class="col bg-dark d-flex align-items-center">
          <div class="col-1">
          <img src="{{asset('admintemplate/img/logopemalang.png')}}" style="width:100px;float:right" class="mr-2">
        </div>
        <div class="col-9">
          <h3 class="mb-0 text-light">Display Informasi Pemerintah Desa Banyumudal</h3>
          <h6 class="mb-0 text-light">Banyumudal Hebat Bermartabat</h6>
        </div>
        <div class="col-2" style="padding-right:2rem">
          <h6 class="mb-0 text-light" style="float:right">Minggu, 14 Januari 2024</h6>
          <h5 class="mb-0 text-light" style="float:right">14.00 WIB</h5>
        </div>
      </div>
  </div>
  
      <div class="row" style="margin-bottom:-10px">
        <div class="col-6 bg-light">

          <div class="container py-4 px-4">

            <div class="card text-dark" style="height:340px;object-fit:cover;width:100%">
              <img src="{{asset('admintemplate/img/gotongroyong.jpg')}}" class="card-img" style="height:340px;object-fit:cover;width:100%">
              <div class="card-img-overlay">
                <h5 class="card-title text-dark text-center">
                  <span class="highlight-text d-inline-block align-middle" style="background-color: white; border: 1px solid red; padding: 10px;">
                    <strong>AGENDA DESA</strong>
                  </span>
                </h5>
                <div class="row" style="margin-top:145px;margin-bottom:-20px">
                  <div class="col-3">
                    <div class="container px-4">

                      <div class="row bg-light" style="border-radius: 10px; border: 1px solid #DC3545;">
                        <div class="col">
                          <p class="card-text text-center text-dark" style="height:30px;font-size:15px;margin-top:2px"><strong>08.00 - 10.00</strong></p>
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
                          <div class="row bg-danger" style="border-radius: 10px 10px 0 0;border: 1px solid #DC3545;">
                            <div class="col">
                              <p class="card-text text-center text-light" style="height:30px;"><strong>Jan 2024</strong></p>
                            </div>
                          </div>
                          <div class="row bg-light" style="border-radius: 0 0 10px 10px;border: 1px solid #DC3545;">
                            <div class="col">
                              <p class="card-text text-dark text-center" style="height:50px;padding-top:10px"><strong>12</strong></p>
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
                            <div class="col bg-light" style="border-radius: 10px 10px 0 0;">
                              <p class="card-text text-dark text-center" style="height:50px;padding-top:10px"><strong>Gotong royong pembangungan masjid</strong></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-1 bg-dark" style="border-radius: 0 0 0 10px;">
                              {{-- <p class="card-text text-dark text-center" style="height:30px;padding-top:2px"><strong>B</strong></p> --}}
                              <img src="{{asset('admintemplate/img/logo-lokasi.png')}}" style="width:20px;height:auto;color:white">
                            </div>
                            <div class="col-11" style="background-color: #b4b4b4;border-radius: 0 0 10px 0;">
                              <p class="card-text text-dark text-center" style="height:30px;padding-top:2px"><strong>Balai Desa</strong></p>
                            </div>
                          </div>
                        {{-- </div>
                      </div> --}}
                    </div>
                  </div>


                </div>
              </div>
            </div>

        </div>


        </div>
        
        <div class="col-6 bg-light">

          <div class="container py-4 px-4">
            <div class="card text-dark">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item galeri-desa active">
                    <img src="{{asset('admintemplate/img/fotodesa1.jpg')}}" class="d-block w-100 card-img" alt="slide1">
                  </div>
                  <div class="carousel-item galeri-desa">
                    <img src="{{asset('admintemplate/img/fotodesa2.jpg')}}" class="d-block w-100 card-img" alt="slide2">
                  </div>
                  <div class="carousel-item galeri-desa">
                    <img src="{{asset('admintemplate/img/fotodesa3.jpg')}}" class="d-block w-100 card-img" alt="slide3">
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>


      </div>

      <div class="row" style="margin-bottom:10px">
        <div class="col bg-light d-flex justify-content-center">

          <div class="card w-100 mx-4">
            <div class="card-body">
                <h5 class="card-title">Pendapatan</h5>
                <div class="kolom" id="scrollingDiv1">
                <p class="card-text my-0"><br></p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              </div>
            </div>
        </div>
        
  
      </div>
      <div class="col bg-light d-flex justify-content-center">

        <div class="card w-100 mx-4">
          <div class="card-body">
              <h5 class="card-title">Pendapatan</h5>
              <div style="height: 100px;overflow-y: auto;" id="scrollingDiv2">
                <p class="card-text my-0"><br></p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
            </div>
          </div>
      </div>
      

    </div>
    <div class="col bg-light d-flex justify-content-center">

      <div class="card w-100 mx-4">
<div class="card-body">


  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item perangkat-desa active">
        <img src="{{asset('admintemplate/img/fotodesa1.jpg')}}" class="d-block w-100 card-img" alt="slide1">
      </div>
      <div class="carousel-item perangkat-desa">
        <img src="{{asset('admintemplate/img/fotodesa2.jpg')}}" class="d-block w-100 card-img" alt="slide2">
      </div>
      <div class="carousel-item perangkat-desa">
        <img src="{{asset('admintemplate/img/fotodesa3.jpg')}}" class="d-block w-100 card-img" alt="slide3">
      </div>
    </div>
  </div>


      </div>


    </div>
    

  </div>

      </div>

      <div class="row" style="margin-bottom:10px">
        <div class="col bg-light d-flex justify-content-center">

          <div class="card w-100 mx-4">
            <div class="card-body">
                <h5 class="card-title">Pendapatan</h5>
                <div style="height: 100px;overflow-y: auto;" id="scrollingDiv3">
                <p class="card-text my-0"><br></p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
                <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
                <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
                <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
                <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              </div>
            </div>
        </div>
        
  
      </div>
      <div class="col bg-light d-flex justify-content-center">

        <div class="card w-100 mx-4">
          <div class="card-body">
              <h5 class="card-title">Pendapatan</h5>
              <div style="height: 100px;overflow-y: auto;" id="scrollingDiv4">
              <p class="card-text my-0"><br></p>
              <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
              <p class="card-text my-0">Dana Desa Rp. 2.500.000,-</p>
              <p class="card-text my-0">Pendapatan Asli Desa Rp. 3.000.000,-</p>
              <p class="card-text my-0">BHP Rp. 1.000.000,-</p>
              <p class="card-text my-0">Banprov Rp. 2.000.000,-</p>
            </div>
          </div>
      </div>
      

    </div>
    <div class="col bg-warning d-flex justify-content-center">


    

    </div>
       </div>

       <div class="row">
         <div class="col bg-danger">
            <marquee behavior="scroll" class="custom-marquee text-light" direction="left">SELAMAT DATANG DI BALAI DESA BANYUMUDAL | JL RAYA MOGA-PULOSARI KM 01, BANYUMUDAL, MOGA, KABUPATEN PEMALANG  | BANYUMUDAL HEBAT BERMARTABAT</marquee>

         </div>
      </div>


      <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

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
      </div>

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
  </body>
</html>
