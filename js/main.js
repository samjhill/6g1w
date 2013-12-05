function getGallery(search){
    console.log('getGallery called');
    
    $.ajax({
        url: 'http://www.reddit.com/r/webdesignporn/top/.rss',
        dataType: "xml",
        success: function (data) {
          console.log(data)
          alert(data);
        }
      });
    
    console.log('ajax request complete');
}
