function getGallery(search){
    console.log('getGallery called');
    
    $.ajax({
		type: "GET",
		url: "php/proxy.php?search=" + search,
		dataType: "json",
		success: parseJson
	     });
}

function parseJson(json){
    console.log(json);
}