$(document).ready(function() {

function get_timer(date_end_t) {

		var date_end_s = "July 1,2016 16:27";		
		//alert(date_end_t.getHours);
		var date_start_t = new Date();
		
		if (date_end_t > date_start_t) {

		var timer = date_end_t - date_start_t;

		//hours		
		var hour = parseInt(timer/3600000);
		if (hour < 10) {
			hour = '0' + hour;
		}
		hour = hour.toString();
		//minutes		
		var min = parseInt(timer/60000)%60;
		if (min < 10) {
			min = '0' + min;
		}
		min = min.toString();
		//seconds		
		var sec = parseInt(timer/1000)%60;
		if (sec < 10) {
			sec = '0' + sec;
		}
		sec = sec.toString();
		
		//animation
		if(hour[1] == 3 && min[0] == 5 && min[1] == 9 && sec[0] == 5 && sec[1] == 9)
		{
			animation($("#hour0"), hour[0]);
		} else {
			$("#hour0").html(hour[0]);
		}

		if(min[0] == 5 && min[1] == 9 && sec[0] == 5 && sec[1] == 9)
		{
			animation($("#hour1"), hour[1]);
		} else {
			$("#hour1").html(hour[1]);
		}

		//minutes
		if(min[1] == 9 && sec[0] == 5 && sec[1] == 9)
		{
			animation($("#min0"), min[0]);
		} else {
			$("#min0").html(min[0]);
		}

		if(sec[0] == 5 && sec[1] == 9)
		{
			animation($("#min1"), min[1]);
		} else {
			$("#min1").html(min[1]);
		}

		//seconds			
		if (sec[1] == 9) {
			animation($("#sec0"), sec[0]);
		} else {
			$("#sec0").html(sec[0]);
		}
		
		animation($("#sec1"), sec[1]);
		
		setTimeout(get_timer, 1000, date_end_t);

	} else {
		$(".timer_wrap").html("<span id='stop'>Ending!!!</span>");
	}	
}

function animation(vibor,param) {
	vibor.html(param)
		.css({'marginTop':'-20px','opacity':'0'})
		.animate({'marginTop':'0px','opacity':'1'});
}

var date_end_t = new Date();
date_end_t.setHours(date_end_t.getHours() + 2);

get_timer(date_end_t);	// вызов функции
});