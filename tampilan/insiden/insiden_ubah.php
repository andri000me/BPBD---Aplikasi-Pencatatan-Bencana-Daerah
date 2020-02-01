<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= $domain ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= $domain ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= $domain ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= $domain ?>assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <?php include('tampilan/_include/sidebar.php');?>
    <div class="main-panel" id="main-panel">
      <?php include('tampilan/_include/navbar.php');?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <form method="POST">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h5 class="title">Ubah Kota</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label>Nama Kota</label>
                        <input type="text" class="form-control" placeholder="Nama Kota" name="kota" id="kota" value="<?=$detail["nama_kota"];?>" required>
                        <input type="hidden" name="id" id="id" value="<?=$detail["id_kota"];?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card" style="padding: 20px">
              <button type="submit" class="btn btn-primary btn-block">Ubah Kota</button>
              <a class="btn btn-danger btn-block" href="<?=$domain?>kota.php">Batal</a>
              </div>
            </div>
          </div>
        </form>
      </div>
      <?php include('tampilan/_include/footer.php');?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= $domain ?>assets/js/core/jquery.min.js"></script>
  <script src="<?= $domain ?>assets/js/core/popper.min.js"></script>
  <script src="<?= $domain ?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= $domain ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= $domain ?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= $domain ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= $domain ?>assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= $domain ?>assets/js/bpbd.js"></script>
</body>

</html>