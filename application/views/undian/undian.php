<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome-free-5.7.2-web/css/all.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">Milad 13</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item active"><a href="#" class="nav-link">Panin Dubai Syariah</a></li>
            <!-- <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li> -->
            <!-- <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li> -->
          </ul>
        </div>
        <form class="form-inline ml-auto">
          <!-- biarkan jangan dihapus bekas search -->
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Johan</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
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
            </div>
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
              </div>
              <div class="card-body">
                <!-- ----------------------------------------- -->
                <form class="form form-horizontal">
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
                                <option value="<?php echo $row['id'] . "|" . $row['sisa']; ?>"><?php echo $row['nama'] . " (" . $row['qty_awal'] . " / " . $row['sisa'] . ")"; ?></option>
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
                          </div>
                          <div class="col-md-4">
                            <input type="number" id="jml_pemenang_param" class="form-control" name="jml_pemenang_param" min="0" max="30" value="<?php echo @$jml_pemenang_param; ?>">
                          </div>
                          <div class="col-md-1">
                            <label class="col-form-label" for="badges_color">CONFIG</label>
                          </div>
                          <div class="col-md-3">
                            <select class="form-control" name="badges_color" id="badges_color">
                              <option value="primary">White On Blue</option>
                              <option value="secondary">White On Grey</option>
                              <option value="success">White On Green</option>
                              <option value="danger">White on Red</option>
                              <option value="warning">Black On Yellow</option>
                              <option value="info">White on Blue Sky</option>
                              <option value="light">Black on Grey</option>
                              <option value="dark">White On Black</option>
                            </select>
                          </div>
                          <div class="col-md-2">
                            <select class="form-control" name="badges_size" id="badges_size">
                              <option value="h1">H1</option>
                              <option value="h2">H2</option>
                              <option value="h3">H3</option>
                              <option value="h4" selected>H4</option>
                              <option value="h5">H5</option>
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
                        <button type="button" name="btn-stop" id="btn-stop" class="btn btn-danger mr-1 mb-1 waves-effect waves-light"><strong><i class="fas fa-times"></i>&nbsp;STOP&nbsp;</strong></button>
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
          </div>
      </div>

      </section>
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
          <div class="card">
            <div class="card-header">
              <h4>Example Card</h4>
            </div>
            <div class="card-body">
              <!-- ----------------------------------------- -->
              <form class="form form-horizontal">
                <div class="form-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group row">
                        <div class="col-md-4">
                          <span>First Name</span>
                        </div>
                        <div class="col-md-8">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" name="fname-icon" placeholder="First Name">
                            <div class="form-control-position">
                              <i class="feather icon-user"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group row">
                        <div class="col-md-4">
                          <span>Mobile</span>
                        </div>
                        <div class="col-md-8">
                          <div class="position-relative has-icon-left">
                            <input type="number" id="contact-icon" class="form-control" name="contact-icon" placeholder="Mobile">
                            <div class="form-control-position">
                              <i class="feather icon-smartphone"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                    </div>
                  </div>
                </div>
              </form>



              <!-- ----------------------------------------- -->
            </div>
            <div class="card-footer bg-whitesmoke">
              This is card footer
            </div>
          </div>
        </div>

      </section>
    </div>
    <footer class="main-footer mt-0">
      <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
      </div>
      <div class="footer-right">
        2.3.0
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

  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>
<script>
  var list_peserta = JSON.parse(`<?php echo json_encode($list_peserta, JSON_PRETTY_PRINT); ?>`)
  var max_peserta = list_peserta.length - 1
  console.log(max_peserta)


  var timer_is_on = 0;
  var t;
  var hasil

  function badge_winner(badges_sz, color, nama_pemenang, name, id, value, for_id) {
    var str = `
              <` + badges_sz + ` class="d-inline">
                <div class="form-check form-check-inline m-0">
                  <label class="tag form-check-label text-capitalize badge badge-`+color+` mx-0" for="` + for_id + `">
                    <input type="checkbox" name="` + name + `" id="` + id + `" class="form-check-input mr-2" value="` + value + `" style="transform: scale(2); " checked="">
                    <strong>` + nama_pemenang + `</strong>
                  </label>
                </div>
              </` + badges_sz + `>
              `
    return str
  }

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

        var highestNumber = 0;
        for (var m = 0; m < numbers.length; m++) {
          for (var n = m + 1; n < numbers.length; n++) {
            if (numbers[n] < numbers[m]) {
              highestNumber = numbers[m];
              numbers[m] = numbers[n];
              numbers[n] = highestNumber;
            }
          }
        }

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

  $(document).on('click', "button[name='btn-generate']", function(event) {
    startCount();
  });

  $(document).on('click', "button[name='btn-stop']", function(event) {
    stopCount()
    // setTimeout(function() {
    //   $("#result").slideDown(1000);
    // }, 500);
  });

  $(document).on('click', "button[name='btn-save']", function(event) {
    var list_pemenang = []
    var list_hangus = []
    var hasil = $.trim($("#hasil").val())
    if (hasil != "") {
      var r = confirm("Klik OK untuk Simpan!");
      if (r == true) {
        $("input[name^='badges_win_']:checked").each(function(index){
          // console.log(index+ ` - `+$(this).val())
          list_pemenang[index]=$(this).val()
        })
        $("input[name^='badges_win_']:not(:checked)").each(function(index){
          // console.log(index+ ` - `+$(this).val())
          list_hangus[index]=$(this).val()
        })
        alert(list_pemenang+"\n"+list_hangus)
      }
    } else {
      alert("Silahan Laukan Pengundian Terlebih Dahulu")
    }

  })
</script>

</html>