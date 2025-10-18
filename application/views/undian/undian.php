<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <!-- <title>PDSB &rsaquo; IT PDSB GOES CARITA BEACH &mdash; UNDIAN</title> -->
  <title>PDSB &rsaquo; Doorprize &rsaquo; UNDIAN</title>

  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome-free-5.7.2-web/css/all.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
</head>

<body class="layout-3 navbar-bg bg-light">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg bg-light"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <!-- <a href="index.html" class="navbar-brand sidebar-gone-hide text-primary">PDSB</a> -->
        <h3><span class="navbar-brand sidebar-gone-hide  badge badge-primary">PDSB</span></h3>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse  w-100">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav w-100">
            <li class="nav-item active w-100">
              <h4>
                <a href="#" class="nav-link">
                  <marquee behavior="scroll" direction="left">
                    <span class="badge badge-pill badge-dark">DOORPRIZE MILAD 16</span>
                    <span class="badge badge-info font-italic">#TogetherWeGrowWeMatther</span>
                    <span class="badge badge-warning font-italic text-dark">#RaihMimpiMenangkanHadiah</span>
                    <span class="badge badge-secondary font-italic text-dark">#MainSekarangMenangBesar</span>
                    <span class="badge badge-success font-italic">#TanpaDepositDapatkanHadiahLangsung</span>
                    <span class="badge badge-light font-italic text-dark">#MaxWin</span>
                    <span class="badge badge-info font-italic">#MudahJp</span>
                  </marquee>
                </a>

              </h4>
            </li>
            <!-- <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li> -->
            <!-- <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li> -->
          </ul>
        </div>
        <ul class="navbar-nav navbar-right ml-auto">
          <li class="dropdown">
            <span class="badge badge-primary pl-0 pr-0">
              <!-- <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg nav-link-user"> -->
              <!-- <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/petir.png" class="rounded-circle mr-1"> -->
              <!-- <i class="fa fa-bolt" aria-hidden="true"></i> -->
              <!-- <div class="d-sm-none d-lg-inline-block"><strong>Hi, SULTAN</strong></div> -->
              <!-- </a> -->
              <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg nav-link-user" style="position: relative; display: inline-flex; align-items: center; padding-top: 60px;">
                <img alt="image" src="http://localhost/undian_doorprize/assets/img/avatar/petir.png"
                  style="position: absolute; top: -22px; left: -3px; width: 56px; height: 56px; border-radius: 37%; z-index: 10;">
                <div class="d-sm-none d-lg-inline-block pt-2 pb-2" style="margin-left: 36px;"><strong>Hi, SULTAN</strong></div>
              </a>
            </span>
            <!-- <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div> -->
          </li>
        </ul>
      </nav>

      <!-- <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="index-0.html" class="nav-link">General Dashboard</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Ecommerce Dashboard</a></li>
              </ul>
            </li> 


            <li class="nav-item active">
              <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Top Navigation</span></a>
            </li>

            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Multiple Dropdown</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="#" class="nav-link">Not Dropdown Link</a></li>
                <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Hover Me</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Link 2</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
                  </ul>
                </li>
              </ul>
            </li>


          </ul>
        </div>
      </nav> -->

      <!-- Main Content -->
      <div class="main-content" style="padding-top: 80px;">
        <section class="section">
          <!-- <div class="section-header">
            <h1>Top Navigation</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Top Navigation</div>
            </div>
          </div> -->

          <div class="section-body">
            <?php
            // echo "<pre>";
            // print_r($users);
            // echo "</pre>";
            ?>
            <div class="card">
              <div class="card-header">
                <h4>UNDIAN</h4>
                <!-- <button class="btn btn-sm btn-primary" id="play_back_sound"><span class='fa fa-volume-up'></span></button> -->
              </div>
              <div class="card-body">
                <!-- ----------------------------------------- -->
                <form class="form form-horizontal">
                  <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                  <div class="form-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group row">
                          <div class="col-md-2">
                            <label class="col-form-label" for="hasil">PILIH HADIAH</label>
                          </div>
                          <div class="col-md-10">
                            <select class="form-control" name="pilih_hadiah" id="pilih_hadiah">
                              <!-- <option value="" style="display:none;">-</option> -->
                              <?php foreach ($list_hadiah as $row) {
                              ?>
                                <option value="<?php echo $row['id'] . "|" . $row['sisa']; ?>"><?php echo $row['nama'] . " (&nbsp;" . $row['sisa'] . "&nbsp;/&nbsp;" . $row['qty_awal'] . "&nbsp;)"; ?></option>
                              <?php
                              } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group row">
                          <div class="col-md-2">
                            <label class="col-form-label" for="jml_pemenang_param">JML PEMENANG</label>
                            <?php
                            $conf_color = $this->session->userdata('conf_color');
                            $conf_size = $this->session->userdata('conf_size');
                            ?>
                          </div>
                          <div class="col-md-4">
                            <input type="number" id="jml_pemenang_param" class="form-control" name="jml_pemenang_param" min="0" max="200" value="<?php echo @$jml_pemenang_param; ?>">
                          </div>
                          <div class="col-md-2">
                            <h4>
                              <span class="badge badge-primary"><i class="fas fa-users" style="font-size: 15px;"></i>&nbsp;<strong><?php echo count($list_peserta); ?></strong>&nbsp;Remaining</span>
                            </h4>
                          </div>
                          <div class="col-md-1">
                            <label class="col-form-label" for="badges_color"> &nbsp;CONFIG</label>
                          </div>
                          <div class="col-md-2">
                            <select class="form-control" name="badges_color" id="badges_color">
                              <option value="primary" <?php echo ("primary" == $conf_color) ? " selected" : ""; ?>>White On Blue</option>
                              <option value="secondary" <?php echo ("secondary" == $conf_color) ? " selected" : ""; ?>>White On Grey</option>
                              <option value="success" <?php echo ("success" == $conf_color) ? " selected" : ""; ?>>White On Green</option>
                              <option value="danger" <?php echo ("danger" == $conf_color) ? " selected" : ""; ?>>White on Red</option>
                              <option value="warning" <?php echo ("warning" == $conf_color) ? " selected" : ""; ?>>Black On Yellow</option>
                              <option value="info" <?php echo ("info" == $conf_color) ? " selected" : ""; ?>>White on Blue Sky</option>
                              <option value="light" <?php echo ("light" == $conf_color) ? " selected" : ""; ?>>Black on Grey</option>
                              <option value="dark" <?php echo ("dark" == $conf_color) ? " selected" : ""; ?>>White On Black</option>
                            </select>
                          </div>
                          <div class="col-md-1">
                            <select class="form-control" name="badges_size" id="badges_size">
                              <option value="h1" <?php echo ("h1" == $conf_size) ? " selected" : ""; ?>>H1</option>
                              <option value="h2" <?php echo ("h2" == $conf_size) ? " selected" : ""; ?>>H2</option>
                              <option value="h3" <?php echo ("h3" == $conf_size) ? " selected" : ""; ?>>H3</option>
                              <option value="h4" <?php echo ("h4" == $conf_size) ? " selected" : ""; ?>>H4</option>
                              <option value="h5" <?php echo ("h5" == $conf_size) ? " selected" : ""; ?>>H5</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 d-none">
                        <div class="form-group row">
                          <div class="col-md-2">
                            <label class="col-form-label" for="hasil">NIK PEMENANG</label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" id="hasil" class="form-control" name="hasil" placeholder="NIK PEMENANG" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 text-center mb-3">
                        <button type="button" name="btn-generate" id="btn-generate" class="btn btn-success mr-1 mb-1 waves-effect waves-light"><strong><i class="fas fa-bolt"></i>&nbsp;START</strong></button>
                        <button type="button" name="btn-stop" id="btn-stop" class="btn btn-danger mr-1 mb-1 waves-effect waves-light"><strong><i class="fas fa-stop"></i>&nbsp;STOP&nbsp;</strong></button>
                        <button type="button" name="btn-save" id="btn-save" class="btn btn-warning mr-1 mb-1 waves-effect waves-light"><strong><i class="fas fa-check"></i>&nbsp;SAVE&nbsp;</strong></button>


                      </div>
                      <div class="col-12 text-center">
                        <div class="badges" id="pemenang_badges">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              </form>
            </div>
            <!-- ----------------------------------------- -->
            <!-- <div class="card-footer bg-whitesmoke">
                This is card footer
              </div> -->

            <div class="row">
              <div class="col-12 col-md-7 col-lg-7">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>List Pemenang</h4>
                    <h4>
                      <span class="badge badge-primary"><i class="fas fa-trophy" style="font-size: 15px;"></i>&nbsp; <strong><?php echo count($list_pemenang); ?></strong></span>
                    </h4>
                    <div class="card-header-action">
                      <a data-collapse="#card_list_pemenang" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse show" id="card_list_pemenang">
                    <div class="card-body pb-0" style="min-height:100px;">
                      <!-- <p> -->
                      <table class="table table-sm ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <!-- <th scope="col">Nik</th> -->
                            <th scope="col">Nama</th>
                            <!-- <th scope="col">Bagian</th> -->
                            <th scope="col">Hadiah</th>
                            <th scope="col">Waktu</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($list_pemenang as $row) {
                          ?>
                            <tr>
                              <th scope="row"><?php echo $i++; ?></th>
                              <td><?php echo $row['nik']; ?> - <?php echo ucwords(strtolower($row['name'])); ?> - <small><?php echo ucwords(strtolower(str_replace('DIVISI ', "", $row['subparent_name']))); ?></small></td>
                              <!-- <td></td> -->
                              <!-- <td></td> -->
                              <td><?php echo $row['nama_hadiah']; ?></td>
                              <td><?php echo $row['jam']; ?></td>
                            </tr>
                          <?php } ?>

                        </tbody>
                      </table>

                      <!-- </p> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-5 col-lg-5">
                <div class="card card-danger">
                  <div class="card-header">
                    <h4>Hangus</h4>
                    <h4>
                      <span class="badge badge-danger"><i class="fas fa-user-slash" style="font-size: 15px;"></i>&nbsp; <strong><?php echo count($list_hangus); ?></strong></span>
                    </h4>
                    <div class="card-header-action">
                      <a data-collapse="#card_list_hangus" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse show" id="card_list_hangus">
                    <div class="card-body pb-0" style="min-height:100px;">
                      <!-- <p> -->
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Hadiah</th>
                            <th scope="col">Waktu</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($list_hangus as $row) {
                            // print_r($row);
                          ?>
                            <tr>
                              <th scope="row"><?php echo $i++; ?></th>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['nama_hadiah']; ?></td>
                              <td><?php echo $row['jam']; ?></td>
                            </tr>
                          <?php } ?>

                        </tbody>
                      </table>
                      <!-- </p> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Hangus</h4>
                  </div>
                  <div class="card-body">
                    <p>LIST</p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </section>

      </div>

    </div>
    <footer class="main-footer mt-0">
      <div class="footer-left">
        &nbsp;IT Dev @2022 <div class="bullet"></div> Apps By <a href="#1234568">Johan Efendy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
      </div>
      <div class="footer-right">
        <!-- 2.3.0 -->
      </div>
    </footer>
  </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>node_modules/nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>node_modules/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url(); ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>
<script>
  var list_peserta = JSON.parse(`<?php echo json_encode($list_peserta, JSON_PRETTY_PRINT); ?>`)
  console.log(list_peserta)
  // bug list_peserta.length tidak perlu di kurang 1
  var max_peserta = list_peserta.length
  console.log(max_peserta)

  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>'
  var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>'


  var timer_is_on = 0;
  var t;
  var hasil

  function badge_winner(badges_sz, color, nama_pemenang, name, id, value, for_id) {
    var str = `
              <` + badges_sz + ` class="d-inline">
                <div class="form-check form-check-inline m-0">
                  <label class="tag form-check-label text-capitalize badge badge-` + color + ` mx-0" for="` + for_id + `">
                    <input type="checkbox" name="` + name + `" id="` + id + `" class="form-check-input mr-2" value="` + value + `" style="transform: scale(2); " checked="">
                    <strong>` + nama_pemenang + `</strong>
                  </label>
                </div>
              </` + badges_sz + `>
              `
    return str
  }

  var drum
  drum = new Audio(`<?php echo site_url("assets/notification/drum_roll_sound.mp3"); ?>`);
  drum.loop = true;

  var victory
  victory = new Audio(`<?php echo site_url("assets/notification/victory.mp3"); ?>`);

  var spongebob
  spongebob = new Audio(`<?php echo site_url("assets/notification/SpongeBob_Chum_Bucket_Rhumba.mp3"); ?>`);



  function playsound_victory() {
    pause_victory()
    pause_drum()
    pause_spongebob()
    // victory.play();
    spongebob.play();
  }

  function playsound_drum() {
    pause_victory()
    pause_drum()
    pause_spongebob()
    drum.play();
  }

  function playsound_spongebob() {
    pause_victory()
    pause_drum()
    pause_spongebob()
    spongebob.play();
  }

  function pause_victory() {
    victory.pause();
    victory.currentTime = 0;
  }

  function pause_drum() {
    drum.pause();
    drum.currentTime = 0;
  }

  function pause_spongebob() {
    spongebob.pause();
    spongebob.currentTime = 0;
  }



  $(document).on('click', "button[id='play_back_sound']", function(event) {
    playsound_spongebob()
  })
  $(document).on('click', "button[id='swal-6']", function(event) {
    swal({
        title: 'Are you sure?',
        text: 'Once deleted, you will not be able to recover this imaginary file!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal('Poof! Your imaginary file has been deleted!', {
            icon: 'success',
          });
        } else {
          swal('Your imaginary file is safe!');
        }
      });
    return false
  });

  function generate() {
    var pilih_hadiah = $.trim($("#pilih_hadiah").val())
    var badges_color = $("#badges_color").val()
    var badges_size = $("#badges_size").val()
    var jml_pemenang_param = $("#jml_pemenang_param").val()
    var msg_err = ""
    if (pilih_hadiah != "" && badges_color != "" && badges_size != "" && jml_pemenang_param > 0) {
      var isi = pilih_hadiah.split("|")
      var kode_hadiah = isi[0]
      var qty_hadiah = isi[1]

      // console.log(" qty_hadiah: " + qty_hadiah + " jml_pemenang_param: " + jml_pemenang_param + " badges_color: " + badges_color)

      if (qty_hadiah > 0) {
        // $("#btn-generate").hide()
        // $("#btn-stop").show()

        $("#pemenang_badges").html(null)
        size = $("#jml_pemenang_param").val(); //jumlah pemenang dalam 1 kocokan
        var badges_color = $("#badges_color").val();
        // var badges_html = `<` + badges_size + ` class="d-inline"><span class="badge badge-` + badges_color + `"><strong>`
        // var badges_html_end = `</strong></span></` + badges_size + `>`

        // console.log(badges_html)
        highest = max_peserta // jumlah seluruh peserta
        lowest = 0;

        var numbers = [];
        for (var i = 0; i < size; i++) {
          var add = true;
          var randomNumber = Math.floor(Math.random() * highest) + lowest;
          for (var y = 0; y < highest; y++) {
            if (numbers[y] == randomNumber) {
              add = false;
            }
          }
          if (add) {
            numbers.push(randomNumber);
          } else {
            i--;
          }
        }
        console.log("raw: " + numbers)

        // var highestNumber = 0;
        // for (var m = 0; m < numbers.length; m++) {
        //   for (var n = m + 1; n < numbers.length; n++) {
        //     if (numbers[n] < numbers[m]) {
        //       highestNumber = numbers[m];
        //       numbers[m] = numbers[n];
        //       numbers[n] = highestNumber;
        //     }
        //   }
        // }
        // console.log("Ordered: "+numbers)

        // console.log(numbers)

        // $("#hasil").val(numbers)

        hasil = null
        nik_pemenang = []
        hasil = numbers
        var row = ''
        for (var i = 0; i < hasil.length; i++) {
          validx = hasil[i]
          row = list_peserta[validx]
          // console.log(row)
          // $("#pemenang_badges").append(badges_html + row.NIK.toUpperCase() +badges_html_val + row.NAME.toUpperCase() + ` - ` + row.SUBPARENT_NAME + ` - ` + row.NIK + badges_html_end)
          $("#pemenang_badges").append(badge_winner(badges_size, badges_color, row.NAME.toUpperCase() + ` - ` + row.SUBPARENT_NAME + ` - ` + row.NIK, `badges_win_` + row.NIK, row.NIK, row.NIK, row.NIK))
          // nik_pemenang.push(row.NIK)
          nik_pemenang[i] = row.NIK
          // console.log("-----")
        }
        $("#hasil").val(nik_pemenang)
        // console.log(nik_pemenang)




        t = setTimeout(generate, 25) //25
      } else {
        if (qty_hadiah == 0) {
          msg_err = "Hadiah Ini Telah Habis"
          alert(msg_err)
          timer_is_on = 0
        }
      }
    } else {
      if (jml_pemenang_param == 0) {
        msg_err = "Jumlah Pemenang Belum Di Tentukan"
      } else if (badges_color == "") {
        msg_err = "Pilih Warna Latar Pemenang"
      } else if (badges_size == "") {
        msg_err = "Size Text Pemenang Belum Ditentukan"
      }
      alert(msg_err)
      timer_is_on = 0
    }
  }

  function startCount() {
    if (!timer_is_on) {
      timer_is_on = 1;
      generate();
    }
  }

  function stopCount() {
    clearTimeout(t);
    timer_is_on = 0;
  }

  $(document).on('change', "select[name='badges_size']", function(event) {
    $.ajax({
      type: "POST",
      data: {
        [csrfName]: csrfHash,
        color: $("#badges_color").val(),
        size: $("#badges_size").val()
      },
      cache: false,
      url: "<?php echo site_url('undian/config_ui'); ?>",
      dataType: 'json',
      success: function(data) {
        csrfName = data.csrfName
        csrfHash = data.csrfHash
        $("input[name='" + csrfName + "']").val(csrfHash)
      },
      error: function(data) {
        // alert("Gagal ", +data)
        swal('Gagal ' + data);
      }
    })
  })

  $(document).on('blur', "input[name='jml_pemenang_param']", function(event) {
    var pilih_hadiah = $("#pilih_hadiah").val()
    var isi = pilih_hadiah.split("|")
    var kode_hadiah = isi[0]
    var qty = isi[1]

    var ini_val = parseInt(this.value)

    console.log(qty + "-" + this.value + "-" + this.id)

    if (ini_val > parseFloat(qty)) {
      $("#jml_pemenang_param").val(0)
      swal("Jumlah Pemenang Tidak Boleh Melebihi Jumlah Hadiah", {
        icon: 'warning',
      });
    }

  })

  $(document).on('change', "select[name='badges_color']", function(event) {
    $.ajax({
      type: "POST",
      data: {
        [csrfName]: csrfHash,
        color: $("#badges_color").val(),
        size: $("#badges_size").val()
      },
      cache: false,
      url: "<?php echo site_url('undian/config_ui'); ?>",
      dataType: 'json',
      success: function(data) {
        csrfName = data.csrfName
        csrfHash = data.csrfHash
        $("input[name='" + csrfName + "']").val(csrfHash)
      },
      error: function(data) {
        // alert("Gagal ", +data)
        swal('Gagal ' + data);
      }
    })
  })

  $(document).on('change', "select[name='pilih_hadiah']", function(event) {
    var isi = this.value.split("|")
    var kode_hadiah = isi[0]
    var qty = isi[1]

    if (qty > 0) {
      $("#jml_pemenang_param").attr('max', qty).val(1).trigger('change');
    } else {
      $("#jml_pemenang_param").attr('min', 0).attr('max', 0).val(0).trigger('change');
    }
  })

  // $("#btn-stop").hide()

  $(document).on('click', "button[name='btn-generate']", function(event) {
    startCount();
    playsound_drum()
  });

  $(document).on('click', "button[name='btn-stop']", function(event) {
    // $(this).hide()
    // $("#btn-generate").show()
    stopCount()

    pause_drum()
    playsound_victory()
    // setTimeout(function() {
    //   $("#result").slideDown(1000);
    // }, 500);
  });

  $(document).on('click', "button[name='btn-save']", function(event) {
    var pilih_hadiah = $("#pilih_hadiah").val()
    var isi = pilih_hadiah.split("|")
    var id_hadiah = isi[0]

    var list_pemenang = []
    var list_hangus = []
    var hasil = $.trim($("#hasil").val())
    if (hasil != "") {
      swal({
          title: 'Confirmation!',
          text: 'Klik OK untuk Simpan!',
          icon: 'warning',
          buttons: true,
          dangerMode: false,
        })
        .then((willSave) => {
          if (willSave) {

            $("input[name^='badges_win_']:checked").each(function(index) {
              // console.log(index+ ` - `+$(this).val())
              list_pemenang[index] = $(this).val()
            })
            $("input[name^='badges_win_']:not(:checked)").each(function(index) {
              // console.log(index+ ` - `+$(this).val())
              list_hangus[index] = $(this).val()
            })
            console.log("pemengang")
            console.log(list_pemenang)
            console.log("hagus")
            console.log(list_hangus)

            $.ajax({
              type: "POST",
              data: {
                [csrfName]: csrfHash,
                pemenang: list_pemenang,
                hangus: list_hangus,
                id_hadiah: id_hadiah
              },
              cache: false,
              url: "<?php echo site_url('undian/simpan'); ?>",
              dataType: 'json',
              success: function(data) {
                csrfName = data.csrfName
                csrfHash = data.csrfHash
                console.log(data.pemenang)
                $("input[name='" + csrfName + "']").val(csrfHash)

                if (data.simpan_pemenang == list_pemenang.length && data.simpan_hangus == list_hangus.length) {
                  swal('Simpan Sukses', {
                    icon: 'success',
                  }).then((data) => {
                    location.reload()
                  });

                }

              },
              error: function(data) {
                // alert("Gagal ", +data)
                swal('Gagal ' + data);
              }
            })
          } else {

          }
        });
    } else {
      swal("Silahan Laukan Pengundian Terlebih Dahulu", {
        icon: 'warning',
      });

    }

  })
</script>

</html>