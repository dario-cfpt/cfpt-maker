<?php
/**
 * Author : CHEVROLET Anthony
 * Date : 21.11.19
 * Version : 1.0
 * Desc : File to create a Map
 */
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://127.0.0.1:3000/map/$id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
));

$response = json_decode(curl_exec($curl));
$err = curl_error($curl);

curl_close($curl);
$map = json_decode('{
    "height": 99999,
    "width": 99999,
    "layers": [
        {
            "data": [],
            "height": 9999999,
            "name": "Tile Layer 1",
            "opacity": 1,
            "type": "tilelayer",
            "visible": true,
            "width": 99999,
            "x": 0,
            "y": 0
        }

    ],
    "nextobjectid": 1,
    "orientation": "orthogonal",
    "renderorder": "right-down",
    "tiledversion": "1.0.3",
    "tileheight": 64,
    "tilesets": [
        {
            "columns": 12,
            "firstgid": 1,
            "image": "undefined",
            "imageheight": 1024,
            "imagewidth": 768,
            "margin": 0,
            "name": "kenney_redux_64x64",
            "spacing": 0,
            "tilecount": 192,
            "tileheight": 64,
            "tileproperties":
                    {},
            "tilepropertytypes":
                    {},

            "tiles":{ },
            "tilewidth": 64
        }],
    "tilewidth": 64,
    "type": "map",
    "version": 1
}');
$map->height = $response->nbRow;
$map->width = $response->nbCol;
$map->layers[0]->width = $response->nbCol;
$map->layers[0]->height = $response->nbRow;
$map->layers[0]->data = json_decode($response->mapContent);
echo json_encode($map);
