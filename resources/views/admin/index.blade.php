<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disfo Desa Banyumudal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background-size: cover;background: linear-gradient(to right, rgb(156, 156, 156), rgb(225, 225, 225));">

   <div class="row">
      <div class="col bg-dark d-flex align-items-center">
          <div class="col-1">
          <img src="{{asset('admintemplate/img/logopemalang.png')}}" style="width:100px;float:right" class="mr-2">
        </div>
        <div class="col-9">
          <h3 class="mb-0 text-light">{{ $display->header }}</h3>
          <h6 class="mb-0 text-light">{{ $display->sub_header }}</h6>
        </div>
        <div class="col-2" style="padding-right:2rem">
          <h6 class="mb-0 text-light text-end" id="dateDisplay"></h6>
          <h5 class="mb-0 text-light text-end" id="timeDisplay"></h5>
        </div>
        
      </div>
  </div>
      

  {{-- <div class="container p-4"> --}}
    <form action="{{ route('updateDisplay') }}" method="post" enctype="multipart/form-data">
      @csrf
    <div class="row">
      <div class="col-6"> 
        <div class="container p-4">

    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 1 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title1" value="{{ $display->title1 }}">
      <label for="InputText1" class="form-label"><strong>Text 1 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" aria-describedby="emailHelp" name="text1">{{ $display->text1 }}</textarea>
    </div>
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 2 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title2" value="{{ $display->title2 }}">
      <label for="InputText1" class="form-label"><strong>Text 2 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" aria-describedby="emailHelp" name="text2">{{ $display->text2 }}</textarea>
    </div>    
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 3 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title3" value="{{ $display->title3 }}">
      <label for="InputText1" class="form-label"><strong>Text 3 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" aria-describedby="emailHelp" name="text3">{{ $display->text3 }}</textarea>
    </div>
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 4 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title4" value="{{ $display->title4 }}">
      <label for="InputText1" class="form-label"><strong>Text 4 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" aria-describedby="emailHelp" name="text4">{{ $display->text4 }}</textarea>
    </div>

</div>
</div>

<div class="col-6"> 
  <div class="container p-4">

    <div class="mb-4">
      <label for="linkYoutube" class="form-label"><strong>Header :</strong></label>
      <input type="text" class="form-control" style="border: 1px solid #000000;" value="{{ $display->header }}" name="header" id="header" aria-describedby="emailHelp">
    </div>
    <div class="mb-4">
      <label for="linkYoutube" class="form-label"><strong>Sub Header :</strong></label>
      <input type="text" class="form-control" style="border: 1px solid #000000;" value="{{ $display->sub_header }}" name="sub_header" id="sub_header" aria-describedby="emailHelp">
    </div>
    <div class="mb-4">
      <label for="InputTitle4" class="form-label"><strong>Agenda Desa :</strong></label>
      <input type="file" class="form-control" style="border: 1px solid #000000;" name="profileImage" id="fileInput" accept="image/*">
    </div>
    <div class="mb-4">
      <ul class="list-group" style="border: 1px solid #000000;">
        <li class="list-group-item" data-toggle="modal" data-target="#exampleModalss">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
      </ul>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row mb-4">
                            <img src="" style="width:500px;">
                          </div>
                            <a class="btn btn-danger" href="/deleteIklan">Hapus</a>
                          </div>   
                        </div>
                      </div>
                    </div>
    </div>
    
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 5 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" aria-describedby="emailHelp" style="border: 1px solid #000000;" name="title5" value="{{ $display->title5 }}">
    </div>
    <div class="mb-4">
      <div class="row mb-4">
        <label for="InputTitle1" class="form-label"><strong>Foto :</strong></label>
        @foreach($iklan as $data)
          <img src="{{ asset('iklan/' . $data->foto) }}" style="width:100px; float:right" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">

              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $data->foto }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row mb-4">
                      <img src="{{ asset('iklan/' . $data->foto) }}" style="width:500px;">
                    </div>
                      <a class="btn btn-danger" href="/deleteIklan/{{ $data->id }}">Hapus</a>
                    </div>   
                  </div>
                </div>
              </div>
        @endforeach
      </div>

      <input type="file" class="form-control" style="border: 1px solid #000000;" name="profileImage[]" id="fileInput" accept="image/*" multiple>
    </div>



    <div class="mb-4">
      <label for="linkYoutube" class="form-label"><strong>Link Youtube :</strong></label>
      <input type="text" class="form-control" style="border: 1px solid #000000;" name="linkYoutube" id="linkYoutube" value="{{ $display->link_youtube }}" aria-describedby="emailHelp">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>


