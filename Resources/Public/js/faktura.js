/* faktura */
jQuery(document).ready(function(){
    jQuery('img[usemap]').rwdImageMaps();
    jQuery('#anfahrt-tab').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        resetMap(map);
    });
    function resetMap(m) {
        x = m.getZoom();
        c = m.getCenter();
        google.maps.event.trigger(m, 'resize');
        m.setZoom(x);
        m.setCenter(c);
    };
});
