/**
 * Created by kevin on 3/6/2017.
 */
$(document).ready(function () {

    $(".player").mb_YTPlayer();

    $('.player').on("YTPReady",function(e){
        //Once video is ready remove the filler image
        $('.imageOverlay').fadeOut('slow');
    });

    var $input = $(".typeahead");
    $input.typeahead({
        source: [
            "Test1", "Test2", "Test3"
        ],
        autoSelect: true
    });


});