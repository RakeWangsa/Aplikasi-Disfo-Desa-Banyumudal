<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
    </style>
   <div class="row">
      <div class="col bg-secondary d-flex align-items-center">
          <img src="{{asset('admintemplate/img/logopemalang.png')}}" style="width:100px;" class="mr-2">
          <h3 class="mb-0">Display Informasi Desa Banyumudal</h3>
      </div>
  </div>
  
      <div class="row">
        <div class="col d-flex justify-content-center align-items-center bg-primary">
          <div id="cardCarousel" class="carousel slide d-flex justify-content-center align-items-center" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="col bg-primary">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Card 1</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col bg-primary">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Card 2</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add more carousel items as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
        </div>
        
        <div class="col-6 bg-success">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('admintemplate/img/absensi-daftarkelassiswa.png')}}" class="d-block w-100" alt="slide1">
              </div>
              <div class="carousel-item">
                <img src="{{asset('admintemplate/img/absensi-homesiswa.png')}}" class="d-block w-100" alt="slide2">
              </div>
              <div class="carousel-item">
                <img src="{{asset('admintemplate/img/absensi-scanqr.png')}}" class="d-block w-100" alt="slide3">
              </div>
            </div>
          </div>
        </div>
        <div class="col bg-primary">
          <div class="card mx-auto my-auto" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
        </div>
        </div>
      </div>
      <div class="row">
         <div class="col bg-success">
           5
         </div>
         <div class="col bg-primary">
           6
         </div>
         <div class="col bg-success">
           7
         </div>
       </div>
       <div class="row">
         <div class="col bg-primary">
           8
         </div>
         <div class="col bg-success">
           9
         </div>
         <div class="col bg-primary">
           10
         </div>
       </div>
       <div class="row">
         <div class="col bg-secondary">
            <marquee behavior="scroll" class="custom-marquee" direction="left">SELAMAT DATANG DI BALAI DESA BANYUMUDAL | JL RAYA MOGA-PULOSARI KM 01, BANYUMUDAL, MOGA, KABUPATEN PEMALANG  | BANYUMUDAL HEBAT BERMARTABAT</marquee>

         </div>
      </div>


      <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

      <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast custom-toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
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
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
