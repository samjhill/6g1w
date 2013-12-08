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
            var title = $(this).find("title").text();
	    var link =  $(this).find("link").text();
            
            
            $('#gallery').append('<h3>' + title + '</h3>');
            $('#gallery').append('<script type="text/javascript" src="http://grabz.it/services/javascript.ashx?key=M2M1MDljMzhkNmJmNGQ5M2FiYzU4MDNhMjJkZWJkMjQ=&url=' + link +'"></script>');
	    $('#gallery').append('<a onmouseover="" href="' + link + '">' + link + '</a></div>');
    });
    
}