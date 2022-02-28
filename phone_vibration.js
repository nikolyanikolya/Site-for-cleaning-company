$(function(){
 
    $('#demo').jrumble({
    x: 1,
    y: 1,
    rotation: 5
    });
   $('#demo').hover(function(){
   $(this).trigger('startRumble');
   }, function(){
   $(this).trigger('stopRumble');
   });
   });