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

	var loadBGs = function () {
		page_sections.forEach(function(item) {
			var thisClassName = item.classList[1]
			document.getElementsByClassName(thisClassName)[0].style.backgroundImage = 'url('+infoObj[pageName][thisClassName].img+')';
		})
	}

	var miscellaneousActions = function () {
		// document.getElementsByClassName('banner-title')[0].innerHTML = infoObj[pageName].banner.title;
		document.getElementsByClassName('main_btn')[0].innerHTML = infoObj[pageName].banner.action_txt;

		var navi_top = window.innerWidth <= 768 ? document.getElementsByClassName('navi-mobile-cont')[0].clientHeight : document.getElementsByClassName('navi')[0].clientHeight

		var pgHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0) - navi_top;
		document.getElementsByClassName('banner-title')[0].style.paddingTop = '0px';
		document.getElementsByClassName('scroll_prompt')[0].style.paddingTop = '0px';		
		var titleAndBtnHeight = document.getElementsByClassName('banner-title')[0].clientHeight + document.getElementsByClassName('main_btn')[0].clientHeight;

		var titlePadding = (pgHeight - titleAndBtnHeight)/2 ;

		var scroll_prompt_padding =  titlePadding - (document.getElementsByClassName('scroll_prompt')[0].clientHeight + 20); 

		document.getElementsByClassName('banner-title')[0].style.paddingTop = titlePadding+'px';
		document.getElementsByClassName('scroll_prompt')[0].style.paddingTop = scroll_prompt_padding+'px';
	}

	return {
		miscellaneousActions:miscellaneousActions,
		buildPage: function() {
			// definePageHeight();
			loadBGs();
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

pageLoadApp.lightbox = (function(){
	var lightbox_html = 
		'<div class="light-box">' +
			'<div class="x_btn"></div>' +
			'<div class="container section-inner">'+
				'<div class="inner_container">'+
					'<div class="embed-responsive embed-responsive-16by9">'+
					  	'<iframe class="embed-responsive-item" id="popup-embed" src="" allowfullscreen></iframe>'+
					'</div>'+
				'</div>'+
			'</div>'+
		'</div>';

	var body = document.getElementsByTagName('body')[0];
	var lightbox;
	var lightbox_inner;
	var lightbox_iframe;

	var defineLightboxVars = function(){
		lightbox = document.getElementsByClassName('light-box')[0];
		lightbox_inner = document.querySelector('.light-box .section-inner');
		lightbox_iframe = document.getElementById('popup-embed');
	}

	var showLightBox = function(src){
		lightbox_iframe.src = src;
		lightbox.style.display = 'block';
		body.style.overflow = 'hidden';
	}
	
	var hideLightBox = function(src){
			lightbox.style.display = 'none';
			body.style.overflow = 'auto';
			lightbox_iframe.src = '';
		}
	
	var animateScrollTo = function(target) {
        $('html, body').animate({
            scrollTop: $(target).offset().top + 'px'
        }, 'medium');
	}
	
	var setUpLightBoxTriggers = function(){
		lightbox_iframe.onload =function() {
			pageLoadApp.sizing_and_positioning.calculateFrameMargin(lightbox_inner);
		};
		var current_main_btn = pageName+'_btn';
		console.log(current_main_btn);
		document.getElementById(current_main_btn).addEventListener('click', function(){
			if (infoObj.main_btn_click[current_main_btn].type === 'lightbox_content') {
				showLightBox(infoObj.main_btn_click[current_main_btn].link)
			}
			if (infoObj.main_btn_click[current_main_btn].type === 'scroll') {
				animateScrollTo(infoObj.main_btn_click[current_main_btn].target)
			}
			if (infoObj.main_btn_click[current_main_btn].type === 'link_out') {
				window.location = infoObj.main_btn_click[current_main_btn].target
			}
		});
		
		document.querySelector('.light-box .x_btn').addEventListener('click', function(){
			if (infoObj.main_btn_click[current_main_btn].type === 'lightbox_content') {
				hideLightBox(infoObj.main_btn_click[current_main_btn].link)
			}
		});
	}
	var init = function () {
		body.innerHTML = body.innerHTML + lightbox_html;
		defineLightboxVars();
		setUpLightBoxTriggers();

	}
	return{
		init:init
	}
})();

pageLoadApp.homepage.buildPage();
pageLoadApp.lightbox.init();
pageLoadApp.sizing_and_positioning.visual_fixes();
window.addEventListener('resize', function(){
	pageLoadApp.sizing_and_positioning.page_resize();
	pageLoadApp.homepage.miscellaneousActions();
})
document.getElementsByClassName('navi-mobile-btn')[0].addEventListener('click', pageLoadApp.navi.openMobileNav);
document.getElementsByClassName('x_btn mobile_x')[0].addEventListener('click', pageLoadApp.navi.closeMobileNav);
pageLoadApp.navi.addNavClicks();