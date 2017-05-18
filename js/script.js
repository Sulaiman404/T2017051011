var btn_hide_desc = false;
var body_sprint = false;
var body_run = false;
var body_jump = false;
var body_throw = false;

var inputSprintNum = 13;
var inputRunNum = 7;
var inputJumpNum = 5;
var inputThrowNum = 6;

var check = false;

var counter = 1;


var allTotal = 0;
var sprintTotal = 0;
var runTotal = 0;
var jumpTotal = 0;
var throwTotal = 0;

var finalRating = 0;

var RSprint = [];
var PSprint = [];
var T1Sprint = [0,	5.36,	7.38,	9.43,	11.41,	17.21,	23.09,	37.25,	51.59,	8.57,	11.07,	13.62,	26.69];
var aSprint =  [0, 5.2632,	4.7619, 4.5455, 4.6512, 4.4444, 4.3478, 4.0816,	3.9216,	3.2258,	3.2258,	3.2258,	3.5088];

var RRun = [];
var PRun = [];
var T1Run = [0,	86.48,	120.83,	156.99,	247.03,	344.2,	534.16];
var aRun =  [0,	4,	4,	4,	3.9216,	3.8462,	3.7736];

var RJump = [];
var PJump = [];
var T1Jump = [0,	194.45,	437.5,	676.5,	13.94];
var aJump =  [0,	2.9412,	1.9417,	2.439,	2.5316];

var RThrow = [];
var PThrow = [];
var T1Throw = [0,	18.28,	60.38,	62.58,	71.02,	95.94];
var aThrow = [0,	1.2195,	1.1765,	1.0309,	1.1765,	1.4493];

var sprintMax;
var runMax;
var jumpMax;
var throwMax;

var sprintMaxNum;
var runMaxNum;
var jumpMaxNum;
var throwMaxNum;

var max1;
var maxName;



$('.btn_hide_desc').click(function(){
	"use strict";
	if(!btn_hide_desc){
		$('.p_hide_desc').show(300);
		$('.btn_hide_desc').html('Hide the description');
		btn_hide_desc = true;
	} else {
		$('.p_hide_desc').hide(300);
		$('.btn_hide_desc').html('Continue Reading...');
		btn_hide_desc = false;
	}
});

$('.col_sprint').click(function(){
	"use strict";
	
	if(!body_sprint){
		$('.col_sprint').css('background', '#ededed');
		$('.col_run').css('background', '#ffffff');
		$('.col_jump').css('background', '#ffffff');
		$('.col_throw').css('background', '#ffffff');
		$('.body_sprint').show(300);
		$('.body_run').hide(300);
		$('.body_jump').hide(300);
		$('.body_throw').hide(300);
		body_sprint = true;
		body_run = false;
		body_jump = false;
		body_throw = false;
	} else {
		$('.col_sprint').css('background', '#ffffff');
		$('.body_sprint').hide(300);
		body_sprint = false;
	}
});

$('.col_run').click(function(){
	"use strict";
	
	if(!body_run){
		$('.col_sprint').css('background', '#ffffff');
		$('.col_run').css('background', '#ededed');
		$('.col_jump').css('background', '#ffffff');
		$('.col_throw').css('background', '#ffffff');
		$('.body_sprint').hide(300);
		$('.body_run').show(300);
		$('.body_jump').hide(300);
		$('.body_throw').hide(300);
		body_sprint = false;
		body_run = true;
		body_jump = false;
		body_throw = false;
	} else {
		$('.col_run').css('background', '#ffffff');
		$('.body_run').hide(300);
		body_run = false;
	}
});

$('.col_jump').click(function(){
	"use strict";
	
	if(!body_jump){
		$('.col_sprint').css('background', '#ffffff');
		$('.col_run').css('background', '#ffffff');
		$('.col_jump').css('background', '#ededed');
		$('.col_throw').css('background', '#ffffff');
		$('.body_sprint').hide(300);
		$('.body_run').hide(300);
		$('.body_jump').show(300);
		$('.body_throw').hide(300);
		body_sprint = false;
		body_run = false;
		body_jump = true;
		body_throw = false;
	} else {
		$('.col_jump').css('background', '#ffffff');
		$('.body_jump').hide(300);
		body_jump = false;
	}
});

$('.col_throw').click(function(){
	"use strict";
	
	if(!body_throw){
		$('.col_sprint').css('background', '#ffffff');
		$('.col_run').css('background', '#ffffff');
		$('.col_jump').css('background', '#ffffff');
		$('.col_throw').css('background', '#ededed');
		$('.body_sprint').hide(300);
		$('.body_run').hide(300);
		$('.body_jump').hide(300);
		$('.body_throw').show(300);
		body_sprint = false;
		body_run = false;
		body_jump = false;
		body_throw = true;
	} else {
		$('.col_throw').css('background', '#ffffff');
		$('.body_throw').hide(300);
		body_throw = false;
	}
});

$('.resultBtn').click(function(){
	"use strict";
	
	sprintTotal = 0;
	runTotal = 0;
	jumpTotal = 0;
	throwTotal = 0;
	
	while(counter < inputSprintNum){
		if(!$('#inputSprint'+counter).val()){
			$('#inputSprint'+counter).addClass('inputError');
			check = true;
		} else {
			$('#inputSprint'+counter).removeClass('inputError');
			if($('#inputSprint'+counter)[0].checkValidity()){
				//$.post('inc/ajax.php', {option: 'addResult', field:'sprint'+counter ,value:Math.round(fA($('#inputSprint'+counter).val(), T1Sprint[counter], aSprint[counter]))});
				PSprint[counter-1] = Math.round(fA($('#inputSprint'+counter).val(), T1Sprint[counter], aSprint[counter]));
				RSprint[counter-1] = $('#inputSprint'+counter).val();
				sprintTotal += PSprint[counter-1];
				
				//sprintMaxNum = Math.max.apply( Math, PSprint );
				
				
			} else {
				check = true;
				$('#inputSprint'+counter).addClass('inputError');
			}
		}
		counter++;
	}
	counter = 1;
	
	while(counter < inputRunNum){
		if(!$('#inputRun'+counter).val()){
			$('#inputRun'+counter).addClass('inputError');
			check = true;
		} else {
			$('#inputRun'+counter).removeClass('inputError');
			if($('#inputRun'+counter)[0].checkValidity()){
				//$.post('inc/ajax.php', {option: 'addResult', field:'run'+counter ,value:Math.round(fA($('#inputRun'+counter).val(), T1Run[counter], aRun[counter]))});
				PRun[counter-1] = Math.round(fA($('#inputRun'+counter).val(), T1Run[counter], aRun[counter]));
				RRun[counter-1] = $('#inputRun'+counter).val();
				runTotal += PRun[counter-1];
			} else {
				check = true;
				$('#inputRun'+counter).addClass('inputError');
			}
		}
		counter++;
	}
	counter = 1;
	
	while(counter < inputJumpNum){
		if(!$('#inputJump'+counter).val()){
			$('#inputJump'+counter).addClass('inputError');
			check = true;
		} else {
			$('#inputJump'+counter).removeClass('inputError');
			if($('#inputJump'+counter)[0].checkValidity()){
				//$.post('inc/ajax.php', {option: 'addResult', field:'jump'+counter ,value:Math.round(fC($('#inputJump'+counter).val(), T1Jump[counter], aJump[counter]))});
				PJump[counter-1] = Math.round(fC($('#inputJump'+counter).val(), T1Jump[counter], aJump[counter]));
				RJump[counter-1] = $('#inputJump'+counter).val();
				jumpTotal += PJump[counter-1];
			} else {
				check = true;
				$('#inputJump'+counter).addClass('inputError');
			}
		}
		counter++;
	}
	counter = 1;
	
	while(counter < inputThrowNum){
		if(!$('#inputThrow'+counter).val()){
			$('#inputThrow'+counter).addClass('inputError');
			check = true;
		} else {
			$('#inputThrow'+counter).removeClass('inputError');
			if($('#inputThrow'+counter)[0].checkValidity()){
				//$.post('inc/ajax.php', {option: 'addResult', field:'throw'+counter ,value:Math.round(fC($('#inputThrow'+counter).val(), T1Throw[counter], aThrow[counter]))});
				PThrow[counter-1] = Math.round(fC($('#inputThrow'+counter).val(), T1Throw[counter], aThrow[counter]));
				RThrow[counter-1] = $('#inputThrow'+counter).val();
				throwTotal += PThrow[counter-1];
			} else {
				check = true;
				$('#inputThrow'+counter).addClass('inputError');
			}
		}
		counter++;
	}
	counter = 1;
	
	if(check){
		$('.rating').html('Please fix the values entered in the red boxes.');
	} else {
		allTotal = sprintTotal + runTotal + jumpTotal + throwTotal;
		finalRating = fR(allTotal);
		
		if(finalRating > 41){
			finalRating = 41;
		}
		if(finalRating < 1){
			finalRating = 1;
		}
		
		$.post('inc/ajax.php', {option: 'addResult', user_id: $('#userId').val(), sprintTotal: sprintTotal, runTotal: runTotal, jumpTotal:jumpTotal, throwTotal:throwTotal, rating:finalRating, sprintR: RSprint, runR: RRun, jumpR: RJump, throwR: RThrow, sprintP: PSprint, runP: PRun, jumpP: PJump, throwP: PThrow})
		.done(function(data){
			if(data === "1"){
				$('.rating').html('Your rating is: ' + finalRating);
				//+ '<br> The highest event is'				
			} else if(data === "2"){
				alert("Please Login/Register before submitting results.");
			} else{
				
			}
		});
	}
	
	
	/*$('.rating').hide(300);

	setTimeout(function(){
		ratingValue = 'F';
		
		if(parseInt($('#resultValue').val()) > 94){
			ratingValue = 'S';
		} else if(parseInt($('#resultValue').val()) > 89){
			ratingValue = 'A'; 
		} else if(parseInt($('#resultValue').val()) > 79){
			ratingValue = 'B'; 
		} else if(parseInt($('#resultValue').val()) > 69){
			ratingValue = 'C'; 
		} else if(parseInt($('#resultValue').val()) > 59){
			ratingValue = 'D'; 
		}
		else if(parseInt($('#resultValue').val()) < 60){
			ratingValue = 'F'; 
		}
		
		
		$('.rating').html('Your Rating is: <span class="ratingValue">'+ratingValue+'<span>');
		$('.rating').show(300);
	}, 300);*/
});

$('.nav_rating').click(function(){
	"use strict";
	$("html, body").delay(0).animate({scrollTop: $('.container_category').offset().top }, 600);
});
$('.nav_about').click(function(){
	"use strict";
	$("html, body").delay(0).animate({scrollTop: $('.container_about').offset().top }, 600);
});
$('.nav_guide').click(function(){
	"use strict";
	$("html, body").delay(0).animate({scrollTop: $('.guidelines').offset().top }, 600);
});
$('.nav_ath').click(function(){
	"use strict";
	$("html, body").delay(0).animate({scrollTop: $('.container_ath').offset().top }, 600);
});
$('.nav_ach').click(function(){
	"use strict";
	$("html, body").delay(0).animate({scrollTop: $('.container_ach').offset().top }, 600);
});
$('#btnLogin').click(function(){
	"use strict";
	if($('#inputUser').val() && $('#inputPass').val()){
		$.post('inc/ajax.php', { username: ''+$('#inputUser').val(), password: ''+$('#inputPass').val()})
		.done(function(data){
			//alert(data);
			if(data === 'T'){
				alert('1');
			} else{
				alert(2);
			}
		});
	} else {
		$('#inputUser').val('');
		$('#inputPass').val('');
		alert('Wrong Username/Password. Please try again.');
	}
});

function fA(T, T1, a){
	"use strict";
	
	var n1 = T/T1;
	var n2 = Math.pow(n1, a);
	
	var p = (1010/n2) - 10;
	
	return p;
}
function fC(T, T1, a){
	"use strict";
	
	var n1 = T1/T;
	var n2 = Math.pow(n1, a);
	
	var p = (1010/n2) - 10;
	
	return p;
}

function fR(p){
	"use strict";
	
	var h = (-p/100) + 41;
	
	return h;
}