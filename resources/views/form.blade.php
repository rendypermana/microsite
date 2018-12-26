@extends("layout.layouts")
@section("content")
<form>
      <div class="form-transaction">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 ornamen">
              <div class="side-homepage homepage2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="numbering">01</span>Rincian Perjalanan</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="numbering">02</span>Pilih Benefit</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="numbering">03</span>Detail Anda</a>
                  <a class="nav-link" id="v-pills-pembayaran-tab" data-toggle="pill" href="#v-pills-pembayaran" role="tab" aria-controls="v-pills-pembayaran" aria-selected="false"><span class="numbering">04</span>Pembayaran</a>
                </div>
              </div>
            </div>
   
            <div class="col-md-7">
              <div class="tab-content" id="v-pills-tabContent">
                <!-- rincian perjalanan -->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="fase-1">
                    <div class="row">
                      <div class="col-xs-6 col-md-6">
                        <div class="form-left">
                          <div class="title-form">Tipe Perlindungan</div>
                          <div class="sejajar">
                            <div class="radio radio-success">
                              @if($type == 'individu')
                              <input type="radio" id="pemesanan1" value="individu" name="type_pemesanan" checked>
                              @else
                              <input type="radio" id="pemesanan1" value="individu" name="type_pemesanan">
                              @endif
                              <label for="pemesanan1" > Individu</label>
                            </div>
                            
                            <div class="radio radio-inline radio-success ">
                              @if($type == 'keluarga')
                              <input type="radio" id="pemesanan2" value="keluarga" name="type_pemesanan" checked>
                              @else
                              <input type="radio" id="pemesanan2" value="keluarga" name="type_pemesanan">
                              @endif
                              <label for="pemesanan2"> Keluarga</label>
                            </div>
                          </div>
           
                        </div>
                      </div>
                      <div class="col-xs-6 col-md-6">
                        <div class="form-right">
                          <div class="title-form">Tujuan Perjalanan </div>
                          <div class="sejajar">
                            <div class="radio radio-success">
                              @if($tujuan == 'internasional')
                              <input type="radio" id="tujuan2" value="internasional" name="tujuan" checked>
                              @else
                              <input type="radio" id="tujuan2" value="internasional" name="tujuan">
                              @endif
                              <label for="tujuan2" > Internasional</label>
                            </div>
                            <div class="radio radio-success">
                              @if($tujuan == 'domestik')
                              <input type="radio" id="tujuan1" value="domestik" name="tujuan" checked>
                              @else
                              <input type="radio" id="tujuan1" value="domestik" name="tujuan">
                              @endif
                              <label for="tujuan1" > Domestik</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-othrt">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="title-form">Periode Perjalanan </div>
                            <div class="sejajar">
                              <div class="radio radio-success">
                                <input type="radio" id="perjalanan1" value="option1" name="perjalanan">
                                <label for="perjalanan1"> Tahunan </label>
                              </div>
                              <div class="radio radio-inline radio-success ">
                                <input type="radio" id="perjalanan2" value="option2" name="perjalanan">
                                <label for="perjalanan2"> Sekali Jalan </label>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="spce-domestik" style="display: none;">
                              <input type="text" name="" class="form-control">
                            </div>
                            <div class="internasional" style="display: none;">
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>

                        </div>
                        <!-- form-->
                        <div class="form-jalan">
                          <div class="row">
                            <div class="col-md-6">
                              <label>Tanggal Berangkat</label>
                              <div class="inner-addon right-addon">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                <input type="text" name="" class="form-control datepicker">
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="sekali-jalan" style="display: none">
                                <label>Tanggal Pulang</label>
                                <div class="inner-addon right-addon">
                                  <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                  <input type="text" name="" class="form-control datepicker">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="title-form sp-1">Tanggal Lahir Tertanggung Utama </div>
                        <div class="inner-addon right-addon">
                          <i class="fa fa-calendar-o" aria-hidden="true"></i>
                          <input type="text" name="" class="form-control datepicker">
                        </div>
                      </div>
                    </div>
                    <div class="continue nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="btn btn-success btn-continue nav-link" id="v-pills-pembayaran-tab" data-toggle="pill" href="#v-pills-pembayaran" role="tab" aria-controls="v-pills-pembayaran" aria-selected="false">Continue <i class="material-icons">arrow_forward</i></a>
                    </div>
                  </div>
                </div>
                <!-- piih benefit-->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <div class="form-inside fase-2">
                    <div class="row">
                      <!-- gold -->
                      <div class="col-md-6">
                        <div class="card card-benefit">
                          <div class="card-content-top">
                            <img src="{{ url('/') }}/assets-rendy/img/insurance_gold.png">
                            <h1>RP. 25.000</h1>
                            <p class="discount">After Discount 15%</p>
                            <input type="submit" name="submit" class="btn btn-mega-insurance btn-pilih" value="Pilih">
                          </div>
                          <hr>
                          <div class="card-content-bottom">
                            <h3>Maksimum Cover</h3>
                            <div id="accordion" role="tablist">
                              <!-- Kecelakaan Diri -->
                              <div class="card card-isi">
                                <div class="card-header" role="tab" id="heading1">
                                  <a data-toggle="collapse" href="#collapse1a" aria-expanded="true" aria-controls="collapse1a" class="listing-sevice">
                                    <div class="service">Kecelakaan Diri</div>  
                                    <div class="arah"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="harga-sevice">Rp 50.000.000</div>
                                  </a>
                                </div>
                                <div id="collapse1a" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion">
                                  <div class="card-body">
                                    <table class="table tb-bete">
                                      <tbody>
                                        <tr>
                                          <td>Meninggal Dunia atau Cacat Tetap Akibat Kecelakaan</td>
                                          <td>></td>
                                          <td>Rp 100.000</td>
                                        </tr>
                                        <tr>
                                          <td>Santunan Tunai Meninggal atau Cedera akibat Kecelakaan</td>
                                          <td>></td>
                                          <td>Rp 1.500</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <!-- Biaya Pengobatan & Perawatan Medis -->
                              <div class="card card-isi">
                                <div class="card-header" role="tab" id="heading2a">
                                  <a data-toggle="collapse" href="#collapse2a" aria-expanded="true" aria-controls="collapse2a" class="listing-sevice">
                                    <div class="service">Biaya Pengobatan & Perawatan Medis</div>  
                                    <div class="arah"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="harga-sevice">Rp 50.000.000</div>
                                  </a>
                                </div>
                                <div id="collapse2a" class="collapse" role="tabpanel" aria-labelledby="heading2a" data-parent="#accordion">
                                  <div class="card-body">
                                    <table class="table tb-bete table-fixed">
                                      <tbody>
                                        <tr>
                                          <td>Biaya Perawatan Medis Akibat Kecelakaan dan Sakit</td>
                                          <td>></td>
                                          <td>Rp 100.000</td>
                                        </tr>
                                        <tr>
                                          <td>Perawatan Lanjutan di Dalam Negeri</td>
                                          <td>></td>
                                          <td>Rp 2.500</td>
                                        </tr>
                                        <tr>
                                          <td>Santunan Tunai di Rumah Sakit</td>
                                          <td>></td>
                                          <td>Rp 1.500</td>
                                        </tr>
                                        <tr>
                                          <td>Santunan Tunai Rawat Inap ICU</td>
                                          <td>></td>
                                          <td>Rp 1.500</td>
                                        </tr>
                                        <tr>
                                          <td>Santunan Tunai Rawat Inap dalam Negeri</td>
                                          <td>></td>
                                          <td>Rp 350</td>
                                        </tr>
                                        <tr>
                                          <td>Evakuasi Medis Darurat dan Pengembalian Jenazah (Repatriasi)</td>
                                          <td>></td>
                                          <td>Unlimited</td>
                                        </tr>
                                        <tr>
                                          <td>Evakuasi Medis Darurat</td>
                                          <td>></td>
                                          <td>Unlimited</td>
                                        </tr>
                                        <tr>
                                          <td>Repatriasi Medis dan Pengembalian Jenazah</td>
                                          <td>></td>
                                          <td>Unlimited</td>
                                        </tr>
                                        <tr>
                                          <td>Kunjungan Perjalanan</td>
                                          <td>></td>
                                          <td>3.000</td>
                                        </tr>
                                        <tr>
                                          <td>Kunjungan Perjalanan Apabila Rawat Inap lebih dari 5 Hari</td>
                                          <td>></td>
                                          <td>3.000</td>
                                        </tr>
                                        <tr>
                                          <td>Kunjungan Perjalanan Apabila Meninggal Dunia</td>
                                          <td>></td>
                                          <td>3.000</td>
                                        </tr>
                                        <tr>
                                          <td>Pengembalian Anak</td>
                                          <td>></td>
                                          <td>5.000</td>
                                        </tr>
                                        <tr>
                                          <td>Biaya Perjalanan Darurat</td>
                                          <td>></td>
                                          <td>3.000</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <!-- Ketidaknyamanan Selama Perjalanan -->
                              <div class="card card-isi">
                                <div class="card-header" role="tab" id="heading3a">
                                  <a data-toggle="collapse" href="#collapse3a" aria-expanded="true" aria-controls="collapse3a" class="listing-sevice">
                                    <div class="service">Ketidaknyamanan Selama Perjalanan</div>  
                                    <div class="arah"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="harga-sevice">Rp 7.500.000</div>
                                  </a>
                                </div>
                                <div id="collapse3a" class="collapse" role="tabpanel" aria-labelledby="heading3a" data-parent="#accordion">
                                  <div class="card-body">
                                    <table class="table tb-bete">
                                      <tbody>
                                        <tr>
                                          <td>Bagasi dan Harta Benda Pribadi</td>
                                          <td>></td>
                                          <td>Rp 2.500</td>
                                        </tr>
                                        <tr>
                                          <td>Keterlambatan Bagasi</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Keterlambatan Penerbangan</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Biaya Akomodasi akibat Keterlambatan Penerbangan</td>
                                          <td>></td>
                                          <td>Rp 250</td>
                                        </tr>
                                        <tr>
                                          <td>Kehilangan Deposit dan Pembatalan Perjalanan</td>
                                          <td>></td>
                                          <td>Rp 7.500</td>
                                        </tr>
                                        <tr>
                                          <td>Pengurangan Perjalanan</td>
                                          <td>></td>
                                          <td>Rp 7.500</td>
                                        </tr>
                                        <tr>
                                          <td>Pengurangan Perjalanan Karena Rawat Inap lebih dari 5 hari</td>
                                          <td>></td>
                                          <td>Rp 1.000</td>
                                        </tr>
                                        <tr>
                                          <td>Pembajakan pesawat udara</td>
                                          <td>></td>
                                          <td>Rp 2.500</td>
                                        </tr>
                                        <tr>
                                          <td>Kehilangan Dokumen Perjalanan dan kehilangan Uang </td>
                                          <td>></td>
                                          <td>Rp 1.000</td>
                                        </tr>
                                        <tr>
                                          <td>Ketidaksinambungan Perjalanan Pesawat</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Penundaan Perjalanan</td>
                                          <td>></td>
                                          <td>Rp 1.500</td>
                                        </tr>
                                        <tr>
                                          <td>Penerbangan Overbooked</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <!-- Jaminan Perluasan -->
                              <div class="card card-isi">
                                <div class="card-header" role="tab" id="heading4a">
                                  <a data-toggle="collapse" href="#collapse4a" aria-expanded="true" aria-controls="collapse4a" class="listing-sevice">
                                    <div class="service">Jaminan Perluasan</div>  
                                    <div class="arah"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="harga-sevice">Rp 100.000.000</div>
                                  </a>
                                </div>
                                <div id="collapse4a" class="collapse" role="tabpanel" aria-labelledby="heading4a" data-parent="#accordion">
                                  <div class="card-body">
                                    <table class="table tb-bete">
                                      <tbody>
                                        <tr>
                                          <td>Perlindungan isi rumah akibat Kebakaran dan Kebongkaran</td>
                                          <td>></td>
                                          <td>Rp 5.000</td>
                                        </tr>
                                        <tr>
                                          <td>Tanggung Jawab Hukum Pribadi terhadap Pihak Ketiga</td>
                                          <td>></td>
                                          <td>Rp 100.000</td>
                                        </tr>
                                        <tr>
                                          <td>Golf Equipment Benefit</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Kehilangan atau Kerusakan Peralatan Golf</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Hole In One</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Perlindungan Kartu Kredit</td>
                                          <td>></td>
                                          <td>Rp 1000</td>
                                        </tr>
                                        <tr>
                                          <td>Biaya Telepon Medis</td>
                                          <td>></td>
                                          <td>Rp 1000</td>
                                        </tr>
                                        <tr>
                                          <td>Perpanjangan Polis Otomatis</td>
                                          <td>></td>
                                          <td>YES</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- platinum -->
                      <div class="col-md-6">
                        <div class="card card-benefit">
                          <div class="card-content-top">
                            <img src="{{ url('/') }}/assets-rendy/img/insurance_platinum.png">
                            <h1>RP. 59.000</h1>
                            <p class="discount">After Discount 15%</p>
                            <input type="submit" name="submit" class="btn btn-mega-insurance btn-pilih" value="Pilih">
                          </div>
                          <hr>
                          <div class="card-content-bottom">
                            <h3>Maksimum Cover</h3>
                            <div id="accordion" role="tablist">
                              <!-- Kecelakaan Diri -->
                              <div class="card card-isi">
                                <div class="card-header" role="tab" id="heading1">
                                  <a data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1" class="listing-sevice">
                                    <div class="service">Kecelakaan Diri</div>  
                                    <div class="arah"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="harga-sevice">Rp 100.000.000</div>
                                  </a>
                                </div>
                                <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion">
                                  <div class="card-body">
                                    <table class="table tb-bete">
                                      <tbody>
                                        <tr>
                                          <td>Meninggal Dunia atau Cacat Tetap Akibat Kecelakaan</td>
                                          <td>></td>
                                          <td>Rp 100.000</td>
                                        </tr>
                                        <tr>
                                          <td>Santunan Tunai Meninggal atau Cedera akibat Kecelakaan</td>
                                          <td>></td>
                                          <td>Rp 1.500</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <!-- Biaya Pengobatan & Perawatan Medis -->
                              <div class="card card-isi">
                                <div class="card-header" role="tab" id="heading2">
                                  <a data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2" class="listing-sevice">
                                    <div class="service">Biaya Pengobatan & Perawatan Medis</div>  
                                    <div class="arah"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="harga-sevice">Rp 120.000.000</div>
                                  </a>
                                </div>
                                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordion">
                                  <div class="card-body">
                                    <table class="table tb-bete table-fixed">
                                      <tbody>
                                        <tr>
                                          <td>Biaya Perawatan Medis Akibat Kecelakaan dan Sakit</td>
                                          <td>></td>
                                          <td>Rp 100.000</td>
                                        </tr>
                                        <tr>
                                          <td>Perawatan Lanjutan di Dalam Negeri</td>
                                          <td>></td>
                                          <td>Rp 2.500</td>
                                        </tr>
                                        <tr>
                                          <td>Santunan Tunai di Rumah Sakit</td>
                                          <td>></td>
                                          <td>Rp 1.500</td>
                                        </tr>
                                        <tr>
                                          <td>Santunan Tunai Rawat Inap ICU</td>
                                          <td>></td>
                                          <td>Rp 1.500</td>
                                        </tr>
                                        <tr>
                                          <td>Santunan Tunai Rawat Inap dalam Negeri</td>
                                          <td>></td>
                                          <td>Rp 350</td>
                                        </tr>
                                        <tr>
                                          <td>Evakuasi Medis Darurat dan Pengembalian Jenazah (Repatriasi)</td>
                                          <td>></td>
                                          <td>Unlimited</td>
                                        </tr>
                                        <tr>
                                          <td>Evakuasi Medis Darurat</td>
                                          <td>></td>
                                          <td>Unlimited</td>
                                        </tr>
                                        <tr>
                                          <td>Repatriasi Medis dan Pengembalian Jenazah</td>
                                          <td>></td>
                                          <td>Unlimited</td>
                                        </tr>
                                        <tr>
                                          <td>Kunjungan Perjalanan</td>
                                          <td>></td>
                                          <td>3.000</td>
                                        </tr>
                                        <tr>
                                          <td>Kunjungan Perjalanan Apabila Rawat Inap lebih dari 5 Hari</td>
                                          <td>></td>
                                          <td>3.000</td>
                                        </tr>
                                        <tr>
                                          <td>Kunjungan Perjalanan Apabila Meninggal Dunia</td>
                                          <td>></td>
                                          <td>3.000</td>
                                        </tr>
                                        <tr>
                                          <td>Pengembalian Anak</td>
                                          <td>></td>
                                          <td>5.000</td>
                                        </tr>
                                        <tr>
                                          <td>Biaya Perjalanan Darurat</td>
                                          <td>></td>
                                          <td>3.000</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <!-- Ketidaknyamanan Selama Perjalanan -->
                              <div class="card card-isi">
                                <div class="card-header" role="tab" id="heading3">
                                  <a data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3" class="listing-sevice">
                                    <div class="service">Ketidaknyamanan Selama Perjalanan</div>  
                                    <div class="arah"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="harga-sevice">Rp 17.500.000</div>
                                  </a>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordion">
                                  <div class="card-body">
                                    <table class="table tb-bete">
                                      <tbody>
                                        <tr>
                                          <td>Bagasi dan Harta Benda Pribadi</td>
                                          <td>></td>
                                          <td>Rp 2.500</td>
                                        </tr>
                                        <tr>
                                          <td>Keterlambatan Bagasi</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Keterlambatan Penerbangan</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Biaya Akomodasi akibat Keterlambatan Penerbangan</td>
                                          <td>></td>
                                          <td>Rp 250</td>
                                        </tr>
                                        <tr>
                                          <td>Kehilangan Deposit dan Pembatalan Perjalanan</td>
                                          <td>></td>
                                          <td>Rp 7.500</td>
                                        </tr>
                                        <tr>
                                          <td>Pengurangan Perjalanan</td>
                                          <td>></td>
                                          <td>Rp 7.500</td>
                                        </tr>
                                        <tr>
                                          <td>Pengurangan Perjalanan Karena Rawat Inap lebih dari 5 hari</td>
                                          <td>></td>
                                          <td>Rp 1.000</td>
                                        </tr>
                                        <tr>
                                          <td>Pembajakan pesawat udara</td>
                                          <td>></td>
                                          <td>Rp 2.500</td>
                                        </tr>
                                        <tr>
                                          <td>Kehilangan Dokumen Perjalanan dan kehilangan Uang </td>
                                          <td>></td>
                                          <td>Rp 1.000</td>
                                        </tr>
                                        <tr>
                                          <td>Ketidaksinambungan Perjalanan Pesawat</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Penundaan Perjalanan</td>
                                          <td>></td>
                                          <td>Rp 1.500</td>
                                        </tr>
                                        <tr>
                                          <td>Penerbangan Overbooked</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <!-- Jaminan Perluasan -->
                              <div class="card card-isi">
                                <div class="card-header" role="tab" id="heading4">
                                  <a data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapse4" class="listing-sevice">
                                    <div class="service">Jaminan Perluasan</div>  
                                    <div class="arah"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="harga-sevice">Rp 400.000.000</div>
                                  </a>
                                </div>
                                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordion">
                                  <div class="card-body">
                                    <table class="table tb-bete">
                                      <tbody>
                                        <tr>
                                          <td>Perlindungan isi rumah akibat Kebakaran dan Kebongkaran</td>
                                          <td>></td>
                                          <td>Rp 5.000</td>
                                        </tr>
                                        <tr>
                                          <td>Tanggung Jawab Hukum Pribadi terhadap Pihak Ketiga</td>
                                          <td>></td>
                                          <td>Rp 100.000</td>
                                        </tr>
                                        <tr>
                                          <td>Golf Equipment Benefit</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Kehilangan atau Kerusakan Peralatan Golf</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Hole In One</td>
                                          <td>></td>
                                          <td>Rp 500</td>
                                        </tr>
                                        <tr>
                                          <td>Perlindungan Kartu Kredit</td>
                                          <td>></td>
                                          <td>Rp 1000</td>
                                        </tr>
                                        <tr>
                                          <td>Biaya Telepon Medis</td>
                                          <td>></td>
                                          <td>Rp 1000</td>
                                        </tr>
                                        <tr>
                                          <td>Perpanjangan Polis Otomatis</td>
                                          <td>></td>
                                          <td>YES</td>
                                        </tr>
                                      </tbody>
                                    </table>
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
                 <!-- detail anda -->
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <div class="fase-3">
                    <div class="big-title">
                      <h1>Detail Pemegang Polis</h1>
                      <hr class="grs-title"/>
                    </div>
                    <div class="text-title">
                      <p>Mohon perhatikan bahwa semua informasi dalam formulir ini alah wajib.</p>
                      <p>Perhatikan bahwa anda mengisinya dengan benar</p>
                    </div>
                    <div class="form-area">
                      <div class="title-green">
                        <h3>Data Tertanggung</h3>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-3">
                                <label class="label-form">Nama</label>
                              </div>
                              <div class="col-9">
                                <input type="text" name="name" class="form-control" placeholder="Sesuai Paspor/KTP">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-3">
                                <label class="label-form">No Hp</label>
                              </div>
                              <div class="col-9">
                                <input type="text" name="name" class="form-control" placeholder="E.g 085800058086">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-3">
                                <label class="label-form">Email</label>
                              </div>
                              <div class="col-9">
                                <input type="email" name="name" class="form-control" placeholder="E.g Johnny@gmai.com">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-3">
                                <label class="label-form">Tgl Lahir</label>
                              </div>
                              <div class="col-9">
                                <input type="text" name="name" class="form-control" placeholder="12 Oct 1993">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-3">
                                <label class="label-form">Kota</label>
                              </div>
                              <div class="col-9">
                                <input type="text" name="name" class="form-control" placeholder="City">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-4">
                                <label class="label-form">Jenis Kelamin</label>
                              </div>
                              <div class="col-8">
                                <div class="sejajar">
                                 <!--  <div class="radio radio-success">
                                    <input type="radio" id="inlineRadio1" value="option1" name="radio1">
                                    <label for="inlineRadio1"> Pria </label>
                                  </div>
                                  <div class="radio radio-inline radio-success ">
                                      <input type="radio" id="inlineRadio1" value="option2" name="radio2">
                                      <label for="inlineRadio2"> Wanita </label>
                                  </div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-4">
                                <label class="label-form">Kewarganegaraan</label>
                              </div>
                              <div class="col-8">
                                <div class="sejajar">
                                <!--   <div class="radio radio-success">
                                    <input type="radio" id="kwn1" value="option1a" name="radio3">
                                    <label for="kwn1"> WNI </label>
                                  </div>
                                  <div class="radio radio-inline radio-success ">
                                      <input type="radio" id="kwn2" value="option1b" name="radio4">
                                      <label for="kwn2"> WNA</label>
                                  </div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-3">
                                <label class="label-form">Alamat</label>
                              </div>
                              <div class="col-9">
                                <textarea class="form-control" rows="4" placeholder="Alamat"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="continue nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="btn btn-success btn-continue nav-link" id="v-pills-pembayaran-tab" data-toggle="pill" href="#v-pills-pembayaran" role="tab" aria-controls="v-pills-pembayaran" aria-selected="false">Continue <i class="material-icons">arrow_forward</i></a>
                    </div>
                  </div>
                </div>
                <!-- pembayaran -->
                <div class="tab-pane fade" id="v-pills-pembayaran" role="tabpanel" aria-labelledby="v-pills-pembayaran-tab">
                  <div class="fase-4">
                    <div class="pembayaran">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="area-header"><!-- area header -->
                              <div class="row">
                                <div class="col-6">
                                  <div class="title-pemesanan">
                                    <h1>Detail Pemesanan</h1>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="img-package">
                                    <img src="img/insurance_gold.png">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="buy-perlindungan"><!-- part perlndungan -->

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
        </div>
      </div>
</form>
@stop      