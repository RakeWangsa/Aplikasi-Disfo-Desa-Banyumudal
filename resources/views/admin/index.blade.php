<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disfo Desa Banyumudal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background-size: cover;background-color:rgb(158, 158, 158)">

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
          <h6 class="mb-0 text-light text-end">Minggu, 15 Januari 2024</h6>
          <h5 class="mb-0 text-light text-end">22.14 WIB</h5>
        </div>
        
      </div>
  </div>
      

  {{-- <div class="container p-4"> --}}
    <form action="{{ route('updateDisplay') }}" method="post">
      @csrf
    <div class="row">
      <div class="col-6"> 
        <div class="container p-4">

    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 1 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title1" value="{{ $display->title1 }}">
      <label for="InputText1" class="form-label"><strong>Text 1 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;" id="InputText1" aria-describedby="emailHelp" name="text1">{{ $display->text1 }}</textarea>
    </div>
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 2 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title2" value="{{ $display->title2 }}">
      <label for="InputText1" class="form-label"><strong>Text 2 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;" id="InputText1" aria-describedby="emailHelp" name="text2">{{ $display->text2 }}</textarea>
    </div>    
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 3 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title3" value="{{ $display->title3 }}">
      <label for="InputText1" class="form-label"><strong>Text 3 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;" id="InputText1" aria-describedby="emailHelp" name="text3">{{ $display->text3 }}</textarea>
    </div>
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 4 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title4" value="{{ $display->title4 }}">
      <label for="InputText1" class="form-label"><strong>Text 4 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;" id="InputText1" aria-describedby="emailHelp" name="text4">{{ $display->text4 }}</textarea>
    </div>

</div>
</div>

<div class="col-6"> 
  <div class="container p-4">

    <div class="mb-4">
      <label for="InputTitle4" class="form-label"><strong>Agenda Desa :</strong></label>
      <input type="file" class="form-control" style="border: 1px solid #000000;" name="profileImage" id="fileInput" accept="image/*">
    </div>
    <div class="mb-4">
      <label for="InputTitle4" class="form-label"><strong>Iklan :</strong></label>
      <input type="file" class="form-control" style="border: 1px solid #000000;" name="profileImage" id="fileInput" accept="image/*">
    </div>
    <div class="mb-4">
      <label for="linkYoutube" class="form-label"><strong>Link Youtube :</strong></label>
      <input type="text" class="form-control" style="border: 1px solid #000000;" id="linkYoutube" aria-describedby="emailHelp">
    </div>
    <div class="mb-4">
      <label for="InputText1" class="form-label"><strong>Running Text :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;" id="InputText1" aria-describedby="emailHelp" name="running_text">{{ $display->running_text }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</div>
</div>
</div>
</form>
{{-- </div> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
  
  </body>
</html>


