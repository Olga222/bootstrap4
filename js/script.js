$(function(){
	// Effect bounce
	$("#btn1").on("click",function(){
		$(".div1").effect("bounce",{
			times:7,
			distance:100,
			direction:"left"
		},1000);
	});
	// explode
	$("#btn2").on("click",function(){
		$(".div2").effect("explode",{
			pieces:9,
			mode:'show'
		},2000);
	});
// pulsate effect
$("#btn3").on("click",function(){
		$(".div3").effect("pulsate",{
			time:7,
			mode:'hide'
		},1000);
	});
// show/hide
$("#btnshow").on("click",function(){
		$(".divshow").show("explode",2000);
	});
$("#btnhide").on("click",function(){
		$(".divhide").hide("explode",2000);
	});
// add/remove
$("#btnadd").on("click",function(){
		$("#pic1").addClass("imgcircle",1000);
	});
$("#btnremove").on("click",function(){
		$("#pic2").removeClass("imgcircle",1000);
	});
// switch class
$("#switchbtn").on("click",function(){
		$(".divtext p").switchClass("abzac","newabzac",1000);
	});
$("#animbtn").on("click",function(){
		$(".anim").animate({
			"backgroundColor":"yellow" ,
			"width":"400",
			"height":"400",
			"color":"red"
		},2000);
	});
// widget akkordeon
$("#accordeon").accordion({
	active:false,
	collapsible:true,
	heightStyle:'content',
	icons:{"header":"ui-icon-plus","activeHeader":"ui-icon-minus"}
});
// widget tabs
$("#tabs").tabs({
	collapsible:true,
	heightStyle:'auto',
	active:1
});
// menu
$("ul.menu").menu();
// datepicker
$("#calendar").datepicker({
changeYear:true,
changeMonth:true,
yearRange:'1940:2018',
showWeek:true,
showOn:'both',
showButtonPanel:true,
showAnim:'explode',
numberOfMonth:[1,1],
duration:'slow',
buttonText:'Выбрать дату',

});
// Widget button
$("#btn4,#link").button();
// Dialog
$("#btn5").on("click",function(){
	$("#dialog").dialog({
		modal:true,
		buttons:{
			Cansel:function(){
				$(this).dialog("close");
			}
		},
	        show:{effect:'explode', duration:800},
	        hide:{effect:'explode', duration:800},
	});
});
// Slider widget
$("#slider").slider({
	max:200,
	range:true,
	values:[10,50],
	step:5,
	animate:true,

slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    // DRAGGEBLE
    $("#kart1, #kart2, #kart3").draggable({
    	revert:true,
    	helper:'clone',
    	opacity:0.5,
    	zIndex:100,
    	cursor:'pointer',
    	revertDuration:1000
    });
    // DROPPEBLE
    $(".pics img").draggable({
    	revert:"invalid",
    	start:function(event,ui){
    		ui.helper.css('transform','rotate(0deg) scale(1.5)');

    	},
    	stop:function(event,ui){
    		ui.helper.css('transform','rotate(0deg) scale(1)');
    	},
    	zIndex:100
    });
    $("#trash").droppable({
    	activeClass:'highlight',
    	drop:function(event,ui){
    		ui.helper.hide('explode');
    		$(this).attr('src','img/trashcan-full-icon.png');
    	}
    });
    // SORTABLE
    $(".spisok1").sortable({
    	connectWith:'.spisok2',
    	change:function(event,ui){
    		ui.helper.css("backgroundColor","red");

    	},
    	stop:function(event,ui){
    		ui.item.css("backgroundColor","grey");

    	}
    });
    $(".spisok2").sortable({
    	connectWith:'.spisok1',
    	change:function(event,ui){
    		ui.helper.css("backgroundColor","red");

    	},
    	stop:function(event,ui){
    		ui.item.css("backgroundColor","grey");
    	}

    });
    // RESIZABLE
    $("#resize").resizable();
    // SUPERFISH MENU
  $("#menu1,#menu2,#menu3").superfish({
  	delay:1000,
  	animation:{opacity:'show'},
  	animationOut:{opasity:'hide'}
  });
  // gallery colorbox
  $(".gal").colorbox({
  	rel:"gal",
  	transition:'fade',
  	speed:500,
  	width:500,
  	height:400,
  	innerWidth:300,
  	innerHeight:300,
  	opasity:0.7,
  	slideshow:true,
  	slideshowSpeed:2500,
  	slideshowAuto:true,
  	current:"Фото{current}из{total}",
  	slideshowStart:"Cтарт",
  	slideshowStop:"Стор"

  });
  $(".youtube").colorbox({
  	iframe:true,
  	width:500,
  	height:400
  });
  $(".inline").colorbox({
  	inline:true,
  	width:"50%"
});
  // BXSLIDER
  $(".slider").bxSlider({
  	 auto: true,
  autoControls: true,
  stopAutoOnClick: true,
  pager: true,
  mode:'horizontal',
  speed:700,
  minSlides:3,
  maxSlides:3,
  slideWidth:200,
  moveSlides:1,
  slideMargin:20,
  captions:true,
  video:true,
  adaptiveHeight:true

  });
   });
// WOWJS animated
let wow=new WOW({
  boxClass:'wow',
  animateClass:'animated',
  offset:0
});
wow.init();