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
    
    $(xml).find("item").each(function() {
            
            console.log(this);
            var date = $(this).find("pubDate").text();
            var title = $(this).find("title").text();
	    var link =  $(this).find("link").text();
            
            $('#gallery').append('<div class="well gallery-item"><h3>' + title + '</h3><p id="date" class="pull-right">' + date.substr(0,16) + '</p><a href="' + link + '">' + link + '</a></div>');
           
    });
    
}