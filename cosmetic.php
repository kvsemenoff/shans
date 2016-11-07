<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body class="df-bg-image">
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	
	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>
	<script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
	<script>		
		(function($){				
		jQuery.fn.lightTabs1 = function(options){

		var createTabs = function(){
			tabs1 = this;
			i = 0;
			
			showPage = function(i){
				// $(tabs).children("div").children("div").hide();
				// $(tabs).children("div").children("div").eq(i).show();
				$(tabs1).children("#df-tab1").children("li").removeClass("active");
				$(tabs1).children("#df-tab1").children("li").eq(i).addClass("active");
			}
								
			showPage(0);				
			
			$(tabs1).children("#df-tab1").children("li").each(function(index, element){
				$(element).attr("data-page", i);
				i++;                        
			});
			
			$(tabs1).children("#df-tab1").children("li").click(function(){
				showPage(parseInt($(this).attr("data-page")));
			});				
		};		
		return this.each(createTabs);
		};	
		})(jQuery);
		$(document).ready(function(){
			$(".df-tab-first").lightTabs1();			
		});
	</script>
	<!-- <script>		
		(function($){				
		jQuery.fn.lightTabs2 = function(options){

		var createTabs = function(){
			tabs2 = this;
			j = 0;
			
			showPage = function(j){
				// $(tabs).children("div").children("div").hide();
				// $(tabs).children("div").children("div").eq(i).show();
				$(tabs2).children("#df-tab2").children("li").removeClass("active");
				$(tabs2).children("#df-tab2").children("li").eq(j).addClass("active");
			}
								
			showPage(0);				
			
			$(tabs2).children("#df-tab2").children("li").each(function(index, element){
				$(element).attr("data-page", j);
				j++;                        
			});
			
			$(tabs2).children("#df-tab2").children("li").click(function(){
				showPage(parseInt($(this).attr("data-page")));
			});				
		};		
		return this.each(createTabs);
		};	
		})(jQuery);
		$(document).ready(function(){
			$(".df-tab-second").lightTabs2();			
		});
	</script>
 -->
	<?php require_once('includes/header.php'); ?>
		<div class="container df-max-width">
			<h3 class="df-cosm-caption">Косметика</h3>
			<div class="df-tab">				
				<div class="df-tab-first">
					<h4 class="df-tab-cap">Выберите применение косметики:</h4>
					<ul id="df-tab1">
						<li>Все</li>
						<li>Лицо</li>
						<li>Волосы</li>
						<li>Тело</li>
						<div class="clear"></div>	
					</ul>
				</div>
				<div class="df-tab-second">
					<h4 class="df-tab-cap2">Выберите бренд: </h4>
					<ul id="df-tab2">
						<li>Все  БРЕНДЫ</li>
						<li>KO KO dermavidual</li>
						<li>Anna Lotan</li>
						<li>Christina</li>
						<li>Dr. Spiller</li>
						<div class="clear"></div>	
					</ul>
				</div>							
			</div>
			<div class="df-cosmetics">
				<div class="df-img-cosm">
					<img src="/img/df-cosm1.png" alt="" class="img-responsive">
				</div>
				<div class="df-text-box">
					<h4 class="df-text-caption">Body Restorative Milk - Успокаивающее молочко для тела после загара</h4>
					<p>Легкая текстура мгновенно впитывается. Освежает, увлажняет и успокаивает кожу после пребывания на солнце. Уменьшает ощущение жара, предотвращает шелушение и пролонгирует эффект загара.</p>					
				</div>				
			</div>
			<div class="df-cosmetics">
				<div class="df-img-cosm">
					<img src="/img/df-cosm2.png" alt="" class="img-responsive">
				</div>
				<div class="df-text-box">
					<h4 class="df-text-caption">Face Restorative Cream - Успокаивающий крем для лица после загара</h4>
					<p>После загара. Средство 2 в 1: крем и маска!  Идеальная «первая помощь» для снятия жжения после пребывания на солнце. Немедленно увлажняет.
					</p>					
				</div>				
			</div>			
			<div class="df-cosmetics">
				<div class="df-img-cosm">
					<img src="/img/df-cosm3.png" alt="" class="img-responsive">
				</div>
				<div class="df-text-box">
					<h4 class="df-text-caption">Prolongateur de bronzage - Эмульсия для продления загара</h4>
					<p>Что может быть красивее загорелой и эластичной кожи? Однако даже после самых интенсивных и долгих солнечных ванн загар очень быстро смывается и теряет свою прелесть. </p>					
				</div>				
			</div>
			<div class="df-cosmetics">
				<div class="df-img-cosm">
					<img src="/img/df-cosm1.png" alt="" class="img-responsive">
				</div>
				<div class="df-text-box">
					<h4 class="df-text-caption">Body Restorative Milk - Успокаивающее молочко для тела после загара</h4>
					<p>Легкая текстура мгновенно впитывается. Освежает, увлажняет и успокаивает кожу после пребывания на солнце. Уменьшает ощущение жара, предотвращает шелушение и пролонгирует эффект загара.</p>					
				</div>				
			</div>
			<div class="df-cosmetics">
				<div class="df-img-cosm">
					<img src="/img/df-cosm2.png" alt="" class="img-responsive">
				</div>
				<div class="df-text-box">
					<h4 class="df-text-caption">Face Restorative Cream - Успокаивающий крем для лица после загара</h4>
					<p>После загара. Средство 2 в 1: крем и маска!  Идеальная «первая помощь» для снятия жжения после пребывания на солнце. Немедленно увлажняет.
					</p>					
				</div>				
			</div>			
			<div class="df-cosmetics">
				<div class="df-img-cosm">
					<img src="/img/df-cosm3.png" alt="" class="img-responsive">
				</div>
				<div class="df-text-box">
					<h4 class="df-text-caption">Prolongateur de bronzage - Эмульсия для продления загара</h4>
					<p>Что может быть красивее загорелой и эластичной кожи? Однако даже после самых интенсивных и долгих солнечных ванн загар очень быстро смывается и теряет свою прелесть. </p>					
				</div>				
			</div>
		</div>	
	

	<?php require_once('includes/footer.php'); ?>

	
</body>
</html>

