jQuery.noConflict();
(function($){
	$(document).ready(function(){
		var button = '<a href="#" class="menu-b"></a>';
		$('#nav').parent().append(button);
		$('a.menu-b').click(function(){
			$('#nav ul').slideToggle();
		return false;
		}); // end click
	});
})(jQuery);
//# sourceMappingURL=mob-nav.js.map
