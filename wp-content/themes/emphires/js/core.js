"use strict";
/*----  Functions  ----*/
jQuery.fn.cspt_is_bound = function(type) {
	if( this.data('events') !== undefined ){
		if (this.data('events')[type] === undefined || this.data('events')[type].length === 0) {
			return false;
		}
		return (-1 !== $.inArray(fn, this.data('events')[type]));
	} else {
		return false;
	}
};
var cspt_sticky_header = function() {
	if( jQuery('.cspt-header-sticky-yes').length > 0 ){
		var offset_px = 0;
		if( jQuery('#wpadminbar').length>0 && (self===top) ){
			offset_px = jQuery('#wpadminbar').height();
		}
		jQuery('.cspt-header-menu-area.cspt-header-sticky-yes').parent().css('height', jQuery('.cspt-header-menu-area.cspt-header-sticky-yes').height() );
		if( jQuery(document).width()>cspt_js_variables.responsive ){
			jQuery( '.cspt-header-sticky-yes' ).stick_in_parent({ 'parent':'body', 'spacer':false, 'offset_top':offset_px, 'sticky_class':'cspt-sticky-on'}).addClass('cspt-sticky-applied');
		} else {
			if( jQuery( '.cspt-header-sticky-yes' ).hasClass('cspt-sticky-applied') ){
				jQuery( '.cspt-header-sticky-yes' ).trigger("sticky_kit:detach").removeClass('cspt-sticky-applied');
			}
		}
	}
}
var cspt_toggleSidebar = function() {
	jQuery(".cspt-navbar > div").toggleClass("active");
	if( jQuery('.cspt-navbar > div > .closepanel').length==0 ){
		jQuery('.cspt-navbar > div').append("<span class='closepanel'><i class='cspt-base-icon-cancel'></i></span>");
		jQuery('.cspt-navbar > div > .closepanel').on('click', function(){	    		
			jQuery('.nav-menu-toggle').trigger('click');	    		
		});
	}
}
var cspt_stretched_col_calc = function() {
	if( jQuery('.wpb_column.cspt-col-stretched-yes').length>0 ){
		// Returns width of browser viewport
		var window_width = jQuery( window ).width();
		// Returns width of HTML document
		var document_width = jQuery( document ).width();
		jQuery('.wpb_column.cspt-col-stretched-yes').each(function(){
			var this_ele    = jQuery(this);
			var main_width  = jQuery('#main').width();
			var extra_width = ((window_width - main_width)/2);
			var curr_width  = jQuery('.wpb_wrapper', this_ele).width();
			var wrapper_div   = '';
			var minimum_width = 0;
			var both_margin   = false;
			if( this_ele.parent().hasClass('cspt-break-col-1200') ){
				minimum_width = 1200;
			} else if( this_ele.parent().hasClass('cspt-break-col-991') ){
				minimum_width = 991;
			} else if( this_ele.parent().hasClass('cspt-break-col-767') ){
				minimum_width = 767;
			}
			if( minimum_width > 0 && document_width < minimum_width ){
				both_margin = true;
			}
			if( this_ele.hasClass('cspt-col-stretched-right') ){
				if( this_ele.hasClass('cspt-col-stretched-content-yes') ){
					wrapper_div = ', .vc_column-inner > .wpb_wrapper';
				}
				jQuery('.vc_column-inner > .cspt-stretched-div'+wrapper_div, this_ele).css( 'margin-right','-'+extra_width+'px' );
				if( both_margin == true ){
					jQuery('.vc_column-inner > .cspt-stretched-div'+wrapper_div, this_ele).css( 'margin-left','-'+extra_width+'px' );
				} else {
					jQuery('.vc_column-inner > .cspt-stretched-div'+wrapper_div, this_ele).css( 'margin-left','' );
				}
			} else {
				if( this_ele.hasClass('cspt-col-stretched-content-yes') ){
					wrapper_div = ', .vc_column-inner > .wpb_wrapper';
				}
				jQuery('.vc_column-inner > .cspt-stretched-div'+wrapper_div, this_ele).css( 'margin-left','-'+extra_width+'px' );
				if( both_margin == true ){
					jQuery('.vc_column-inner > .cspt-stretched-div'+wrapper_div, this_ele).css( 'margin-right','-'+extra_width+'px' );
				} else {
					jQuery('.vc_column-inner > .cspt-stretched-div'+wrapper_div, this_ele).css( 'margin-right','' );
				}
			}
		});
	}
}
var cspt_sorting = function() {
	jQuery('.cspt-sortable-yes').each(function(){
		var boxes	= jQuery('.cspt-element-posts-wrapper', this );
		var links	= jQuery('.cspt-sortable-list a', this );			
		boxes.isotope({
			animationEngine : 'best-available'
		});
		links.on('click', function(e){
			var selector = jQuery(this).data('sortby');
			if( selector != '*' ){
				var selector = '.' + selector;
			}
			boxes.isotope({
				filter			: selector,
				itemSelector	: '.cspt-ele',
				layoutMode		: 'fitRows'
			});
			links.removeClass('cspt-selected');
			jQuery(this).addClass('cspt-selected');
			e.preventDefault();
		});
	});
}
var cspt_back_to_top = function() {
	// scroll-to-top
	var btn = jQuery('.scroll-to-top');
	jQuery(window).scroll(function() {
	if (jQuery(window).scrollTop() > 300) {
		btn.addClass('show');
	} else {
		btn.removeClass('show');
	}
	});
	btn.on('click', function(e) {
	e.preventDefault();
	jQuery('html, body').animate({scrollTop:0}, '300');
	});
}
var cspt_navbar = function() {
	if( !jQuery('ul#cspt-top-menu > li > a[href="#"]').cspt_is_bound('click') ) {
		jQuery('ul#cspt-top-menu > li > a[href="#"]').click(function(){ return false; });
	}
	jQuery('.cspt-navbar > div > ul li:has(ul)').append("<span class='sub-menu-toggle'><i class='cspt-base-icon-down-open-big'></i></span>");
	jQuery('.cspt-navbar li').on('hover', function() {
		if(jQuery(this).children("ul").length == 1) {
			var parent		= jQuery(this);
			var child_menu	= jQuery(this).children("ul");
			if( jQuery(parent).offset().left + jQuery(parent).width() + jQuery(child_menu).width() > jQuery(window).width() ){
				jQuery(child_menu).addClass('cspt-nav-left');
			} else {
				jQuery(child_menu).removeClass('cspt-nav-left');
			}
		}
	});
	jQuery(".nav-menu-toggle").on("click tap", function() {
		cspt_toggleSidebar();
	});
	jQuery('.sub-menu-toggle').on( 'click', function() {
		if(jQuery(this).siblings('.sub-menu, .children').hasClass('show')){
			jQuery(this).siblings('.sub-menu, .children').removeClass('show');
			jQuery( 'i', jQuery(this) ).removeClass('cspt-base-icon-up-open-big').addClass('cspt-base-icon-down-open-big');
		} else {
			jQuery(this).siblings('.sub-menu, .children').addClass('show');
			jQuery( 'i', jQuery(this) ).removeClass('cspt-base-icon-down-open-big').addClass('cspt-base-icon-up-open-big');
		}
		return false;
	});
	jQuery('.nav-menu-toggle').on( 'click', function(){
		jQuery('.cspt-navbar ul.menu > li > a').on( 'click', function() {
			if( jQuery(this).attr('href')=='#' && jQuery(this).siblings('ul.sub-menu, ul.children').length>0 ){
				jQuery(this).siblings('.sub-menu-toggle').trigger('click');
				return false;
			}
		});
	})
}
var cspt_lightbox = function() {
	var i_type = 'image';
	jQuery('a.cspt-lightbox, a.cspt-lightbox-video, .cspt-lightbox-video a, .cspt-lightbox a').each(function(){
		if( jQuery(this).hasClass('cspt-lightbox-video') || jQuery(this).closest('.wpb_single_image').hasClass('cspt-lightbox-video') || jQuery(this).closest('.vc_icon_element').hasClass('cspt-lightbox-video') ){
			i_type = 'iframe';
		} else {
			i_type = 'image';
		}
		jQuery(this).magnificPopup({type:i_type});
	});
}
var cspt_video_popup = function() {
	jQuery('.cspt-popup').on('click', function(event) {
		event.preventDefault();
		var href  = jQuery(this).attr('href');
		var title = jQuery(this).attr('title');
		window.open( href , title, "width=600,height=500");
	});
}
var cspt_testimonial = function() {
	jQuery('.cspt-testimonial-active').each(function(){
		var ele_parent = jQuery(this).closest('.cspt-element-posts-wrapper');
		jQuery('.creativesplanet-ele.creativesplanet-ele-testimonial', ele_parent ).on('mouseover', function() {
			jQuery('.creativesplanet-ele.creativesplanet-ele-testimonial', ele_parent ).removeClass('cspt-testimonial-active');
			jQuery(this).addClass('cspt-testimonial-active');
		});
	});
}
var cspt_search_btn = function(){
	jQuery(function() {
		jQuery('.cspt-header-search-btn').on("click", function(event) {
			event.preventDefault();
			jQuery(".cspt-header-search-form-wrapper").addClass("open");
			jQuery('.cspt-header-search-form-wrapper input[type="search"]').focus();
		});
		jQuery(".cspt-search-close").on("click keyup", function(event) {
			jQuery(".cspt-header-search-form-wrapper").removeClass("open");
		});
	});
}
var cspt_gallery = function(){
	jQuery("div.cspt-gallery").each(function(){
		jQuery( this ).lightSlider({ item: 1, auto: true, loop: true, controls: false, speed: 1500, pause: 5500 }); 
	});
}
var cspt_center_logo_header_class = function() {
	if( jQuery('#masthead.cspt-header-style-5 ul#cspt-top-menu').length > 0 ){
		var has_class = jQuery('#masthead.cspt-header-style-5 ul#cspt-top-menu > li').hasClass('cspt-logo-append');
		if( has_class==false ){
			var total_li = jQuery('#masthead.cspt-header-style-5 ul#cspt-top-menu > li').length;
			var li = Math.floor( total_li / 2 );
			jQuery('#masthead.cspt-header-style-5 ul#cspt-top-menu > li:nth-child('+li+')').addClass('cspt-logo-append');
		}
	}
}
var cspt_selectwrap = function(){
	jQuery("select:not(#rating)").each(function(){
		jQuery( this ).wrap( "<div class='cspt-select'></div>" );
	});
}

var cspt_preloader = function() {
	jQuery(".cspt-preloader").fadeOut('600');
}

/*----  Events  ----*/
// On resize
jQuery(window).resize(function(){
	setTimeout(function() {
		cspt_sticky_header();
		cspt_stretched_col_calc();
	  }, 100);
});
// on ready
jQuery(document).ready(function(){
	cspt_sorting();
	cspt_stretched_col_calc();
	cspt_back_to_top();
	cspt_sticky_header();
	cspt_navbar();
	cspt_lightbox();
	cspt_video_popup();
	cspt_testimonial();
	cspt_search_btn();
	cspt_center_logo_header_class();
	cspt_selectwrap();
});	
// on load
jQuery(window).on( 'load', function(){
	cspt_preloader();
	cspt_sorting();
	cspt_gallery();
	cspt_sticky_header();
});
