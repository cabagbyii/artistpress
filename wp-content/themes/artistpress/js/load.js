var pageLoadApp = pageLoadApp || {};

var page_sections = [];
var loc = window.location.href.split('/');
var pageVar = loc[loc.length-1];
if (pageVar.search('.html')) {
	pageVar = pageVar.split('.html')[0];
}
console.log(pageVar);
var pageName

switch(pageVar){
	case "":
		pageName = "home";
		break;
	case "index":
		pageName = "home";
		break;
	case "cypher":
		pageName = "cypher";
		break;
	case "music":
		pageName = "music";
		break;
	case "justhiphop":
		pageName = "justhiphop";
		break;
	case "events":
		pageName = "events";
		break;
	case "rsvp":
		pageName = "rsvp";
		break;
}

pageLoadApp.homepage = (function(){

	
	for(var i=0; i<document.getElementsByClassName('page-section').length;i++){
		page_sections.push(document.getElementsByClassName('page-section')[i]);
	}

	var miscellaneousActions = function () {
		// document.getElementsByClassName('banner-title')[0].innerHTML = infoObj[pageName].banner.title;

		var navi_top = window.innerWidth <= 768 ? document.getElementsByClassName('navi-mobile-cont')[0].clientHeight : document.getElementsByClassName('navi')[0].clientHeight

		var pgHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0) - navi_top;
		document.getElementsByClassName('banner-title')[0].style.paddingTop = '0px';
		var titleAndBtnHeight = document.getElementsByClassName('banner-title')[0].clientHeight + document.getElementsByClassName('main_btn')[0].clientHeight;

		var titlePadding = (pgHeight - titleAndBtnHeight)/2 ;

		document.getElementsByClassName('banner-title')[0].style.paddingTop = titlePadding+'px';

		document.getElementById('home_btn').addEventListener('click', function(){
			window.open(themeParams.action_url, '_blank')
		});
	}

	return {
		miscellaneousActions:miscellaneousActions,
		buildPage: function() {
			// definePageHeight();
			// loadBGs();
			miscellaneousActions();
		}
	}
})();

pageLoadApp.navi = (function(){
	var openMobileNav = function(){
		document.getElementsByClassName('mobile-navi')[0].style.display = 'block';
		document.getElementsByTagName('body')[0].style.overflow = 'hidden';
	}
	var closeMobileNav = function(){
		document.getElementsByClassName('mobile-navi')[0].style.display = 'none';
		document.getElementsByTagName('body')[0].style.overflow = 'auto';
	}

	var addNavClicks = function(){
		var nav_list_items = [];

		var i;

		for(i=0; i<document.getElementsByClassName('nav-list')[0].getElementsByTagName('li').length;i++){
			nav_list_items.push(document.getElementsByClassName('nav-list')[0].getElementsByTagName('li')[i]);
		}
		for(i=0; i<document.getElementsByClassName('mobile-nav-list')[0].getElementsByTagName('li').length;i++){
			nav_list_items.push(document.getElementsByClassName('mobile-nav-list')[0].getElementsByTagName('li')[i]);
		}

		nav_list_items.forEach(function(item){
			var nextLink = item.innerHTML.split('<a>')[1].split('</a>')[0];
			if(nextLink.search('#') > -1){
				nextLink = nextLink.split('#')[1];
			}
			nextLink = nextLink.toLowerCase();
			if (nextLink === 'home') {
				nextLink = ''
			}
			console.log(item);
			item.addEventListener('click', function(){
				console.log(nextLink);
				var newLoc = window.location.href.split('/');
				console.log(newLoc);
				newLoc[newLoc.length-1] = nextLink;
				newLoc = newLoc.join('/');
				window.location = newLoc;
			});
		});
	}
	return{
		openMobileNav:openMobileNav,
		closeMobileNav:closeMobileNav,
		addNavClicks:addNavClicks
	}

})();

pageLoadApp.sizing_and_positioning = (function(){
	var calculateFrameMargin = function(item){
		item.style.paddingTop = '0px';
		var parentElement = item.parentNode
		var topMargin = (parentElement.clientHeight - item.clientHeight)/2;
		item.style.paddingTop = topMargin+'px';
		
	}
	
	var verticalAlignInnerFrames = function() {
		var inner_frames = [];
		
		for(var i=0; i<document.getElementsByClassName('section-inner').length;i++){
			inner_frames.push(document.getElementsByClassName('section-inner')[i]);
		}

		inner_frames.forEach(function(item){
			console.log(item.parentNode.id);
			if (item.parentNode.id !== 'home-head') {
				calculateFrameMargin(item);
			}
		});

	};

	var page_resize = function(){
		// pageLoadApp.homepage.definePageHeight();
		verticalAlignInnerFrames();
	};

	return{
		calculateFrameMargin: calculateFrameMargin,
		page_resize:page_resize,
		visual_fixes : function(){
			verticalAlignInnerFrames();
		}
	}

})();
var $ = jQuery; 

var header_img = themeParams.backround_image;
$('<img/>').attr('src', header_img).on('load', function() {
	$(this).remove();
	$('#home-head').css('background-image', 'url('+header_img+')');
	$('#home-head').trigger('banner_done');
});

$('#home-head').on('banner_done', function(){
	$('.loading_screen').hide();
	$('body').css('overflow', 'auto');
});

pageLoadApp.homepage.buildPage();
pageLoadApp.sizing_and_positioning.visual_fixes();
window.addEventListener('resize', function(){
	pageLoadApp.sizing_and_positioning.page_resize();
	pageLoadApp.homepage.miscellaneousActions();
})
// document.getElementsByClassName('navi-mobile-btn')[0].addEventListener('click', pageLoadApp.navi.openMobileNav);
// document.getElementsByClassName('x_btn mobile_x')[0].addEventListener('click', pageLoadApp.navi.closeMobileNav);
// pageLoadApp.navi.addNavClicks();