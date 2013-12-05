function getGallery(search){
    console.log('getGallery called');
    $.ajax({
        //url: "php/proxy.php?search=" + search,
        url: "http://www.cssmania.com/api/api.php?search=" + search,
        success: function (result) {
            $("#gallery").append(result);
        }
    });
}