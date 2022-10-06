<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
        <a href="index.html" class="navbar-brand sidebar-gone-hide">Undian</a>
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
      <div class="main-content" style="padding-top: 80px;" >
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
                            <span>Parameter Jml Pemenang</span>
                          </div>
                          <div class="col-md-8">
                            <input type="number" id="jml_pemenang_param" class="form-control" name="jml_pemenang_param" value="<?php echo @$jml_pemenang_param; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group row">
                          <div class="col-md-4">
                            <span>First Name</span>
                          </div>
                          <div class="col-md-8">
                            <input type="text" id="hasil" class="form-control" name="hasil" placeholder="First Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group row">
                          <div class="col-md-4">
                            <span>Mobile</span>
                          </div>
                          <div class="col-md-8">
                            <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 offset-md-4">
                        <button type="button" name="btn-generate" id="btn-generate" class="btn btn-success mr-1 mb-1 waves-effect waves-light">Generate</button>
                        <button type="button" name="btn-stop" id="btn-stop" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">stop</button>

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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
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

  function generate() {
    size = $("#jml_pemenang_param").val(); //jumlah pemenang dalam 1 kocokan
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

    console.log(numbers)

    $("#hasil").val(numbers)

    hasil = null
    hasil = numbers
    t = setTimeout(generate, 25) //25
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
    // console.log("hasil :" + hasil)
    for (var i = 0; i < hasil.length; i++) {
      validx = hasil[i]
      Object.entries(list_peserta[validx]).forEach(([key, value]) => {
        console.log(key, value); // key ,value
      });
      console.log("-----")
      // console.log(list_peserta[validx].NAMA)
    }
  }

  $(document).on('click', "button[name='btn-generate']", function(event) {
    startCount();
  });

  $(document).on('click', "button[name='btn-stop']", function(event) {

    stopCount()
    // setTimeout(function() {
    //   $("#result").slideDown(1000);
    // }, 500);
  });
</script>

</html>