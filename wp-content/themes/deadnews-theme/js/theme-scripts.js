jQuery('document').ready(function() {
	var blogTitle = jQuery('<h1 id="deadnews-title"><a href="/deadnews/">Dead News</a></h1>');
	jQuery(blogTitle).insertBefore('#primary');

    /* this is from: http://www.electrictoolbox.com/jquery-change-default-value-on-focus/ */
  jQuery('.default-value').each(function() {
	var default_value = 'Search the Collection...';
	jQuery(this).focus(function() {
	  if(this.value == default_value) {
		this.value = '';
	  }
	});
		
	jQuery(this).blur(function() {
	  if(this.value == '') {
		this.value = default_value;
	  }
	});
  });

  jQuery('#submit_search').click(function() {
	if(jQuery('#solrq').val() == 'Search the Collection...') {
		jQuery('#solrq').val('');
	}
	else {
		jQuery('#solrq').val(jQuery('#solrq').val().replace(':', ''));
	}
  });

});
