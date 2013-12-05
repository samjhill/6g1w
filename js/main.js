function getGallery(search){
    console.log('getGallery called');
    
    $.ajax({
        url: 'php/proxy.php',
        dataType: "json",
        success: function (data) {
          console.log(data)
          alert(data);
        }
      });
    
    console.log('ajax request complete');
}
