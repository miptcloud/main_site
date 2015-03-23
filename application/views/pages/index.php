<?
$page->addStyle("plugins/flexslider/flexslider.css");
$page->addStyle("plugins/parallax-slider/css/parallax-slider.css");

$page->addScript("plugins/flexslider/jquery.flexslider-min.js");
$page->addScript("plugins/parallax-slider/js/modernizr.js");
$page->addScript("plugins/parallax-slider/js/jquery.cslider.js");
$page->addScript("js/plugins/parallax-slider.js");
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();      
        ParallaxSlider.initParallaxSlider();
    });
</script>
<style>
	.da-slider{
		background-image: url("/content/panorama.jpg");
	}	
</style>
    <!--=== Slider ===-->
    <div class="slider-inner">
        <div id="da-slider" class="da-slider">
            <div class="da-slide da-slide-current">
                <h2><i>ВНЕДРЕНИЕ</i> <br> <i>ОБЛАЧНЫХ РЕШЕНИЙ</i> <br> <i>В ПРОМЫШЛЕННОСТЬ</i></h2>
                <p><i>3D-обработка,</i> <br> <i>медиаконтент,</i> <br> <i>здравоохранение,  </i> <br> <i>нефте- газоразведка</i></p>
                <div class="da-img"><img src="/content/runner.jpg" alt="image01"></div>
            </div>
            <div class="da-slide">
                <h2><i>ONLINE</i> <br> <i>ОБРАЗОВАНИЕ</i></h2>
                <p><i>В удобное время и без</i> <br> <i>территориальных ограничений,</i> <br> <i>интерактивность и </i> <br> <i>индивидуальный подход</i></p>
                <div class="da-img"><img class="img-responsive" src="/content/cloud-computing.png" alt=""></div>
            </div>
            <div class="da-slide">
                <h2><i>ИННОВАЦИОННЫЙ</i> <br> <i>ПРАКТИКУМ</i></h2>
                <p><i>Интерактивное и практико-</i> <br> <i>ориентированное введение</i><br><i>в современные отрасли</i><br><i>промышленности</i></p>
                <div class="da-img">
				<img class="img-responsive" src="/content/solarbattery.jpg" alt="">
    				<!-- <iframe src="./MIPT_files/47911018.html" width="530" height="300" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>--> 
                </div>
            </div>
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>		
            </div>
        <nav class="da-dots"><span class="da-dots-current"></span><span></span><span></span></nav></div>
    </div><!--/slider-->
    <!--=== End Slider ===-->

    <!--=== Purchase Block ===-->
    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>Лаборатория облачной инфраструктуры <br>для интеллектуальных цифровых предприятий</span>
                    <p>Объединение групп исследователей для проведения научно-прикладной и учебно-научной деятельности с целью интеграции достижений современной науки и промышленности. В состав Лаборатории входят ученые с мировым именем, молодые ученые, исследователи, аспиранты и студенты.</p>
                </div>            
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="#" class="btn-u btn-u-lg"><i class="fa fa-cloud-download"></i> Пресс-релиз</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
    <!-- End Purchase Block -->

    <!--=== Content Part ===-->
    <div class="container content">	
    	<!-- Service Blocks -->
    	<div class="row margin-bottom-30">
        	<div class="col-md-4">
        		<div class="service">
                    <i class="fa fa-cogs service-icon"></i>
        			<div class="desc">
        				<h4>Система управления знаниями</h4>
                        <p>Управления внутренним информационным ресурсом (базой знаний) компании и интеграция с внутренними и внешними коммуникациями для коллективной работы над задачами, проектами, учебными курсами и документами.</p>
        			</div>
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="service">
                    <i class="fa fa-rocket service-icon"></i>
        			<div class="desc">
        				<h4>Online образование</h4>
                        <p>Разработка прототипа распределенной образовательной среды для проведения онлайн-лекций и семинаров, дистанционных курсов повышения квалификации</p>
        			</div>
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="service">
                    <i class="fa fa-compress service-icon"></i>
        			<div class="desc">
        				<h4>Инновационный практикум</h4>
                        <p>Внедрение результатов деятельности студентов и аспирантов в различные отрасли промышленности – медицина, микроэлектроника, финансовый и госсектор, нефте- и газоразведка и другие области.</p>
        			</div>
        		</div>	
        	</div>			    
    	</div>
    	<!-- End Service Blokcs -->

    	<!-- Recent Works -->
		<!--
        <div class="headline"><h2>Recent Works</h2></div>
        <div class="row margin-bottom-20">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                	<div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/masonry/blog1.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>					
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project One</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/masonry/blog2.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>                   
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Two</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/masonry/blog3.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>                   
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Three</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/masonry/blog4.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>                   
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Four</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
        </div>
		-->
    	<!-- End Recent Works -->

    	<!-- Info Blokcs -->
    	<div class="row margin-bottom-30">
        	<!-- Welcome Block -->
    		<div class="col-md-8 md-margin-bottom-40">
    			<div class="headline"><h2>Мы на волне перспектив будущего</h2></div>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive margin-bottom-20" src="/content/carl-anderson.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p>Руководитель Лаборатории - IBM Fellow, к.ф.н., ведущий разработчик компании IBM и главный инженер физического проектирования группы IBM Enterprise Server.</p>
                        <ul class="list-unstyled margin-bottom-20">
                            <li><i class="fa fa-check color-green"></i> корпоративные распределенные сети</li>
                            <li><i class="fa fa-check color-green"></i> облачные технологии в промышленности</li>
                            <li><i class="fa fa-check color-green"></i> экосистема цифрового производства</li>
                            <li><i class="fa fa-check color-green"></i> инновационные стратегии облачных вычислений</li>
                        </ul>                    
                    </div>
                </div>

                <blockquote class="hero-unify">
                    <p><i>&quot;There was exponential growth in the railroad industry in the 1800s; there was exponential growth in the automobile industry in the 1930s and 1940s; and there was exponential growth in the performance of aircraft until [test pilots reached] the speed of sound. But eventually exponential growth always comes to an end&quot;</i></p>
                    <small>April of 2009, International Symposium On Physical Design</small>
                </blockquote>
            </div><!--/col-md-8-->        

            <!-- Latest Shots -->
            <div class="col-md-4">
    			<div class="headline"><h2>Лекции Лаборатории</h2></div>
    			<div id="myCarousel" class="carousel slide carousel-v1">
                    <div class="carousel-inner">
                        <div class="item active">
                            <iframe width="360" height="222" src="//www.youtube.com/embed/TF0LAjH9_h8" frameborder="0" allowfullscreen></iframe>
                            <div class="carousel-caption">
                                <!--<p>Лекция №1 [название]</p>-->
							</div>
                        </div><!--
                        <div class="item">
                            <img src="assets/img/main/22.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Online лекции и семинары</p>
                            </div>
                        </div>-->
                        <div class="item">
                            <iframe width="360" height="222" src="//www.youtube.com/embed/8ZHLEVui3mg" frameborder="0" allowfullscreen></iframe>
                            <div class="carousel-caption">
                                <!--<p>Лекция №2 [название]</p>-->
                            </div>
                        </div><!--
                        <div class="item">
                            <img src="assets/img/main/23.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Online лекции и семинары</p>
                            </div>
                        </div>-->
                    </div>
                    
                    <div class="carousel-arrow">
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
    			</div>
            </div><!--/col-md-4-->
    	</div>	
    	<!-- End Info Blokcs -->

        <!-- Our Clients -->
        <div id="clients-flexslider" class="flexslider home clients">
            <div class="headline"><h2>Наши партнёры</h2></div>    
            <ul class="slides">
                <li>
                    <a href="#">
						<img src="/content/logo_mgtu_gray.png" alt=""> 
						<img src="/content/logo_mgtu.png" class="color-img" alt=""> 
                        <!--<img src="assets/img/clients/hp_grey.png" alt=""> 
                        <img src="assets/img/clients/hp.png" class="color-img" alt="">-->
                    </a>
                </li>
                <li>
                    <a href="#">
						<img src="/content/logo_mtusi_gray.png" alt=""> 
						<img src="/content/logo_mtusi.png" class="color-img" alt=""> 
                    </a>
                </li>
                <li>
                    <a href="#">
						<img src="/content/logo_kfu_gray.png" alt=""> 
						<img src="/content/logo_kfu.png" class="color-img" alt=""> 
                    </a>
                </li>
                <li>
                    <a href="#">
						<img src="/content/logo_sevntu_gray.png" alt=""> 
						<img src="/content/logo_sevntu.png" class="color-img" alt=""> 
                    </a>
                </li>
                <li>
                    <a href="#">
						<img src="/content/logo_yufu_gray.png" alt=""> 
						<img src="/content/logo_yufu.png" class="color-img" alt=""> 
                    </a>
                </li>
                <li>
                    <a href="#">
						<img src="/content/logo_belgu_gray.png" alt=""> 
						<img src="/content/logo_belgu.png" class="color-img" alt=""> 
                    </a>
                </li>
                <li>
                    <a href="#">
						<img src="/content/logo_sfu_gray.png" alt=""> 
						<img src="/content/logo_sfu.png" class="color-img" alt=""> 
                    </a>
                </li>
                <li>
                    <a href="#">
						<img src="/content/logo_miet_gray.png" alt=""> 
						<img src="/content/logo_miet.png" class="color-img" alt=""> 
                    </a>
                </li>
                <li>
                    <a href="#">
						<img src="/content/logo_kbgu_gray.png" alt=""> 
						<img src="/content/logo_kbgu.png" class="color-img" alt=""> 
                    </a>
                </li>
            </ul>
        </div><!--/flexslider-->
        <!-- End Our Clients -->
    </div><!--/container-->		
    <!-- End Content Part -->