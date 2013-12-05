function getGallery(search){
    console.log('getGallery called');
    $.getJSON({
        url: "php/proxy.php?search=" + search,
        //url: "http://www.cssmania.com/api/api.php?search=" + search,
        success: function (result) {
            $("#gallery").append(result);
        }
    });
}

