
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("form-1/assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
       
});
