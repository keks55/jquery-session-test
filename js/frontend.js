jQuery(document).ready(function($) {
			
	var number = 100 + Math.floor(Math.random() * 999);
	$.session.set('captcha', number);
	alert($.session.get('captcha'));
	//$.session.clear();
	
});