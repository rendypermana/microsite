@extends("layout.layouts")
@section("content")
  <div class="container-fluid bg-homepage">
    <div class="row">
      <div class="mobile-first">
        <img src="{{ url('/') }}/assets-rendy/img/homepage-image.png">
      </div>
      <div class="col-md-5">
        <div class="side-homepage">
          <h1>Mega Travel Care</h1>
          <p class="sub-text">Daftar Asuransi Perjalanan dalam hitungan menit</p>
          <div class="form-side">
            <form action="/form-buy" method="post" enctype="multipart/form-data">
              <div class="premi">
                <div class="row">
                  <div class="col-xs-6 col-md-6">
                    <div class="side-left">
                      Harga Premi</br>
                      Mulai Dari
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="side-right">
                      <p>19 ribu*</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="label-insurance">Tujuan</label>
                <select class="form-control form-insurance" name="tujuan">
                  <option value="internasional">Internasional</option>
                  <option value="domestik">Domestik</option>
                </select>
              </div>
              <div class="form-group">
                <label class="label-insurance">Tipe Perlindungan</label>
                <select class="form-control form-insurance" name="type_pemesanan">
                  <option value="individu">Individu</option>
                  <option value="keluarga">Keluarga</option>
                </select>
              </div>
               {!! csrf_field() !!} 
              <div class="button-insurance">
                <input type="submit" value="Mulai Sekarang" class="btn btn-mega-insurance btn-lg">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7 exclusive-case">
        <div class="right-homepage">
          <img src="{{ url('/') }}/assets-rendy/img/homepage-image.png">
        </div>
      </div>
    </div>
  </div>
@stop