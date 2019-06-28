<?php

get_header('secondary');

?>

<section id="portfolio-page" data-color="dark">

    <div class="portfolio-page-content">

        <div id="map" class="portfolio-page-map"></div>

        <h2 class="section-title section-title--end text-dark">
            <span class="section-title__first-letter font-weight-normal">Г</span>
            ЕОГРАФИЯ НАШЕЙ РАБОТЫ
        </h2>

        <div id="popap-map" class="portfolio-page-item">
            <button id="close-popap">х</button>
            <h3></h3>
            <p class="portfolio-page-item-text"></p>
            <a href="#" class="btn btn--white">
                <div class="decor"></div>
                Подробнее
            </a>
        </div>

    </div>

</section>


<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>

<?php
$data = [
    'id' => 'places',
    'type' => 'symbol',
    'source' => [
        'type' => 'geojson',
        'data' => [
            'type' => 'FeatureCollection',
            'features' => []
        ]
    ],
    "layout" => [
        "icon-image" => "{icon}",
        "icon-allow-overlap" => true
    ]
];


wp_reset_postdata();

$posts = get_posts(array(
    'numberposts' => 0,
    'category_name'    => 'case-category',
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'post',
    'suppress_filters' => true,
));

foreach ($posts as $post) :


    $data['source']['data']['features'][] = [
        'type' => 'Feature',
        'properties' => [
            'description' => get_field('descrip_map', $post->ID),
            'title' => get_field('title_map', $post->ID),
            'icon' => 'pin-red',
            'link' => get_field('link_map', $post->ID)
        ],
        'geometry' => [
            'type' => 'Point',
            'coordinates' => [(float) get_field('dolgota', $post->ID), (float) get_field('shirota', $post->ID)]
        ]
    ];

// the_field('descrip_map', $post->ID);
// the_field('dolgota', $post->ID);
// the_field('shirota', $post->ID);
// the_field('title_map', $post->ID);
endforeach;

$data = json_encode($data, JSON_UNESCAPED_UNICODE);


wp_add_inline_script('app', '
mapboxgl.accessToken = "pk.eyJ1IjoibWFwLWJ1aWxkZXItZGV2IiwiYSI6ImNqd2o2OGt3eTAzOTUzeXAzbzZpbnNzMWoifQ.wshixK_5B0Yzc6g_7b_7ZA";
var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/map-builder-dev/cjxftuwle01pg1cn0zdh3d88m",
    center: [37.61556, 55.75222],
    zoom: 9.15
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
    
        $("#popap-map").fadeOut(100); 
        $("#popap-map h3").text(title);        
        $("#popap-map p").text(description);
        $("#popap-map a").attr("href", link);
        $("#popap-map").fadeIn(100); 
        $("#close-popap").on("click" , function(){
            $("#popap-map").fadeOut(100); 
        });

    });
    
    map.on("mouseenter", "places", function () {
        map.getCanvas().style.cursor = "pointer";
    });
    
    map.on("mouseleave", "places", function () {
        map.getCanvas().style.cursor = "";
    });

});

');
get_footer(); ?>