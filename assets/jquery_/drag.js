$(function(){
    $(".headerimage").css('cursor','s-resize');
    var y1 = $('.picturecontainer').height();
    var y2 = $('.headerimage').height();
    $(".headerimage").draggable({
                                  scroll: false,
                                  axis: "y",
                                  drag: function(event, ui) {
                                      if(ui.position.top >= 0)
                                      {
                                          ui.position.top = 0;
                                      }
                                      else if(ui.position.top <= y1 - y2)
                                      {
                                          ui.position.top = y1 - y2;
                                      }
    
            },
            stop: function(event, ui) {
            //####
        }
        });                    
}); 