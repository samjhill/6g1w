function getGallery(){
    console.log('getGallery called');
    $.ajax({
        url: "http://www.cssmania.com/api/api.php?search=authentic",
        success: function (result) {
            $("#gallery").append(result);
        }
    });
}