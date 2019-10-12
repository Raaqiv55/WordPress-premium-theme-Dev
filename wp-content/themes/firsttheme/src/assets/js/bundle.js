import $ from 'jquery';
import './components/slider';
import './components/navigation';
import 'slick-carousel';

$(document).ready(() => {
    $('.c-post__gallery').slick({
        arrows: false,
        adaptiveHeight: true
    });

    $(".most_recent_widget").slick();
    if(wp.customize && wp.customize.selectiveRefresh){

        wp.customize.selectiveRefresh.bind('partial-content-rendered', placement => {
            if(placement.partial.widgetIdParts && placement.partial.widgetIdParts.idBase === "_themename_mst_recent_widget"){
                placement.container.find(".most_recent_widget").slick();
            }
        });
    }
});

