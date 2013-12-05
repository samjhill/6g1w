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
    
    $('#gallery').append('<div class="container">');
    
    $(xml).find("item").each(function() {
            console.log(this);
            var title = $(this).find("title").text();
            console.log(title);
	    var link =  $(this).find("link").text();
            console.log(link);
            $('#gallery').append('<div class="well">')
            $('#gallery').append('<h3>' + title + '</h3>');
	    $('#gallery').append('<a href="' + link + '">' + link + '</a></div>');
    });
    
    $('#gallery').append('</div>');
}