function getGallery(search){
    console.log('getGallery called');
    
     $.ajax({
		type: "GET",
		url: "php/proxy.php",
		dataType: "xml",
		success: parseXml
	     });
    
    console.log('ajax request complete');
}

function parseXml(xml){
    //console.log('parseXml called');
    //console.log(xml);
    
    $(xml).find("item").each(function() {
            console.log('items');
            console.log(this);
	    var link =  $(this).find("link").text();
	    $('#gallery').append('<a href="' + link + '>' + link + '</a>');
    });
}