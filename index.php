<?php include_once 'header.php'; ?>

<div id="content" class="container_12">

	<div id="game_N" class="grid_8 prefix_2">
		<img id="game_txt" src="img/game_text.png" alt="Игра #№№№">
	</div>
	<div class="clear"></div>
	
	<div id="timer_wrap" class="grid_10 prefix_1 suffix_1" >
		<div class="timer"> 
			<div class="section_timer">
				<center id="section_txt">ЧАСОВ</center>
				<div id="hour">
					<p id="hour0"></p>
					<p id="hour1"></p>	  			
				</div>
			</div>		
			<div class="section_timer">
				<center id="section_txt">МИНУТ</center>
				<div id="min">
					<p id="min0"></p>
					<p id="min1"></p>
				</div>
			</div>
			<div class="section_timer">
				<center id="section_txt">СЕКУНД</center>
				<div id="sec">
					<p id="sec0"></p>
					<p id="sec1"></p>
				</div>	
			</div>
		</div>
	</div> 		
	<div class="clear"></div>

	<div id="progressBar_wrapper" class="grid_12">
		<div class="progressBar"> 
			<h3>РОЗЫГРЫВАЕТСЯ 20 СТАВОК</h3>
			<h4>ОБЩАЯ СТОИМОСТЬ ВЫИГРАША СОСТАВИТ 5000</h4>	
			<div class="border-progress-bar">
				<div class="progress-bar">
					<span class="bar">
						<span class="value" style="width:0%">СДЕЛАНО 0 СТАВОК</span>
					</span>
				</div>
			</div>
		</div>
	</div>

</div>

<div id=medals class="container_12">

	<div class="wrapper_img">
		<div id="center" class="grid_2 prefix_2">
			<img src="img/m1.png" alt="Золотая фишка"/>
		</div>
		<div id="center" class="grid_2 prefix_1">
			<img src="img/m2.png" alt="Серебряная фишка"/>
		</div>
		<div id="center" class="grid_2 prefix_1">
			<img src="img/m3.png" alt="Бронзовая фишка"/>
		</div>
	</div>
	<div class="clear"></div>

	<div class="wrapper_caption">
		<div id="center" class="grid_2 prefix_2">
			<h3>ЗОЛОТАЯ ФИШКА</h3>
		</div>
		<div id="center" class="grid_2 prefix_1">
			<h3>СЕРЕБРЯНАЯ ФИШКА</h3>
		</div>
		<div id="center" class="grid_2 prefix_1">
			<h3>БРОНЗОВАЯ ФИШКА</h3>
		</div>
	</div>	
	<div class="clear"></div>

	<div  class="wrapper_description">
		<div id="center" class="grid_2 prefix_2">
			<p class="medal_description">ОЧЕНЬ ВЫСОКАЯ ВЕРОЯТНОСТЬ ВЫИГРАША</p>
		</div>
		<div id="center" class="grid_2 prefix_1">
			<p class="medal_description">ВЫСОКАЯ ВЕРОЯТНОСТЬ ВЫИГРАША</p>
		</div>
		<div id="center" class="grid_2 prefix_1">
			<p class="medal_description">СРЕДНЯЯ ВЕРОЯТНОСТЬ ВЫИГРАША</p>
		</div>
	</div>
	<div class="clear"></div>

	<div class="wrapper_button">
		<div id="btn" class="grid_3 prefix_1">
			<button role="increment" type="button" class="btn">
			СДЕЛАТЬ СТАВКУ ЗА 140 РУБ.
		</button>				
		</div>
		<div id="btn" class="grid_3">
			<button role="increment" type="button" class="btn">
				СДЕЛАТЬ СТАВКУ ЗА 140 РУБ.
			</button>
		</div>
		<div id="btn" class="grid_3">
			<button role="increment" type="button" class="btn">
				СДЕЛАТЬ СТАВКУ ЗА 140 РУБ.
			</button>
		</div>
	</div>	
</div>


<?php include_once 'footer.php'; ?>

<script src="libs/jquery-3.0.0.min.js" type="text/javascript"></script>
<script src="js/common.js" type="text/javascript"></script>
<script src="js/progress-bar.js" type="text/javascript"></script>
<script src="js/scrollToBottom.js" type="text/javascript"></script>