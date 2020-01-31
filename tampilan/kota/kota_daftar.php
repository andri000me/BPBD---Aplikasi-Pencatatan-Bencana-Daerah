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

  <!-- Custom styles for this page -->
  <link href="<?= $domain ?>assets/js/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Daftar Kota</h4>
                <a class="btn btn-info" href="<?=$domain?>kota.php?halaman=tambah">Tambah Kota</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="dataTable">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama Kota
                      </th>
                      <th>
                        Aksi
                      </th>
                    </thead>
                  </table>
                </div>
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
  <!-- Chart JS -->
  <script src="<?= $domain ?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= $domain ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!--  DataTables    -->
  <script src="<?= $domain ?>assets/js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= $domain ?>assets/js/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= $domain ?>assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= $domain ?>assets/js/bpbd.js"></script>

  <script>
// Call the dataTables jQuery plugin
$(document).ready(function() {
  var table = $('#dataTable').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],
        "processing": true,
        "serverSide": true,
        "ajax": "<?= $domain;?>kota.php?halaman=daftar-list"
    } );
    table.on('draw.dt', function () {
    var info = table.page.info();
    table.column(0, { search: 'applied', order: 'applied', page: 'applied' }).nodes().each(function (cell, i) {
        cell.innerHTML = i + 1 + info.start;
    });
});
});

</script>
</body>

</html>