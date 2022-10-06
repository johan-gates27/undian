<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Undian</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>theme/app-assets/images/ico/fav_dubai.png">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/vendors/css/extensions/toastr.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/vendors/css/ui/prism.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/vendors/css/file-uploaders/dropzone.min.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/vendors/css/extensions/nouislider.min.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/bootstrap-extended.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/colors.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/components.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/themes/dark-layout.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/themes/semi-dark-layout.css">

  <!-- BEGIN: Page CSS-->
  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/pages/app-ecommerce-shop.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/plugins/forms/wizard.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/plugins/extensions/toastr.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/plugins/file-uploaders/dropzone.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/modules/dropzone/dropzone.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/app-assets/css/plugins/extensions/noui-slider.min.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/assets/css/style.css">
  <!-- END: Custom CSS-->

</head>

<body class="vertical-layout vertical-menu-modern 2-columns ecommerce-application navbar-static footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

  <div class="app-content content">

    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-static-top navbar-light navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav bookmark-icons">
              </ul>
            </div>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <!-- <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">Reffa Putra Utama</span><span class="user-status">Available</span></div><span><img class="round" src="<?php echo base_url(); ?>theme/app-assets/images/ico/fav_dubai.png" alt="avatar" height="40" width="40" /></span> -->
                  <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"></span><span class="user-status"></span></div><span><img class="round" src="<?php echo base_url(); ?>theme/app-assets/images/ico/fav_dubai.png" alt="avatar" height="40" width="40" /></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href='#' data-usrname='<?php echo $this->session->userdata('sess_username'); ?>' data-aoname='<?php echo $this->session->userdata('sess_nama_user'); ?>' id='resetpassword' data-toggle='modal' data-target='#resetpass'> <i class="feather icon-user"></i> Ganti Password</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout"><i class="feather icon-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->


    <div class="content-wrapper">
      <a href="<?php echo base_url(); ?>nasabah">
        <div class="content-header row">
          <div class="content-header-right col-md-12 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h6 class="content-header-title text-center mb-0">Undian</h6>
              </div>
            </div>
          </div>
        </div>
      </a>
      <div class="content-body">
        <section id="basic-horizontal-layouts">
          <div class="row match-height">
            <div class="col-md-12 col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Horizontal Form</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group row">
                              <div class="col-md-4">
                                <span>Parameter Jml Pemenang</span>
                              </div>
                              <div class="col-md-8">
                                <input type="number" id="jml_pemenang_param" class="form-control" name="jml_pemenang_param" value="<?php echo @$jml_pemenang_param;?>">
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
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Horizontal Form with Icons</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>







  <?php


  ?>
</body>




<!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/vendors.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery_mask/jquery.mask.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
<!-- <script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/extensions/jquery.steps.min.js"></script> -->
<script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/extensions/toastr.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- <script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/pagination/jquery.bootpag.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/pagination/jquery.twbsPagination.min.js"></script> -->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url(); ?>theme/app-assets/js/core/app-menu.js"></script>
<script src="<?php echo base_url(); ?>theme/app-assets/js/core/app.js"></script>
<script src="<?php echo base_url(); ?>theme/app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="<?php echo base_url(); ?>theme/app-assets/js/scripts/pages/app-ecommerce-shop.js"></script> -->
<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="<?php echo base_url(); ?>theme/app-assets/js/scripts/forms/wizard-steps.js"></script> -->
<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="<?php echo base_url(); ?>theme/app-assets/js/scripts/pagination/pagination.js"></script> -->
<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="<?php echo base_url(); ?>theme/app-assets/js/scripts/extensions/dropzone.js"></script> -->
<!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url(); ?>assets/modules/dropzone/dropzone.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/extensions/dropzone.min.js"></script> -->
<script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/ui/prism.min.js"></script>
<script src="<?php echo base_url(); ?>theme/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="<?php echo base_url(); ?>theme/app-assets/js/scripts/modal/components-modal.js"></script>
<script src="<?php echo base_url(); ?>theme/app-assets/js/scripts/forms/select/form-select2.js"></script>
<!-- END: Page JS-->



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