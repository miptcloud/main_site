<?
$page->addStyle("css/pages/portfolio-v2.css");

//$page->addScript("js/pages/page_portfolio.js");
?>
<style>
	.sorting-block .sorting-grid .mix
	{
		display: block;
		opacity: 1;
	}
</style>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();      
    });
</script>
<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Проекты</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">Проекты</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content"> 	
        <!-- Portfolio Sorting Blocks -->
        <div class="sorting-block">

            <ul class="row sorting-grid">
                <li class="col-md-3 col-sm-6 col-xs-12 mix category_1 category_3" data-cat="1">
                    <a href="/projects/innovation">
                        <img class="img-responsive" src="assets/img/main/11.jpg" alt="">
                        <span class="sorting-cover">
                            <span>Иннновационный практикум</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 mix category_3 category_1" data-cat="3">
                    <a href="/projects/research">
                        <img class="img-responsive" src="assets/img/main/12.jpg" alt="">
                        <span class="sorting-cover">
                            <span>Исследования</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 mix category_2 category_1" data-cat="2">
                    <a href="/projects/development">
                        <img class="img-responsive" src="assets/img/main/13.jpg" alt="">
                        <span class="sorting-cover">
                            <span>Разработка</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 mix category_3 category_4" data-cat="3">
                    <a href="/projects/done">
                        <img class="img-responsive" src="assets/img/main/3.jpg" alt="">
                        <span class="sorting-cover">
                            <span>Выполненные проекты</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>               
            </ul>
        
            <div class="clearfix"></div>
        </div>
        <!-- End Portfolio Sorting Blocks -->
    </div><!--/container-->	 	
    <!--=== End Content Part ===-->