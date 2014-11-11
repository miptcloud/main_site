<?
$page->addScript("http://maps.google.com/maps/api/js?sensor=true");
$page->addStyle("css/pages/page_contact.css");
$page->addScript("js/pages/page_contacts.js");
$page->addScript("plugins/gmap/gmap.js");
$page->addScript("plugins/flexslider/jquery.flexslider-min.js");



?>
	
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();                
        ContactPage.initMap();   		
    });
</script>
<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Контактные данные</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Pages</a></li>
                <li class="active">Contacts</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">		
        <div class="row margin-bottom-60">
            <div class="col-md-6 col-sm-6">
                <!-- Google Map -->
                <div id="map" class="height-450">
                </div>
                <!-- End Google Map -->
            </div>
            <div class="col-md-6 col-sm-6">
                <!-- Get in Touch -->
                <h3>Get in Touch</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem</p>

                <hr>

                <!-- Contacts -->
                <h3>The Office</h3>
                <ul class="list-unstyled who">
                    <li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
                </ul>

                <hr>
                
                <!-- Business Hours -->
                <h3>Business Hours</h3>
                <ul class="list-unstyled">
                    <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                    <li><strong>Saturday:</strong> 11am to 3pm</li>
                    <li><strong>Sunday:</strong> Closed</li>
                </ul>
            </div>
        </div>

        <!-- Our Clients -->
        <div id="clients-flexslider" class="flexslider home clients">
            <div class="headline"><h2>Our Clients</h2></div>    
            <ul class="slides">
                <li>
                    <a href="#">
                        <img src="assets/img/clients/hp_grey.png" alt="" /> 
                        <img src="assets/img/clients/hp.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/igneus_grey.png" alt="" /> 
                        <img src="assets/img/clients/igneus.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/vadafone_grey.png" alt="" /> 
                        <img src="assets/img/clients/vadafone.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/walmart_grey.png" alt="" /> 
                        <img src="assets/img/clients/walmart.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/shell_grey.png" alt="" /> 
                        <img src="assets/img/clients/shell.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/natural_grey.png" alt="" /> 
                        <img src="assets/img/clients/natural.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/aztec_grey.png" alt="" /> 
                        <img src="assets/img/clients/aztec.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/gamescast_grey.png" alt="" /> 
                        <img src="assets/img/clients/gamescast.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/cisco_grey.png" alt="" /> 
                        <img src="assets/img/clients/cisco.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/everyday_grey.png" alt="" /> 
                        <img src="assets/img/clients/everyday.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/cocacola_grey.png" alt="" /> 
                        <img src="assets/img/clients/cocacola.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/spinworkx_grey.png" alt="" /> 
                        <img src="assets/img/clients/spinworkx.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/shell_grey.png" alt="" /> 
                        <img src="assets/img/clients/shell.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/natural_grey.png" alt="" /> 
                        <img src="assets/img/clients/natural.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/gamescast_grey.png" alt="" /> 
                        <img src="assets/img/clients/gamescast.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/everyday_grey.png" alt="" /> 
                        <img src="assets/img/clients/everyday.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/spinworkx_grey.png" alt="" /> 
                        <img src="assets/img/clients/spinworkx.png" class="color-img" alt="" />
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Our Clients -->
    </div><!--/container-->		
    <!--=== End Content Part ===-->