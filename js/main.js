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
            
            $('#gallery').append('<div class="well"><h3>' + title + '</h3><p>' + date.substr(0,16) + '</p><script type="text/javascript" src="http://grabz.it/services/javascript.ashx?key=M2M1MDljMzhkNmJmNGQ5M2FiYzU4MDNhMjJkZWJkMjQ=&url=' + encodeURIComponent(link) + '&width=400&height=400&format=png&delay=1000"></script><a href="' + link + '">' + link + '</a></div>');
           
    });
    
}