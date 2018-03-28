//导航二级栏目
$(function(){
	//导航
	$('.navli .navlink').bind('mouseover',function(){
		$(this).parent('.navli').children(".navtwoul").css("display", "block");
		$(this).parent('.navli').siblings('.navli').children('navtwoul').css('display','none');
	})
	$('.navli .navlink').bind('mouseout',function(){
		$(this).parent('.navli').children(".navtwoul").css("display", "none");
	})
	$('.navtwoul').bind('mouseover',function(){
		$(this).css('display','block');
	})
	$('.navtwoul').bind('mouseout',function(){
		$(this).css('display','none');
	})


	//列表页面右边tab
	$('.listrighttab ul li').bind('click',function(){
		$(this).css({'background-color':'#fff','border-bottom':'none'});
		$(this).children('.listrighttabcontent').css('display','block');
		$(this).siblings('li').css({'background-color':'#fbfbfb','border-bottom':'1px solid #e3e3e3'});
		$(this).siblings('li').children('.listrighttabcontent').css('display','none');
	})


	//communication列表页面左边tab
	$('.communicationleftul li').bind('click',function(){
		var showclass = $(this).data('to');
		$(this).css({'background-color':'#fff','border-bottom':'none','border-top':'4px solid #ed6230'});
		$(this).siblings('li').css({'background-color':'#fbfbfb','border-bottom':'1px solid #e3e3e3','border-top':'none'});
		for(var i = 1; i < 3; i++){
			var showdiv ='.to'+[i];
			console.log(showdiv);
			$(showdiv).css('display','none');
		}
		$('.'+showclass).css('display','block');
	})

	//文章内页回复显示与隐藏
	var clickyes = false;
	$('.reviewreport2').bind('click',function(){
		if(clickyes){
			clickyes = false;
			return;
		}else{
			clickyes = true;
			console.log($(this).parent('.reviewreport').siblings('.replayform'));
			$(this).parent('.reviewreport').siblings('.replayform').toggle(500);
		}
	})


	//手机导航高度适应屏幕大小
	var mobilewh = parseInt(document.documentElement.clientHeight || document.body.clientHeight);
	$('.mobilenavul').height(mobilewh);
	//手机导航显示隐藏
	$('.openmbar,.mobilenavul').bind('click',function(event){
		event.stopPropagation();
		$('.mobilenavul').animate({left:"0"});
		$('.openmbar').css('display','none');
	});
	$('body').bind('click',function(){
		$('.mobilenavul').animate({left:"-200px"});
		$('.openmbar').css('display','block');
		$('.navloginul').css('display','none');
	})
	//判断是否有二级导航，有二级导航加+,写不来，以后再看
	// for(var i = 0;i <　$('.mobilenavli').length; i++){
	// 	var mobiletwoadd = $($('.mobilenavli')[i]).children('mobilenavtwoul');
	// 	var curmobilenavli = $($('.mobilenavli')[i]);
	// 	if(mobiletwoadd){
	// 		curmobilenavli.children('.mobilenavlink').text(curmobilenavli.children('.mobilenavlink').text() + '-')
	// 	}
	// };
	
	//手机二级导航显示隐藏
	$('.mobilenavli').bind('click',function(){
		console.log('ddd')
		$(this).children(".mobilenavtwoul").toggle(500);
	})

	//手机二级导航显示隐藏
	$('.loginmodalstyle').bind('click',function(event){
		event.stopPropagation();
		$('.navloginul').toggle();
	})




	//轮播
	$('#slider').flexslider({      
	    animation: "solid",  
	    animationLoop: true,   
	    controlNav: true,  
	    directionNav: true,  
	    startAt: 0, 
	    slideshow: true, 
	    slideshowSpeed: 3000,
	    animationSpeed: 600, 
	    direction: "horizontal"
	})  


	
})