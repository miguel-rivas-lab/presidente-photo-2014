function gsize(){
	dw = $(window).width() || document.width || document.documentElement.clientWidth || document.innerWidth || screen.width || window.innerWidth;
	dh = $(window).height() || document.height || document.documentElement.clientHeight || document.innerHeight || screen.height || window.innerHeight;

	$(".rsz").css({ 'width': dw, 'height': dh });
	$(".rsz_w").css({ 'width': dw });
	$(".rsz_h").css({ 'height': dh });
	$(".bk_stat").css({ 'width': dw-16, 'height': dh-16 });
	$(".gal").css({ 'width': dw-16 });
	$(".imag").css({ 'height': (0.12 * dw) });
	return false;
}

function gal(b){
	if (parseInt(b) == 1){
		if( $(".profile .tab").height() != 350){ 
			$(".profile .tab").animate({ 'background-size' : '350', 'height' : 350}, 400);
		}
		$(".profile p").fadeOut(200);
	} else {
		$(".profile .btn_06, .profile  .btn_05, .profile  .btn_04").css({ 'background-color' : '#001104' }, 0);
		$(".profile .tab").animate({ "background-size" : 'auto 80%', 'height' : dh}, 400);
		$(".profile .gal").fadeOut(200);
		$(".profile p").fadeIn(200);
	}
	return false;
}

function hMenu() {
	$("#menu_box").slideUp(200);
	$("#bkmenu").fadeOut(200);
	return false;
}

$(document).ready(function(){
	gsize();

	$(".imag a").fancybox({
		openEffect		: 'none',
		closeEffect		: 'none',
		helpers : {
			title : {
				type: 'inside'
			}
		},
		beforeShow		: function() {
                this.title += [ 
                	'<a ',
                		'href="https://twitter.com/share?url=' + encodeURI( location.href ) + '"',
                		'target="_blank"',
                		'class="twitter-share-button"',
                		'data-count="none"',
                		'data-url="' + this.href + '"',
                	'>',
                		'<img src="img/tt.png" />',
                	'</a> '
                ].join(' ');

                this.title += [
                	'<a',
                		' href="https://www.facebook.com/dialog/share',
                			'?app_id=713595632062465',
                			'&href=' + encodeURI( location.href + '?img=' + this.href ),
                			'&redirect_uri=' + encodeURI( location.href ),
                		'"',
                		' target="_blank"',
                	'>',
                		'<img src="img/fb.png" />',
                	'</a>'
                ].join( '' );
		}
	});

	for(c=1; c<4; c++){
		(function(i) {
			$("#btn_0"+i+", #opc_0"+i).on('click', function() {
				hMenu();
				$("div[id^='box']").fadeOut(200);
				gal(0);
				$("#box_02_0"+i).fadeIn(400);
				return false;
			});

			for(cc=1; cc<4; cc++){
				(function(ii) {
					$("#menu_box #opc_0"+i+" .btn_0"+parseInt(ii+3)).on('click', function() {
						hMenu();
						$("div[id^='box'], .gal").fadeOut(200);
						gal(1);
						$("#box_02_0"+i+", #box_02_0"+i+" .gal0"+ii).fadeIn(500);
						return false;
					});
				})(cc);
			}

			$(".btn_0"+parseInt(i+3)).on('click', function() {
				$(".profile .btn").css({ 'background-color' : '#001104' }, 0);
				$(".profile .btn_0"+parseInt(i+3)).css({ 'background-color' : '#d1af5d' }, 0);
				return false;
			});

			$(".profile .btn_0"+parseInt(i+3)).on('click', function() {
				gal(1);
				$(".gal").hide(0);
				$(".profile .gal0"+i).fadeIn(500);
				return false;
			});

		})(c);
	}

	$("#menu").on('click', function() {
		$("#bkmenu").fadeIn(200);
		$("#menu_box").slideDown(400);
		return false;
	});

	$("#menu_box, #bkmenu").click(function() {
		hMenu();
		return false;
	});

	$("#btn_00").on('click', function() {
		hMenu();
		$(".profile").fadeOut(200);
		$("#box_01").fadeIn(400);
		return false;
	});

});

$(window).resize(function(){
	gal(0);
	gsize();
});

$(window).load(function(){
	gsize();
	$("#cover").fadeOut(1000);
});