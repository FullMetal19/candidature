"use strict";

var cspt_admin_menu_class = function(){
	jQuery('#adminmenu > li[id$="-wp-admin-customize"]').addClass('cspt-admin-customize-menu');
}

jQuery(document).ready(function($){
	cspt_admin_menu_class();
	jQuery( '#acf-cspt-photo-gallery-group' ).hide();
	jQuery( '.cspt-merlin-message-small a' ).on('click', function(e){
		e.preventDefault();
		var parent = jQuery(this).closest('.cspt-merlin-message-box');
		jQuery('.cspt-merlin-message-conform', parent).fadeIn();
		jQuery('.cspt-merlin-message-inner', parent).animate({opacity: 0}, 400);
		jQuery('.cspt-merlin-message-box button.notice-dismiss', parent).fadeOut(400);
	});
	jQuery( '.cspt-disable-merlin-message-cancel' ).on('click', function(e){
		e.preventDefault();
		var parent = jQuery(this).closest('.cspt-merlin-message-box');
		jQuery('.cspt-merlin-message-conform', parent).fadeOut();
		jQuery('.cspt-merlin-message-inner', parent).animate({opacity: 1}, 400);
		jQuery('.cspt-merlin-message-box button.notice-dismiss', parent).fadeIn(400);
	});
	jQuery( '.cspt-disable-merlin-message' ).on('click', function(e){
		e.preventDefault();
		jQuery(this).closest('.notice.is-dismissible').slideUp();
		jQuery.post(
			ajaxurl, 
			{ 'action': 'cspt_remove_merlin_message' },
			function(response) {
				// Do nothing
			}
		);
	});
	// Ratings box
	jQuery( '.cspt-merlin-ratings-box .cspt-question-btn' ).on('click', function(e){
		e.preventDefault();
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-main').slideUp(400);
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-questions').slideDown(400);
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-back-link').fadeIn(400);
	});
	jQuery( '.cspt-merlin-ratings-box .cspt-happy-btn' ).on('click', function(e){
		e.preventDefault();
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-main').slideUp(400);
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-ratings').slideDown(400);
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-back-link').fadeIn(400);
	});
	jQuery( '.cspt-merlin-ratings-box .cspt-merlin-ratings-box-back-link' ).on('click', function(e){
		e.preventDefault();
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-main').slideDown(400);
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-ratings').slideUp(400);
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-questions').slideUp(400);
		jQuery('.cspt-merlin-ratings-box .cspt-merlin-ratings-box-back-link').fadeOut(400);
	});
	jQuery( '.cspt-disable-ratings-message-cancel' ).on('click', function(e){
		var parent = jQuery(this).closest('.cspt-merlin-message-box');
		jQuery('.cspt-merlin-message-conform', parent).fadeOut();
		jQuery('.cspt-merlin-message-inner', parent).animate({opacity: 1}, 400);
		jQuery('.cspt-merlin-message-box button.notice-dismiss', parent).fadeIn(400);
	});
	jQuery( '.cspt-merlin-ratings-box .cspt-disable-ratings-message' ).on('click', function(e){
		e.preventDefault();
		jQuery(this).closest('.notice.is-dismissible').slideUp();
		jQuery.post(
			ajaxurl, 
			{ 'action': 'cspt_remove_ratings_message' },
			function(response) {
				// Do nothing
			}
		);
	});
});
jQuery(window).on( 'load', function($){
	jQuery( '#acf-cspt-photo-gallery-group' ).insertBefore( '#cfpf-format-gallery-preview' );
	if( jQuery('a.post-format-icon.post-format-gallery').hasClass('current')==true ){
		jQuery( '#acf-cspt-photo-gallery-group' ).show();
	} else {
		jQuery( '#acf-cspt-photo-gallery-group' ).hide();
	}
	jQuery('a.post-format-icon').on( 'click', function(){
		if( jQuery( this ).hasClass('post-format-gallery')==true ){
			jQuery( '#acf-cspt-photo-gallery-group' ).removeClass('creativesplanet-hide').addClass('creativesplanet-show');
		} else {
			jQuery( '#acf-cspt-photo-gallery-group' ).removeClass('creativesplanet-show').addClass('creativesplanet-hide');
		}
	})
	// Review box
	jQuery('a.cspt-question-btn').on('click', function(){
	});
});	
