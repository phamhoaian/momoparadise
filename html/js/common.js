$(function(){
	$('button.mo-nav-button').click(function(){
		if ($('body').hasClass('main-nav-open'))
		{
			$('body').removeClass('main-nav-open');
		}
		else
		{
			$('body').addClass('main-nav-open');
		}
	});

	$('.mo-nav-item').click(function(){
		$('.mo-nav-sub').hide('slow');
		$('.mo-nav-item').removeClass('has-dropdown');
		
		var sub_menu = $(this).find('.mo-nav-sub');
		if (sub_menu)
		{
			$(this).toggleClass('has-dropdown');
			sub_menu.slideToggle('slow');
		}
	});

	var allPanels = $('.career > dd').hide();
	$('.career > dt').click(function(){
		allPanels.slideUp();

	    $(this).next().slideDown();
	    return false;
	});
});