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
          <div class="row">
            <form method="POST" class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h5 class="title" style="text-align:center">PENCARIAN</h5>
                </div>
                <div class="card-body">
            <div class="row">
            <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Pilih Kategori</label>
                        <select name="kategori" class="form-control kategori">
                          <option value="">- pilih Kejadian -</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" class="form-control" placeholder="Waktu" name="waktu" id="waktu" required>
                      </div>
                    </div>
                  <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Nama Kota</label>
                        <select name="kota" class="form-control kota">
                          <option value="">- pilih Kabupaten/Kota -</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Nama Kecamatan</label>
                        <select name="kecamatan" class="form-control kecamatan">
                          <option value="">- pilih Kecamatan -</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Nama Desa</label>
                        <select name="desa" class="form-control desa">
                          <option value="">- pilih Desa -</option>
                        </select>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary btn-block">Cari</button>
              <button type="submit" class="btn btn-info btn-block">Cetak</button>
              <button type="submit" class="btn btn-success btn-block">Download</button>
            </div>
            </div>
            </div>
            </div>
            </form>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="title" style="text-align:center">HASIL</h5>
                </div>
                <div class="card-body">
                </div>
              </div>
            </div>
          </div>
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
  <script type="text/javascript">
    $(function(){
      $('.kategori').select2({
           minimumInputLength: 1,
           allowClear: true,
           placeholder: 'masukkan nama kategori',
           ajax: {
              dataType: 'json',
              url: '<?= $domain;?>laporan.php?halaman=daftar-kategori-list',
              delay: 800,
              data: function(params) {
                return {
                  search: params.term
                }
              },
              processResults: function (data, page) {
              return {
                results: data
              };
            },
          }
      }).on('select2:select', function (evt) {
         var data = $(".kategori option:selected").text();
         //alert("Data yang dipilih adalah "+data);
      });
       $('.kota').select2({
           minimumInputLength: 1,
           allowClear: true,
           placeholder: 'masukkan nama kota',
           ajax: {
              dataType: 'json',
              url: '<?= $domain;?>laporan.php?halaman=daftar-kota-list',
              delay: 800,
              data: function(params) {
                return {
                  search: params.term
                }
              },
              processResults: function (data, page) {
              return {
                results: data
              };
            },
          }
      }).on('select2:select', function (evt) {
         var data = $(".kota option:selected").text();
         //alert("Data yang dipilih adalah "+data);
      });
      $('.kota').on('change', function() {
            var id = this.value;
            console.log(id);
            $('.kecamatan').select2({
           minimumInputLength: 1,
           allowClear: true,
           placeholder: 'masukkan nama kecamatan',
           ajax: {
              dataType: 'json',
              url: '<?= $domain;?>laporan.php?halaman=daftar-kecamatan-list&kota='+id,
              delay: 800,
              data: function(params) {
                return {
                  search: params.term
                }
              },
              processResults: function (data, page) {
              return {
                results: data
              };
            },
          }
      }).on('select2:select', function (evt) {
         var data = $(".kecamatan option:selected").text();
         //alert("Data yang dipilih adalah "+data);
      });
    });
    $('.kecamatan').on('change', function() {
            var id = this.value;
            console.log(id);
            $('.desa').select2({
           minimumInputLength: 1,
           allowClear: true,
           placeholder: 'masukkan nama desa',
           ajax: {
              dataType: 'json',
              url: '<?= $domain;?>laporan.php?halaman=daftar-desa-list&kecamatan='+id,
              delay: 800,
              data: function(params) {
                return {
                  search: params.term
                }
              },
              processResults: function (data, page) {
              return {
                results: data
              };
            },
          }
      }).on('select2:select', function (evt) {
         var data = $(".desa option:selected").text();
         //alert("Data yang dipilih adalah "+data);
      });
    });
 });
</script>
</body>

</html>