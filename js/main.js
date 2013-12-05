function getGallery(search){
    console.log('getGallery called');
    
    $.ajax({
		type: "GET",
		url: "php/proxy.php?search=" + search,
		dataType: "xml",
		success: parseXml
	     });
}

function parseXML(){
    console.log(xml);
}