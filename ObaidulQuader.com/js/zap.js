
$("#lateupdate").owlCarousel({
	singleItem : false,
	itemsCustom : false,
	items : 2,
	// Responsive 
	responsive: true,
	responsiveRefreshRate : 200,
	responsiveBaseWidth: window,
	itemsDesktop : [1199,2],
	itemsDesktopSmall : [980,2],
	itemsTablet: [768,1],
	itemsTabletSmall: false,
	itemsMobile : [479,1],
	//Autoplay
	autoPlay : true,
	stopOnHover : true,
});


$(".achivements-content").owlCarousel({
	singleItem : true,
	itemsCustom : false,
	items : 1,
	    //Autoplay
    autoPlay : true,
    stopOnHover : true,


});
$('.datepicker').pickadate({
	selectMonths: true,
    selectMonths: false, // Creates a dropdown to control month
    selectYears: 5, // Creates a dropdown of 15 years to control year
	closeOnSelect: true,
	closeOnClear: true,
	today: '',
	clear: 'Clear',
	close: 'Done'
  });
  
$('.overlay-iframe').click(function(){
	
	var thumb_url = $(this).data('url');
	var main_url = $('.main-frame').attr('src');
	$('.main-frame').attr('src',thumb_url.concat("&autoplay=1"));
	$('.master-title').text($(this).data('title'));
	
});
 $('#vedio-carousel').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
  	vertical: true,
    dots: false,
  autoplay: true,
});
