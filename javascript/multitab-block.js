jQuery('document').ready(function() {

    jQuery('.tab-link').click(function(){
        var tabclass = jQuery(this).attr('data-tag');
        jQuery('.multi-tab-content-inner').removeClass('active');
        jQuery('.tab-link').removeClass('active');
        jQuery(this).addClass('active');

        jQuery('.multi-tab-content-inner').each(function(){
            var contentClass = jQuery(this).attr('data-tag');
            if(tabclass == contentClass){
				jQuery(this).addClass('active');
			}	
        })
  
    })

})