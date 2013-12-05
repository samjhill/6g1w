function getGallery(search){
    console.log('getGallery called');
    
    $.ajax({
        url: 'http://www.cssmania.com/api/api.php?search=' + $_GET['search'],
        dataType: "jsonp",
        success: function (data) {
          console.log(data)
          alert(data);
        }
      });
}

function parseJson(json){
    console.log(json);
}