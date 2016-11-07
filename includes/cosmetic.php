<section>
	<!-- <div class="container df-max-width"> -->
	<div class="container container_style4">
		<div class="row">
			<div class="col-md-12">
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
		</div>
	<!-- </div> -->
</section>
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
	<script>		
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