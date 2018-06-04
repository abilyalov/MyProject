var almaty_map;
        
    ymaps.ready(function(){
        almaty_map = new ymaps.Map("first_map", {
            center: [43.208020, 76.669390],
            zoom: 15
        });
    var myPlacemark = new ymaps.Placemark([43.208020, 76.669390], {}, {
      preset: 'islands#redIcon'
    });
    almaty_map.geoObjects.add(myPlacemark);
    var myPolygon = new ymaps.Polygon([
      [[43.227902, 76.950382],[43.270190, 76.943945],[43.245975, 76.837204],[43.194574, 76.879885],[43.199695, 76.903886]],
    ]);

    almaty_map.geoObjects.add(myPolygon);


    var myPlacemark1 = new ymaps.Placemark([43.235211, 76.900019], {
    balloonContentHeader: 'Бесплатная доставка',
    hintContent: 'доставка'
    });

    almaty_map.geoObjects.add(myPlacemark1);


ymaps.route(['Астана','Актау',[43.209, 76.6694 ]]).then(
    function (route) {
        almaty_map.geoObjects.add(route);
    },
    function (error) {
        alert('Возникла ошибка: ' + error.message);
    }
);
    });
