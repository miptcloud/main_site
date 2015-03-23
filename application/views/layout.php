<?
/* @var $app Door\Core\Application */
?><!DOCTYPE html>
<html lang="<?=$app->lang->lang()?>">
<head>
    <?=$headers?>
</head> 
<body>
<div class="wrapper">
    <!--=== Header ===-->    
    <div class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <!--<ul class="loginbar pull-right">
                    <li>
                        <i class="fa fa-globe"></i>
                        <a>Languages</a>
                        <ul class="languages">
                            <li class="active">
                                <a href="#">English <i class="fa fa-check"></i></a> 
                            </li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Russian</a></li>
                            <li><a href="#">German</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>   
                    <li><a href="page_faq.html">Help</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="page_login.html">Login</a></li>   
                </ul>-->
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <?=$top_menu?>         
        <!-- End Navbar -->
    </div>
    <!--=== End Header ===-->   
	
    <?=$content?>    

     <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- Clients -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Наши клиенты</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="https://rt.ru/" target="_blank"><img width="75px" src="http://perenos-nomera.ru/wp-content/uploads/2014/01/rostelecom.jpg"</img></a>
                                    <small>Телекоммуникационные услуги для пользователей всех уровней</small>
                                </li>
                                <li>
                                    <a href="http://rostec.ru/" target="_blank"><img width="75px" src="http://toplogos.ru/images/thumbs/preview-logo-rostec.jpg"</img></a>
                                    <small>Содействие разработке и производству высокотехнологичной промышленной продукции</small>
                                </li>
                            </ul>
                        </div>						
                    </div><!--/col-md-3-->  
                    <!-- Clients -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Новости</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="http://www.pcweek.ru/its/article/detail.php?ID=168462">10 ноября 2014<br>IBM предлагает динамическую защиту для облаков</a>
                                    <small>11 ноября 2014</small>
                                </li>
                                <li>
                                    <a href="http://itexpert.org.ua/rubrikator/item/39009-dva-ukrainskikh-universiteta-pereshli-na-oblachnye-tekhnologii.html">23 октября 2014<br>Два украинских университета перешли на облачные технологии</a>
                                    <small>11 ноября 2014</small>
                                </li>
                                <li>
                                    <a href="http://mipt.ru/drec/news/Lektsii_Karla_Andersona">17-18 сентября 2014<br>Лекции Карла Андерсона в МФТИ</a>
                                    <small>11 ноября 2014</small>
                                </li>
                            </ul>
                        </div>						
                    </div><!--/col-md-3-->  
                    <!-- End Latest --> 
                    
                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Полезные ссылки</h2></div>
                        <ul class="list-unstyled link-list">

							<li><a href="/about">О Лаборатории</a>
							</li>
							<li><a href="/kms">База знаний</a>
							</li>
							<li><a href="/projects/innovation">Инновационный практикум</a>
							</li>
							<li><a href="/blog">Блог</a>
							</li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->                    

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Наш адрес</h2></div>                         
                        <address class="md-margin-bottom-40">
                        141700, Московская облаcть,<br>
                        г. Долгопрудный, Институтский пер., д.9.<br>
                        Телефон: +7 495 408 7881 (доб. 6234) <br>
                        E-mail: <a href="mailto:info@onlineelectronics.ru" class="">info@onlineelectronics.ru</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div> 
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                     
                        <p>
                            2014 © Лаборатория облачной инфраструктуры для интеллектуальных цифровых предприятий. Все права защищены. 
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div> 
        </div><!--/copyright-->
    </div>     
    <!--=== End Footer Version 1 ===-->
</div><!--/End Wrapepr-->

</body>
</html> 