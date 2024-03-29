<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disfo Desa Banyumudal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  </head>
  <body style="background-size: cover;background: linear-gradient(to right, rgb(156, 156, 156), rgb(225, 225, 225));">

   <div class="row">
      <div class="col d-flex align-items-center" style="background:linear-gradient(to right, rgb(37, 37, 37), rgb(65, 65, 65));">
          <div class="col-1">
          <img src="{{asset('admintemplate/img/logopemalang.png')}}" style="width:100px;float:right" class="mr-2">
        </div>
        <div class="col-10">
          <h3 class="mb-0 text-light">{{ $display->header }}</h3>
          <h6 class="mb-0 text-light">{{ $display->sub_header }}</h6>
        </div>
        <div class="col-2" style="padding-right:2rem">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-secondary text-end">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>
        </form>
        

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
      <p class="form-label"><strong>Tampilan :</strong></p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Tampilan 1" @if($display->tampilan=="Tampilan 1") checked @endif>
        <label class="form-check-label" for="flexRadioDefault1">
          Tampilan 1
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Tampilan 2" @if($display->tampilan=="Tampilan 2") checked @endif>
        <label class="form-check-label" for="flexRadioDefault2">
          Tampilan 2
        </label>
      </div>
    </div>

    <div class="mb-4" @if($display->tampilan=="Tampilan 2") style="display:none" @endif>
      <label for="InputTitle1" class="form-label"><strong>Title 1 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" style="border: 1px solid #000000;" name="title1" value="{{ $display->title1 }}" required>
      <label for="InputText1" class="form-label"><strong>Text 1 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" name="text1" required>{{ $display->text1 }}</textarea>
    </div>
    <div class="mb-4" @if($display->tampilan=="Tampilan 1") style="display:none" @endif>
      <label for="InputTitle1" class="form-label"><strong>Title 1 :</strong></label>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control mb-1" id="InputTitle1a" style="border: 1px solid #000000;" name="title1a" value="{{ $display->title1a }}" required>
        </div>
        <div class="col">
          <input type="text" class="form-control mb-1" id="InputTitle1b" style="border: 1px solid #000000;" name="title1b" value="{{ $display->title1b }}" required>
        </div>
      </div>
      <label for="InputText1" class="form-label"><strong>Text 1 :</strong></label>
      <div class="row">
        <div class="col">
          <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" name="text1a" required>{{ $display->text1a }}</textarea>
        </div>
        <div class="col">
          <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" name="text1b" required>{{ $display->text1b }}</textarea>
        </div>
      </div>
    </div>
    <div class="mb-4" @if($display->tampilan=="Tampilan 2") style="display:none" @endif>
      <label for="InputTitle1" class="form-label"><strong>Title 2 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" style="border: 1px solid #000000;" name="title2" value="{{ $display->title2 }}" required>
      <label for="InputText1" class="form-label"><strong>Text 2 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" name="text2" required>{{ $display->text2 }}</textarea>
    </div> 
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 3 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" style="border: 1px solid #000000;" name="title3" value="{{ $display->title3 }}" required>
      <label for="InputText1" class="form-label"><strong>Text 3 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" name="text3" required>{{ $display->text3 }}</textarea>
    </div>
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 4 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" style="border: 1px solid #000000;" name="title4" value="{{ $display->title4 }}" required>
      <label for="InputText1" class="form-label"><strong>Text 4 :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;height: 150px;" id="InputText1" name="text4" required>{{ $display->text4 }}</textarea>
    </div>

</div>
</div>

<div class="col-6"> 
  <div class="container p-4">

    <div class="mb-4">
      <label for="linkYoutube" class="form-label"><strong>Header :</strong></label>
      <input type="text" class="form-control" style="border: 1px solid #000000;" value="{{ $display->header }}" name="header" id="header" required>
    </div>
    <div class="mb-4">
      <label for="linkYoutube" class="form-label"><strong>Sub Header :</strong></label>
      <input type="text" class="form-control" style="border: 1px solid #000000;" value="{{ $display->sub_header }}" name="sub_header" id="sub_header" required>
    </div>
    <div class="mb-4">
      <div class="row">
        <p for="fotoBackground" class="form-label"><strong>Background :</strong></p>
      </div>
        <img src="{{ asset('background/'.$background->foto) }}" class="mb-4" style="width:150px;height:auto">
        <input type="file" class="form-control" style="border: 1px solid #000000;" name="fotoBackground" id="fotoBackground" accept="image/*">
      </div>
    <div class="mb-4">
      <p class="form-label"><strong>Agenda Desa :</strong></p>
      <ul class="list-group" style="border: 1px solid #000000;">
        @if($jumlahAgenda==0)
          <li class="list-group-item">Tidak ada agenda</li>
        @endif
        @foreach($agenda as $row)

          <li class="list-group-item" data-toggle="modal" data-target="#agenda{{ $row->id }}">{{ $row->nama_agenda }}</li>

                              <!-- Modal -->
                              <div class="modal fade" id="agenda{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">{{ $row->nama_agenda }}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="mb-4">
                                      <label for="linkYoutube" class="form-label"><strong>Lokasi :</strong></label>
                                      <input type="text" class="form-control" style="border: 1px solid #000000;" value="{{ $row->lokasi }}" readonly>
                                  </div>
                                  <div class="mb-4">
                                    <label for="linkYoutube" class="form-label"><strong>Waktu :</strong></label>
                                    <input type="text" class="form-control" style="border: 1px solid #000000;" value="{{ $row->waktu }}" readonly>
                                </div>
                                <div class="mb-4">
                                  <label for="linkYoutube" class="form-label"><strong>Tanggal :</strong></label>
                                  <input type="text" class="form-control" style="border: 1px solid #000000;" value="{{ $row->tanggal }}" readonly>
                              </div>
                              <div class="mb-4">
                                <label for="linkYoutube" class="form-label"><strong>Bulan - Tahun :</strong></label>
                                <input type="text" class="form-control" style="border: 1px solid #000000;" value="{{ $row->bulan_tahun }}" readonly>
                            </div>
                            <div class="mb-4">
                              <p for="linkYoutube" class="form-label"><strong>Foto :</strong></p>
                              <img src="{{ asset('agenda/'.$row->foto) }}" style="width:200px;height:auto">
                          </div>
                            <a class="btn btn-danger" href="/deleteAgenda/{{ $row->id }}">Hapus</a>
                                    </div>   
                                  </div>
                                </div>
                              </div>
        @endforeach

      </ul>



    
    
    <a class="btn btn-secondary mt-4" data-toggle="modal" data-target="#tambahAgenda">Tambah Agenda</a>
    

                                            
                                      </div>
    
    <div class="mb-4">
      <label for="InputTitle1" class="form-label"><strong>Title 5 :</strong></label>
      <input type="text" class="form-control mb-1" id="InputTitle1" style="border: 1px solid #000000;" name="title5" value="{{ $display->title5 }}" required>
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
      <input type="text" class="form-control" style="border: 1px solid #000000;" name="linkYoutube" id="linkYoutube" value="{{ $display->link_youtube }}" required>
    </div>
    <div class="mb-4">
      <label for="InputText1" class="form-label"><strong>Running Text :</strong></label>
      <textarea class="form-control" style="border: 1px solid #000000;" id="InputText1" name="running_text" required>{{ $display->running_text }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</div>
</div>
</div>
</form>

                                            <!-- Modal -->
                                            <div class="modal fade" id="tambahAgenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Agenda</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form action="{{ route('addAgenda') }}" method="post" enctype="multipart/form-data">
                                                      @csrf
                                                    <div class="mb-4">
                                                      <label for="linkYoutube" class="form-label"><strong>Agenda :</strong></label>
                                                      <input type="text" class="form-control" style="border: 1px solid #000000;" name="nama_agenda" required>
                                                  </div>
                                                  <div class="mb-4">
                                                    <label for="linkYoutube" class="form-label"><strong>Lokasi :</strong></label>
                                                    <input type="text" class="form-control" style="border: 1px solid #000000;" name="lokasi" required>
                                                </div>
                                                <div class="mb-4">
                                                  <label for="linkYoutube" class="form-label"><strong>Waktu :</strong></label>
                                                  <input type="text" class="form-control" style="border: 1px solid #000000;" name="waktu" required>
                                              </div>
                                              <div class="mb-4">
                                                <label for="linkYoutube" class="form-label"><strong>Tanggal :</strong></label>
                                                <input type="text" class="form-control" style="border: 1px solid #000000;" name="tanggal" required>
                                            </div>
                                            <div class="mb-4">
                                              <label for="linkYoutube" class="form-label"><strong>Bulan - Tahun :</strong></label>
                                              <input type="text" class="form-control" style="border: 1px solid #000000;" name="bulan_tahun" required>
                                          </div>
                                          <div class="mb-4">
                                            <label for="linkYoutube" class="form-label"><strong>Foto :</strong></label>
                                            <input type="file" class="form-control" style="border: 1px solid #000000;" name="fotoAgenda" id="fileInput" accept="image/*" required>
                                        </div>
                                          <button class="btn btn-primary" type="submit">Submit</button>
                                                    </form>
                                                  </div>     
                                                </div>
                                              </div>
                                            </div>

{{-- </div> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>


