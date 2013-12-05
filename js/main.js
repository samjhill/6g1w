function getGallery(search){
    console.log('getGallery called');
    $.getJSON( "php/proxy.php?search=" + search, function( data ) {
        console.log(data);
        var items = [];
        $.each( data, function( key, val ) {
          items.push( "<li id='" + key + "'>" + val + "</li>" );
        });
       
        $( "<ul/>", {
          "class": "my-new-list",
          html: items.join( "" )
        }).appendTo( "body" );
      });
}

