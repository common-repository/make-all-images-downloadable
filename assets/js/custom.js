
function MAID_Remove_BaseUrl_enbl_dwnld_attr(url) {
	
	var baseUrlPattern = /^https?:\/\/[a-z\:0-9.]+/;
	var result = "";

	var match = baseUrlPattern.exec(url);
	if (match != null) {
	    result = match[0];
	}

	if (result.length > 0) {
	    url = url.replace(result, "");
	}

	return url;
}


jQuery("img").each(function ()

{
	var ktrUrl = jQuery(this).attr("src");
	var ktrUrlWhtotBase = MAID_Remove_BaseUrl_enbl_dwnld_attr(ktrUrl);
	var buttonDiv = jQuery("<a>", {"class": "ktr-dwnl-btn-icon", "href": ktrUrlWhtotBase, "download" : "" });
	jQuery(buttonDiv).append('<i class="fa fa-download ktr-dnload-icon" aria-hidden="true"></i>');
	jQuery(this).after(buttonDiv);


	jQuery("img").mouseover(function() {
	    jQuery(this).find(" + .ktr-dwnl-btn-icon").css("visibility","visible");
	}).mouseout(function() {
	    jQuery(this).find(" + .ktr-dwnl-btn-icon").css("visibility","hidden");
	    jQuery(".ktr-dwnl-btn-icon:hover").css("visibility", "visible");
	});


}); 