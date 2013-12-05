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
    console.log('parseXml called');
    console.log(xml);
}