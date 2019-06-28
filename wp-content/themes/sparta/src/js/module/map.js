// import mapboxgl from "mapbox-gl";

// // var dataFromAdmin = $('#data-from-admin').text();
// // console.log(dataFromAdmin);

// if (document.querySelector('#map')) {

//     // mapboxgl.accessToken = 'pk.eyJ1IjoibWFwLWJ1aWxkZXItZGV2IiwiYSI6ImNqd2o2OGt3eTAzOTUzeXAzbzZpbnNzMWoifQ.wshixK_5B0Yzc6g_7b_7ZA';

//     // var map = new mapboxgl.Map({
//     //     container: 'map',
//     //     style: 'mapbox://styles/map-builder-dev/cjxftuwle01pg1cn0zdh3d88m',
//     //     center: [-77.04, 38.907],
//     //     zoom: 11.15
//     // });

//     map.on('load', function () {

//         // Add a layer showing the places.
//         // map.addLayer({
//         //     "id": "places",
//         //     "type": "symbol",
//         //     "source": {
//         //         "type": "geojson",
//         //         "data": {
//         //             "type": "FeatureCollection",
//         //             "features": [
//         //                 {
//         //                     "type": "Feature",
//         //                     "properties": {
//         //                         "description": "ывфаывпаываываываыва",
//         //                         "icon": "music"
//         //                     },
//         //                     "geometry": {
//         //                         "type": "Point",
//         //                         "coordinates": [-77.038659, 38.931567]
//         //                     }
//         //                 },
//         //                 {
//         //                     "type": "Feature",
//         //                     "properties": {
//         //                         "description": "ывфаывпаываываываыва",
//         //                         "icon": "music"
//         //                     },
//         //                     "geometry": {
//         //                         "type": "Point",
//         //                         "coordinates": [-77.038659, 38.931570]
//         //                     }
//         //                 }
//         //             ]
//         //         }
//         //     },
//         //     "layout": {
//         //         "icon-image": "{icon}-15",
//         //         "icon-allow-overlap": true
//         //     }
//         // });

//         // When a click event occurs on a feature in the places layer, open a popup at the
//         // location of the feature, with description HTML from its properties.
//         map.on('click', 'places', function (e) {
//             var coordinates = e.features[0].geometry.coordinates.slice();
//             var description = e.features[0].properties.description;

//             // Ensure that if the map is zoomed out such that multiple
//             // copies of the feature are visible, the popup appears
//             // over the copy being pointed to.
//             while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
//                 coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
//             }

//             $('#popap-map').addClass('111').text(description);

//             new mapboxgl.Popup()
//                 .setLngLat(coordinates)
//                 .setHTML(description)
//                 .addTo(map);
//         });

//         // Change the cursor to a pointer when the mouse is over the places layer.
//         map.on('mouseenter', 'places', function () {
//             map.getCanvas().style.cursor = 'pointer';
//         });

//         // Change it back to a pointer when it leaves.
//         map.on('mouseleave', 'places', function () {
//             map.getCanvas().style.cursor = '';
//         });
//     });

// }


mapboxgl.accessToken = "pk.eyJ1IjoibWFwLWJ1aWxkZXItZGV2IiwiYSI6ImNqd2o2OGt3eTAzOTUzeXAzbzZpbnNzMWoifQ.wshixK_5B0Yzc6g_7b_7ZA";
var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/map-builder-dev/cjxftuwle01pg1cn0zdh3d88m",
    center: [-77.04, 38.907],
    zoom: 11.15
}); 

map.on("load", function() { 
    map.addLayer('.$data.'); 

    map.on("click", "places", function (e) {
        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;
        var title = e.features[0].properties.title;
        var link = e.features[0].properties.link;

    
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }
    
        var popap = $("#popap-map");
        $("#popap-map h3").text(title);        
        $("#popap-map p").text(description);
        $("#popap-map").fadeIn(); 

        $(!popap).on('click' , function() {
            $(popap).fadeOut();
        })


    });
    
    map.on("mouseenter", "places", function () {
        map.getCanvas().style.cursor = "pointer";
    });
    
    map.on("mouseleave", "places", function () {
        map.getCanvas().style.cursor = "";
    });

});




