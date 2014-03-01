$('.aaa1').hide();
$('.aaa2').hide();
$('.aaa3').hide();
$('.aaa4').hide();

$('.bbb1').hide();
$('.bbb2').hide();
$('.bbb3').hide();
$('.bbb4').hide();

$('.ccc1').hide();
$('.ccc2').hide();

$('.signup').hide();
$('.register').hide();

$('#ifsucre').hide();
$('#ifsale').hide();
$('#ifvege').hide();
$('#ifviande').hide();
$('#ifmer').hide();
$('#ifmer2').hide();

$('.a1').mouseenter(function(){
	$('.aaa1').fadeIn(100);
	$('.aa1').hide();
})
$('.a1').mouseleave(function(){
	$('.aaa1').hide();
	$('.aa1').fadeIn(100);
})

$('.a2').mouseenter(function(){
	$('.aaa2').fadeIn(100);
	$('.aa2').hide();
})
$('.a2').mouseleave(function(){
	$('.aaa2').hide();
	$('.aa2').fadeIn(100);
})

$('.a3').mouseenter(function(){
	$('.aaa3').fadeIn(100);
	$('.aa3').hide();
})
$('.a3').mouseleave(function(){
	$('.aaa3').hide();
	$('.aa3').fadeIn(100);
})

$('.a4').mouseenter(function(){
	$('.aaa4').fadeIn(100);
	$('.aa4').hide();
})
$('.a4').mouseleave(function(){
	$('.aaa4').hide();
	$('.aa4').fadeIn(100);
})

$('.b1').mouseenter(function(){
	$('.bbb1').fadeIn(100);
	$('.bb1').hide();
})
$('.b1').mouseleave(function(){
	$('.bbb1').hide();
	$('.bb1').fadeIn(100);
})

$('.b2').mouseenter(function(){
	$('.bbb2').fadeIn(100);
	$('.bb2').hide();
})
$('.b2').mouseleave(function(){
	$('.bbb2').hide();
	$('.bb2').fadeIn(100);
})

$('.b3').mouseenter(function(){
	$('.bbb3').fadeIn(100);
	$('.bb3').hide();
})
$('.b3').mouseleave(function(){
	$('.bbb3').hide();
	$('.bb3').fadeIn(100);
})

$('.b4').mouseenter(function(){
	$('.bbb4').fadeIn(100);
	$('.bb4').hide();
})
$('.b4').mouseleave(function(){
	$('.bbb4').hide();
	$('.bb4').fadeIn(100);
})

$('.c1').mouseenter(function(){
	$('.ccc1').fadeIn(100);
	$('.cc1').hide();
})
$('.c1').mouseleave(function(){
	$('.ccc1').hide();
	$('.cc1').fadeIn(100);
})
$('.c1').mouseenter(function(){
	$('.ccc1').fadeIn(100);
	$('.cc1').hide();
})
$('.c2').mouseleave(function(){
	$('.ccc2').hide();
	$('.cc2').fadeIn(100);
})

$('.trigger_register').click(function(){
	$('.register').fadeIn(200);
	$('.signup').fadeOut(200);
	})
$('.trigger_sign').click(function(){
	$('.signup').fadeIn(200);
	$('.register').fadeOut(200);
	})
$('.icon-cancel').click(function(){
	$('.signup').fadeOut(200);
	$('.register').fadeOut(200);
	})

$('#sucre').click(function(){
	$('#ifsucre').show();
	$('#ifsale').hide();
	$('#ifvege').hide();
	$('#ifviande').hide()
	$('#ifmer1').hide()
	$('#ifmer2').hide()
	$('#tag4').hide();
})

$('#sale').click(function(){
	$('#ifsale').show();
	$('#ifsucre').hide();
	$('#ifvege').hide();
	$('#ifviande').hide()
	$('#ifmer1').hide()
	$('#ifmer2').hide()
	$('#tag4').show();
})

$('#vege').click(function(){
	$('#ifvege').show();
	$('#ifsale').hide();
	$('#ifsucre').hide();
	$('#tag4').show();
})

$('#viande').click(function(){
	$('#ifviande').show();
	$('#ifmer2').hide();
	$('#ifmer').hide();
	$('#tag4').show();
})

$('#mer').click(function(){
	$('#ifmer').show();
	$('#ifviande').hide();
	$('#tag4').show();
})

$('#mer2').click(function(){
	$('#ifmer2').show();
	$('#ifviande').hide();
	$('#tag4').show();
})