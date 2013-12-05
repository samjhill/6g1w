function getGallery(search){
    console.log('getGallery called');
    $.get(
    "php/proxy.php",
    {paramOne : 1, paramX : 'abc'},
    function(data) {
       alert('page content: ' + data);
    }
);
}

