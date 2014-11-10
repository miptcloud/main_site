<?
/* @var $app Door\Core\Application */
?><!DOCTYPE html>
<html>
<head>
	<?=$headers?>
</head>
<body lang="<?=$app->lang->lang()?>">    
    <div id='body'>
        <div id='container'>
            <a href='/' id="logo" class='noAjax'  ></a>
			<?
				$now_lang = $app->lang->lang();
				$change_lang = $now_lang == 'ru' ? "en" : "ru";
			?>
			<a rel="nofollow" href="/set_lang/<?=$change_lang?>" id="langLink" class="<?=$change_lang?>"></a>
			<div id="menuContainer">
				<ul id='menu'>
					<?
						$items = array(
							"" => "about",						
							"news" => "news",
							"catalogue" => "catalogue",
							"collections" => "collections",
							"collections/orders" => "orders",
							"collections/corp" => "corp",
							"contacts" => "contacts"
						);

						$current_uri = $app->initial_request()->uri();
						$selected_uri = null;

						foreach($items as $uri => $item)
						{
							if($uri == $current_uri)
							{
								$selected_uri = $uri;
							}
							elseif($uri !== "" 
									&& strpos($current_uri,$uri) === 0 
									&& strlen($uri) > strlen($selected_uri))
							{
								$selected_uri = $uri;
							}
						}					
						
						$index = 0;

						foreach($items as $uri => $item)
						{
							$name = $app->lang->get("site_".$item);
							if($index > 0)
							{
								$name = str_replace(" ", "<br/>", $name);
							}
							$index++;
							
							$submenu = "";
							
							if($uri == 'collections'){
								$collections = $app->models->factory('Collection')->where('hardcoded','!=',true)->where('visible','=',true)->find_all()->sort(array(
									'sort' => 1
								))->as_array('alias','name_'.$now_lang);
								
								$submenu .= "<ul>";
								foreach($collections as $alias => $name1)
								{
									$submenu .= "<li><a href='/collections/{$alias}'>{$name1}</a></li>";
								}
								$submenu .= "</ul>";
							}
							
							if($uri == 'catalogue'){
								$collections = $app->models->factory('CatalogueSection')->where('visible','=',true)->find_all()->sort(array(
									'sort' => 1
								))->as_array('alias','name_'.$now_lang);
								
								$submenu .= "<ul>";
								foreach($collections as $alias => $name1)
								{
									$submenu .= "<li><a href='/catalogue/{$alias}'>{$name1}</a></li>";
								}
								$submenu .= "</ul>";
							}
							
							$selected = ($uri == $selected_uri) ? " selected" : "";
							echo "<li class='$selected'>".$app->html->anchor($uri, $name).$submenu."</li>";
						}
					?>				
				</ul>
			</div>
            <div id='secondContainer'>
				<? if($app->lang->lang() == 'ru') { ?>
				<div id="searchForm">
					<form method="GET" action="/search">
						<input type="hidden" name="searchid" value="2171311"/>
						<input type="hidden" name="web" value="0"/>
						<input type="text" name="text" value="<?= htmlspecialchars(\Door\Core\Helper\Arr::get($_GET,'text'))?>"/>
						<button type="submit">Поиск</button>
					</form>
				</div>
				<? } ?>
                <div id='background1'></div>
                <div id='background2'></div>
                <div id='background3'></div>
                <div id='localContainer'>					
					<h1 title="<?=$title?>"><?=$title?></h1>					
                    <!-- localContainerStart -->
                    <?=@$content?>
                    <!-- localContainerEnd -->
                </div>
            </div>
            <div id='footerContainer'>
                <div id='copyRights'>ChekotinJewellery ©  2009 - <?=date('Y')?> <a href="/sitemap.html">Карта сайта</a></div>
                <div id='bottomMenu'>
                    <a class='about' href='<?=$app->url->site('about')?>'><?=$app->lang->get('site_about')?></a> /
                    <a class='news' href='<?=$app->url->site('news')?>'><?=$app->lang->get('site_news')?></a> /
					<a class='press' href='<?=$app->url->site('catalogue')?>'><?=$app->lang->get('catalogue')?></a> /
                    <a class='collections' href='<?=$app->url->site('collections')?>'><?=$app->lang->get('site_collections')?></a> /
                    <a class='individual' href='<?=$app->url->site('orders')?>'><?=$app->lang->get('site_orders')?></a> /
                    <a class='corp' href='<?=$app->url->site('corp')?>'><?=$app->lang->get('site_corp')?></a> /                    
                    <a class='contacts' href='<?=$app->url->site('contacts')?>'><?=$app->lang->get('site_contacts')?></a>
                </div>
                <div id='footerDot1'></div>
                <div id='footerDot2'></div>
            </div>
        </div>
    </div>
	<div id="basket_widget">
		<?=$app->basket->widget()?>
	</div>
<!--Google_Analytics--> 

<script type="text/javascript"> 
 
  var _gaq = _gaq || [];
  _gaq.push(
    ['_setAccount', 'UA-28950866-1'],
    ['_setDomainName', '.chekotin.ru'],
    ["_addOrganic", "images.yandex.ru", "text",true],
    ["_addOrganic", "images.yandex.ua", "text",true],
    ["_addOrganic", "images.google.com.ua", "q",true],
    ["_addOrganic", "images.google.ru", "q",true],
    ["_addOrganic", "go.mail.ru", "q"],
    ["_addOrganic", "nova.rambler.ru", "query"],
    ["_addOrganic", "nigma.ru", "s"],
    ["_addOrganic", "webalta.ru", "q"],
    ["_addOrganic", "aport.ru", "r"],
    ["_addOrganic", "poisk.ru", "text"],
    ["_addOrganic", "km.ru", "sq"],
    ["_addOrganic", "liveinternet.ru", "ask"],
    ["_addOrganic", "quintura.ru", "request"],
    ["_addOrganic", "search.qip.ru", "query"],
    ["_addOrganic", "gde.ru", "keywords"],
    ["_addOrganic", "gogo.ru", "q"],
    ["_addOrganic", "ru.yahoo.com", "p"],
    ["_addOrganic", "akavita.by", "z"],
    ["_addOrganic", "tut.by", "query"],
    ["_addOrganic", "all.by", "query"],
    ["_addOrganic", "meta.ua", "q"],
    ["_addOrganic", "bigmir.net", "q"],
    ["_addOrganic", "i.ua", "q"],
    ["_addOrganic", "online.ua", "q"],
    ["_addOrganic", "a.ua", "s"],
    ["_addOrganic", "ukr.net", "search_query"],
    ["_addOrganic", "search.com.ua", "q"],
    ["_addOrganic", "search.ua", "query"],
    ["_addOrganic", "search.ukr.net", "search_query"],
    ['_trackPageview']
  );
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script> 
<!--Google_Analytics_end--> 	
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter3723649 = new Ya.Metrika({id:3723649,
                    clickmap:true,
                    trackLinks:true});
        } catch(e) {}
    });
    
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/3723649" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>



<!DOCTYPE html>
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
                <ul class="loginbar pull-right">
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
                </ul>
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img id="logo-header" src="assets/img/logo1-default.png" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Option 1: Default Page</a></li>

                                <!-- One Page -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Option 2: One Page</a>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href="One-Page/index.html">- One Page Template</a></li>                                
                                        <li><a target="_blank" href="One-Page/dark-page-example.html">- One Page Dark Theme</a></li>                                
                                    </ul>                                
                                </li>
                                <!-- End One Page -->
                                
                                <!-- Shop UI Page -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Option 3: Shop UI</a>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href="Shop-UI/index.html">- Home Page</a></li>
                                        <li><a target="_blank" href="Shop-UI/shop-ui-inner.html">- Product Page</a></li>
                                        <li><a target="_blank" href="Shop-UI/shop-ui-filter-grid.html">- Filter Grid Page</a></li>
                                        <li><a target="_blank" href="Shop-UI/shop-ui-filter-list.html">- Filter List Page</a></li>                   
                                        <li><a target="_blank" href="Shop-UI/shop-ui-add-to-cart.html">- Checkout Page</a></li>                            
                                        <li><a target="_blank" href="Shop-UI/shop-ui-login.html">- Login Page</a></li>                               
                                        <li><a target="_blank" href="Shop-UI/shop-ui-register.html">- Registration Page</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Shop UI -->

                                <li><a href="page_home8.html">Option 4: Home Discover</a></li>
                                <li><a href="page_home9.html">Option 5: Home Creative</a></li>
                                <li><a href="page_home10.html">Option 6: Home Inspire</a></li>
                                <li><a href="page_home11.html">Option 7: Home Desire</a></li>
                                <li><a href="page_jobs.html">Option 8: Home Jobs</a></li>
                                <li><a href="page_home3.html">Option 9: Amazing Content</a></li>
                                <li><a href="page_home6.html">Option 10: Home Magazine</a></li>
                                <li><a href="page_home4.html">Option 11: Home Sidebar</a></li>
                                <li><a href="page_home7.html">Option 12: Home Portfolio</a></li>
                                <li><a href="page_home1.html">Option 13: Home Default v1</a></li>
                                <li><a href="page_home2.html">Option 14: Home Default v2</a></li>
                                <li><a href="page_home5.html">Option 15: Home Default v3</a></li>

                                <!-- Misc Pages -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Options: Misc Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_misc_blank.html">- Blank page</a></li>
                                        <li><a href="page_misc_boxed.html">- Boxed Page</a></li>
                                        <li><a href="page_misc_boxed_img.html">- Boxed Image Page</a></li>
                                        <li><a href="page_misc_boxed_fixed_header.html">- Boxed Fixed Menu</a></li>
                                        <li><a href="page_misc_fixed_header.html">- Fixed Menu</a></li>
                                        <li><a href="page_misc_dark.html">- Dark Page</a></li>
                                        <li><a href="page_misc_dark_boxed.html">- Dark Boxed Page</a></li>
                                        <li><a href="page_misc_dark_other_color.html">- Dark Page With Different Theme Color</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Misc Pages -->                                
                            </ul>
                        </li>
                        <!-- End Home -->

                        <!-- Pages -->                        
                        <li class="dropdown active">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <!-- About Pages -->
                                <li class="dropdown-submenu active">
                                    <a href="javascript:void(0);">About Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="active"><a href="page_about1.html">About Us</a></li>
                                        <li><a href="page_about.html">About Basic</a></li>
                                        <li><a href="page_about_me.html">About Me</a></li>
                                        <li><a href="page_about_our_team.html">About Our Team</a></li>
                                    </ul>                                
                                </li>
                                <!-- End About Pages -->

                                <!-- Profile Pages -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Profile Dashboard Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.html">Profile Main Page</a></li>
                                        <li><a href="profile_me.html">Profile Overview</a></li>
                                        <li><a href="profile_users.html">Profile Users</a></li>
                                        <li><a href="profile_projects.html">Profile Projects</a></li>
                                        <li><a href="profile_comments.html">Profile Comments</a></li>
                                        <li><a href="profile_history.html">Profile History</a></li>
                                        <li><a href="profile_settings.html">Profile Settings</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Profile Pages -->

                                <!-- Job Pages -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Job Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_jobs.html">Jobs Main Page</a></li>                                
                                        <li><a href="page_jobs_inner.html">Jobs Description Default</a></li>                                
                                        <li><a href="page_jobs_inner1.html">Jobs Description Basic</a></li>                                
                                        <li><a href="page_jobs_inner2.html">Jobs Description Min</a></li>                                
                                    </ul>                                
                                </li>
                                <!-- End Job Pages -->

                                <!-- Email Tempaltes -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Email Templates</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Email Corporate</a>
                                            <ul class="dropdown-menu">
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_aqua.html">Corporate Aqua Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_blue.html">Corporate Blue Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_brown.html">Corporate Brown Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_dark_blue.html">Corporate Dark Blue Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_green.html">Corporate Green Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_light_green.html">Corporate Light Green Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_grey.html">Corporate Grey Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_orange.html">Corporate Orange Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_purple.html">Corporate Purple Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/corporate/email_corporate_red.html">Corporate Red Color</a></li>
                                            </ul>                                
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Email Flat</a>
                                            <ul class="dropdown-menu">
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_aqua.html">Flat Aqua Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_blue.html">Flat Blue Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_brown.html">Flat Brown Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_dark_blue.html">Flat Dark Blue Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_green.html">Flat Green Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_light_green.html">Flat Light Green Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_grey.html">Flat Grey Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_orange.html">Flat Orange Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_purple.html">Flat Purple Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/flat/email_flat_red.html">Flat Red Color</a></li>
                                            </ul>                                
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Email Modern</a>
                                            <ul class="dropdown-menu">
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_aqua.html">Modern Aqua Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_blue.html">Modern Blue Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_brown.html">Modern Brown Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_dark_blue.html">Modern Dark Blue Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_green.html">Modern Green Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_light_green.html">Modern Light Green Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_grey.html">Modern Grey Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_orange.html">Modern Orange Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_purple.html">Modern Purple Color</a></li>
                                                <li><a target="_blank" href="Email-Templates/modern/email_modern_red.html">Modern Red Color</a></li>
                                            </ul>                                
                                        </li>
                                    </ul>                                
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Service Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_services.html">Our Services</a></li>
                                        <li><a href="page_services1.html">Our Services Basic</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Email Tempaltes -->

                                <!-- Funny Boxes -->
                                <li><a href="page_funny_boxes.html">Funny Boxes</a></li>
                                <!-- End Funny Boxes -->

                                <!-- Pricing Tables -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Pricing Tables</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_pricing_colorful.html">Colorful Pricing Tables</a></li>       
                                        <li><a href="page_pricing_flat.html">Flat Pricing Tables</a></li>
                                        <li><a href="page_pricing_light.html">Light Pricing Tables</a></li>
                                        <li><a href="page_pricing_mega.html">Mega Pricing Tables</a></li>
                                        <li><a href="page_pricing.html">Default Pricing Tables</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Pricing Tables -->

                                <!-- Invoice Page -->
                                <li><a href="page_invoice.html">Invoice Page</a></li>
                                <!-- End Invoice Page -->

                                <!-- Search Results -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Search Results</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_search_inner.html">Default Search Results</a></li>
                                        <li><a href="page_search_table.html">Search Result Tables</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Search Results -->

                                <!-- Coming Soon -->
                                <li><a href="page_coming_soon.html">Coming Soon</a></li>
                                <!-- End Coming Soon -->

                                <!-- FAQs Pages -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">FAQs Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_faq1.html">FAQs Page</a></li>
                                        <li><a href="page_faq.html">FAQs Basic</a></li>
                                    </ul>                                
                                </li>
                                <!-- End FAQs Pages -->

                                <!-- Gallery Page -->
                                <li><a href="page_gallery.html">Gallery Page</a></li>
                                <!-- End Gallery Page -->

                                <!-- Login and Registration -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Login and Registration</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_registration.html">Registration Page</a></li>
                                        <li><a href="page_login.html">Login Page</a></li>
                                        <li><a href="page_registration1.html">Registration Option</a></li>
                                        <li><a href="page_login1.html">Login Option</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Login and Registration -->

                                <!-- Error Pages -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Error Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_404_error.html">404 Error Default</a></li>
                                        <li><a href="page_404_error1.html">404 Error Option 1</a></li>
                                        <li><a href="page_404_error2.html">404 Error Option 2</a></li>
                                        <li><a href="page_404_error3.html">404 Error Option 3</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Error Pages -->

                                <!-- Clients Page -->
                                <li><a href="page_clients.html">Clients Page</a></li>
                                <!-- End Clients Page -->

                                <!-- Column Pages -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Column Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_2_columns_left.html">2 Columns Page Left</a></li>
                                        <li><a href="page_2_columns_right.html">2 Columns Page Right</a></li>
                                        <li><a href="page_3_columns.html">3 Columns Page</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Column Pages -->

                                <!-- Privacy Policy -->
                                <li><a href="page_privacy.html">Privacy Policy</a></li>
                                <!-- End Privacy Policy -->

                                <!-- Terms Of Service -->
                                <li><a href="page_terms.html">Terms Of Service</a></li>
                                <!-- End Terms Of Service -->

                                <!-- Sub Level Menu -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Sub Level 1</a>
                                    <ul class="dropdown-menu no-bottom-space">
                                        <li><a href="index.hmtl">Sub Level 2</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Sub Level 2</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.hmtl">Sub Level 3</a></li>
                                                <li><a href="index.hmtl">Sub Level 3</a></li>
                                                <li><a href="index.hmtl">Sub Level 3</a></li>
                                                <li><a href="index.hmtl">Sub Level 3</a></li>
                                            </ul>                                
                                        </li>
                                        <li><a href="index.hmtl">Sub Level 2</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Sub Level 2</a>
                                            <ul class="dropdown-menu no-bottom-space">
                                                <li><a href="index.hmtl">Sub Level 3</a></li>
                                                <li><a href="index.hmtl">Sub Level 3</a></li>
                                                <li><a href="index.hmtl">Sub Level 3</a></li>
                                            </ul>                                
                                        </li>
                                    </ul>                                
                                </li>                            
                                <!-- End Sub Level Menu -->
                            </ul>
                        </li>
                        <!-- End Pages -->

                        <!-- Features -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Features
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content disable-icons">
                                        <div class="container">
                                            <div class="row equal-height">
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Typography &amp; Components</h3></li>

                                                        <!-- Typography -->
                                                        <li><a href="feature_typo_general.html"><i class="fa fa-sort-alpha-asc"></i> General Typography</a></li>
                                                        <li><a href="feature_typo_headings.html"><i class="fa fa-magic"></i> Headings Options</a></li>
                                                        <li><a href="feature_typo_dividers.html"><i class="fa fa-ellipsis-h"></i> Dividers</a></li>
                                                        <li><a href="feature_typo_blockquote.html"><i class="fa fa-quote-left"></i> Blockquote Blocks</a></li>
                                                        <li><a href="feature_typo_boxshadows.html"><i class="fa fa-asterisk"></i> Box Shadows</a></li>
                                                        <li><a href="feature_typo_testimonials.html"><i class="fa fa-comments"></i> Testimonials</a></li>
                                                        <li><a href="feature_typo_tagline_boxes.html"><i class="fa fa-tasks"></i> Tagline Boxes</a></li>
                                                        <li><a href="feature_typo_grid.html"><i class="fa fa-align-justify"></i> Grid Layouts</a></li>
                                                        <!-- End Typography -->
                                                        
                                                        <!-- Components -->
                                                        <li><a href="feature_compo_messages.html"><i class="fa fa-comment"></i> Alerts &amp; Messages</a></li>
                                                        <li><a href="feature_compo_labels.html"><i class="fa fa-tags"></i> Labels &amp; Badges</a></li>
                                                        <li><a href="feature_compo_media.html"><i class="fa fa-volume-down"></i> Audio/Videos &amp; Images</a></li>
                                                        <li><a href="feature_compo_pagination.html"><i class="fa fa-arrows-h"></i> Paginations</a></li>
                                                        <!-- End Components -->
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Header &amp; Footers</h3></li>
                                                   
                                                        <!-- Header & Footer -->
                                                        <li><a href="feature_headers.html"><i class="fa fa-navicon"></i> Headers</a></li>
                                                        <li><a href="feature_footers.html"><i class="fa fa-navicon"></i> Footers</a></li>
                                                        <!-- End Header & Footer -->

                                                        <li class="big-screen-space"></li>
                                                        
                                                        <li><h3>Buttons &amp; Icons</h3></li>
                                                    
                                                        <!-- Buttons -->
                                                        <li><a href="feature_btn_general.html"><i class="fa fa-flask"></i> General Buttons</a></li>
                                                        <li><a href="feature_btn_brands.html"><i class="fa fa-html5"></i> Brand &amp; Social Buttons</a></li>
                                                        <li><a href="feature_btn_effects.html"><i class="fa fa-bolt"></i> Loading &amp; Hover Effects</a></li>
                                                        <!-- End Buttons -->
                                                        
                                                        <!-- Icons -->
                                                        <li><a href="feature_icon_general.html"><i class="fa fa-chevron-circle-right"></i> General Icons</a></li>
                                                        <li><a href="feature_icon_fa.html"><i class="fa fa-chevron-circle-right"></i> Font Awesome Icons</a></li>
                                                        <li><a href="feature_icon_line.html"><i class="fa fa-chevron-circle-right"></i> Line Icons</a></li>
                                                        <li><a href="feature_icon_glyph.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons Icons (Bootstrap)</a></li>
                                                        <li><a href="feature_icon_glyph_pro.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons Icons Pro</a></li>  
                                                        <!-- End Icons -->
                                                    </ul>                                
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Common elements</h3></li>

                                                        <!-- Content Boxes -->
                                                        <li><a href="feature_box_general.html"><i class="fa fa-cog"></i> General Content Boxes</a></li>
                                                        <li><a href="feature_box_colored.html"><i class="fa fa-align-center"></i> Colored Boxes</a></li>
                                                        <li><a href="feature_box_funny.html"><i class="fa fa-bars"></i> Funny Boxes</a></li>
                                                        <li><a href="feature_thumbails.html"><i class="fa fa-image"></i> Thumbnails</a></li>
                                                        <li><a href="feature_accordion_and_tabs.html"><i class="fa fa-list-ol"></i> Accordion &amp; Tabs</a></li>
                                                        <li><a href="feature_timeline1.html"><i class="fa fa-dot-circle-o"></i> Timeline Option 1</a></li>
                                                        <li><a href="feature_timeline2.html"><i class="fa fa-dot-circle-o"></i> Timeline Option 2</a></li>
                                                        <li><a href="feature_table_general.html"><i class="fa fa-table"></i> Tables</a></li>
                                                        <li><a href="feature_compo_progress_bars.html"><i class="fa fa-align-left"></i> Progress Bars</a></li>
                                                        <li><a href="feature_compo_panels.html"><i class="fa fa-columns"></i> Panels</a></li>
                                                        <!-- End Common Elements -->
                                                    </ul>    
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Forms &amp; Infographics</h3></li>

                                                        <!-- Forms -->
                                                        <li><a href="feature_form_general.html"><i class="fa fa-bars"></i> Common Bootstrap Forms</a></li>
                                                        <li><a href="feature_form_general1.html"><i class="fa fa-bars"></i> General Unify Forms</a></li>
                                                        <li><a href="feature_form_advanced.html"><i class="fa fa-bars"></i> Advanced Forms</a></li>
                                                        <li><a href="feature_form_layouts.html"><i class="fa fa-bars"></i> Form Layouts</a></li>
                                                        <li><a href="feature_form_layouts_advanced.html"><i class="fa fa-bars"></i> Advanced Layout Forms</a></li>
                                                        <li><a href="feature_form_states.html"><i class="fa fa-bars"></i> Form States</a></li>
                                                        <li><a href="feature_form_sliders.html"><i class="fa fa-bars"></i> Form Sliders</a></li>
                                                        <li><a href="feature_form_modals.html"><i class="fa fa-bars"></i> Modals</a></li>
                                                        <!-- End Forms -->
                                                        
                                                        <!-- Infographics -->
                                                        <li><a href="feature_carousels.html"><i class="fa fa-sliders"></i> Carousel Examples</a></li>
                                                        <li><a href="feature_compo_charts.html"><i class="fa fa-pie-chart"></i> Charts &amp; Countdowns</a></li>
                                                        <li><a href="feature_maps_google.html"><i class="fa fa-map-marker"></i> Google Maps</a></li>
                                                        <li><a href="feature_maps_vector.html"><i class="fa fa-align-center"></i> Vector Maps</a></li>
                                                        <!-- End Infographics -->
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>    
                                    </div>    
                                </li>
                            </ul>
                        </li>
                        <!-- End Features -->

                        <!-- Portfolio -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Portfolio
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row equal-height">
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Default</h3></li>

                                                        <!-- Default -->
                                                        <li><a href="portfolio_single_item.html">Portfolio Item Option</a></li>
                                                        <li><a href="portfolio_item.html">Portfolio Item Option 1</a></li>
                                                        <li><a href="portfolio_item1.html">Portfolio Item Option 2</a></li>
                                                        <li><a href="portfolio_2_column.html">Portfolio 2 Columns</a></li>
                                                        <li><a href="portfolio_3_column.html">Portfolio 3 Columns</a></li>
                                                        <li><a href="portfolio_4_column.html">Portfolio 4 Columns</a></li>
                                                        <li><a href="portfolio_text_blocks.html">Portfolio 4 Columns With Text</a></li>
                                                        
                                                        <!-- End Default -->
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>2 Columns</h3></li>
                                                   
                                                        <!-- 2 Columns -->
                                                        <li><a href="portfolio_2_columns_grid_no_space.html">2 Columns No Sapce</a></li>
                                                        <li><a href="portfolio_2_columns_grid_text.html">2 Columns Grid Text</a></li>
                                                        <li><a href="portfolio_2_columns_grid.html">2 Columns Grid</a></li>

                                                        <!-- End 2 Columns -->

                                                        <li class="big-screen-space"></li>
                                                        
                                                        <li><h3>3 Columns</h3></li>
                                                    
                                                        <!-- 3 Columns -->
                                                        <li><a href="portfolio_3_columns_grid_no_space.html">3 Columns No Sapce</a></li>
                                                        <li><a href="portfolio_3_columns_grid_text.html">3 Columns Grid Text</a></li>
                                                        <li><a href="portfolio_3_columns_grid.html">3 Columns Grid</a></li>
                                                        <!-- End 3 Columns -->
                                                    </ul>                                
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>4 Columns</h3></li>
                                                        <!-- 4 Columns -->
                                                        <li><a href="portfolio_4_columns_fullwidth_no_space.html">4 Columns Full Width No Sapce</a></li>
                                                        <li><a href="portfolio_4_columns_fullwidth_text.html">4 Columns Fullwidth Grid Text</a></li>
                                                        <li><a href="portfolio_4_columns_fullwidth.html">4 Columns Fullwidth Grid</a></li>
                                                        <li><a href="portfolio_4_columns_grid_no_space.html">4 Columns No Sapce</a></li>
                                                        <li><a href="portfolio_4_columns_grid_text.html">4 Columns Grid Text</a></li>
                                                        <li><a href="portfolio_4_columns_grid.html">4 Columns Grid</a></li>
                                                        <!-- End 4 Columns -->
                                                    </ul>                                
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>5 Columns</h3></li>
                                                   
                                                        <!-- 5 Columns -->
                                                        <li><a href="portfolio_5_columns_fullwidth_no_space.html">5 Columns Fullwidth No Sapce</a></li>
                                                        <li><a href="portfolio_5_columns_fullwidth_text.html">5 Columns Fullwidth Grid Text</a></li>
                                                        <li><a href="portfolio_5_columns_fullwidth.html">5 Columns Fullwidth Grid</a></li>
                                                        <!-- End 5 Columns -->

                                                        <li class="big-screen-space"></li>
                                                        
                                                        <li><h3>6 Columns</h6></li>
                                                    
                                                        <!-- 6 Columns -->
                                                        <li><a href="portfolio_6_columns_fullwidth_no_space.html">6 Columns Fullwidth No Sapce</a></li>
                                                        <li><a href="portfolio_6_columns_fullwidth_text.html">6 Columns Fullwidth Grid Text</a></li>
                                                        <li><a href="portfolio_6_columns_fullwidth.html">6 Columns Fullwidth Grid</a></li>
                                                        <!-- End 6 Columns -->
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>    
                                    </div>    
                                </li>
                            </ul>
                        </li>
                        <!-- Ens Portfolio -->

                        <!-- Blog -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_page.html">Blog Page</a></li>
                                <li><a href="blog_large.html">Blog Large</a></li>
                                <li><a href="blog_medium.html">Blog Medium</a></li>
                                <li><a href="blog_full_width.html">Blog Full Width</a></li>
                                <li><a href="blog_timeline.html">Blog Timeline</a></li>
                                <li><a href="blog_masonry_3col.html">Masonry Grid Blog</a></li>
                                <li><a href="blog_right_sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog_item_option1.html">Blog Item Option 1</a></li>
                                <li><a href="blog_item_option2.html">Blog Item Option 2</a></li>
                            </ul>
                        </li>
                        <!-- End Blog -->

                        <!-- Contacts -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Contacts
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="page_contact1.html">Contacts Default</a></li>
                                <li><a href="page_contact_advanced.php">Contacts Advanced</a></li>
                                <li><a href="page_contact2.html">Contacts Option 1</a></li>
                                <li><a href="page_contact3.html">Contacts Option 2</a></li>
                                <li><a href="page_contact4.html">Contacts Option 3</a></li>
                            </ul>
                        </li>                    
                        <!-- End Contacts -->

                        <!-- Search Block -->
                        <li>
                            <i class="search fa fa-search search-btn"></i>
                            <div class="search-open">
                                <div class="input-group animated fadeInDown">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Go</button>
                                    </span>
                                </div>
                            </div>    
                        </li>
                        <!-- End Search Block -->
                    </ul>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    <!--=== End Header ===-->   
	
    <?=$content?>    

     <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                        <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>    
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Latest Posts</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="#">Incredible content</a>
                                    <small>May 8, 2014</small>
                                </li>
                                <li>
                                    <a href="#">Best shoots</a>
                                    <small>June 23, 2014</small>
                                </li>
                                <li>
                                    <a href="#">New Terms and Conditions</a>
                                    <small>September 15, 2014</small>
                                </li>
                            </ul>
                        </div>
                    </div><!--/col-md-3-->  
                    <!-- End Latest --> 
                    
                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Useful Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->                    

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>                         
                        <address class="md-margin-bottom-40">
                            25, Lorem Lis Street, Orange <br />
                            California, US <br />
                            Phone: 800 123 3456 <br />
                            Fax: 800 123 3456 <br />
                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
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
                            2014 &copy; All Rights Reserved.
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

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
<script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initParallaxBg();
        ContactPage.initMap();        
        OwlCarousel.initOwlCarousel();                                    
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html> 