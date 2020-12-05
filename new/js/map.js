ymaps.ready(function () {
   
    var myMap = new ymaps.Map('map', {
        center: [41.298341, 69.341801],
        controls: ['fullscreenControl'],
        zoom: 17
    });
    myMap.controls.add('zoomControl', {
        size: "small",
    });
    myMap.behaviors.disable('scrollZoom');
    myMap.geoObjects
        .add(new ymaps.Placemark([41.298341, 69.341801], {
            iconCaption: 'SKYBUILDS'
        }, {
            preset: 'islands#dotIcon',
            iconColor: '#0080ff',
        }))
});


