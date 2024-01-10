<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <div class="row">
        <div class="col bg-secondary">
          1
        </div>
      </div>
      <div class="row">
        <div class="col bg-primary">
          2
        </div>
        <div class="col bg-success">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/absensi-daftarkelassiswa.png')}}" class="d-block w-100" alt="slide1">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/absensi-homesiswa.png')}}" class="d-block w-100" alt="slide2">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/absensi-scanqr.png')}}" class="d-block w-100" alt="slide3">
              </div>
            </div>
          </div>
        </div>
        <div class="col bg-primary">
          4
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
           11
         </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>