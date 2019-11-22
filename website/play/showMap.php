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
                    {
                        "0":
                                {
                                    "collides": true
                                },
                        "1":
                                {
                                    "collides": true
                                },
                        "10":
                                {
                                    "collides": false
                                },
                        "100":
                                {
                                    "collides": true
                                },
                        "101":
                                {
                                    "collides": true
                                },
                        "102":
                                {
                                    "collides": true
                                },
                        "103":
                                {
                                    "collides": true
                                },
                        "104":
                                {
                                    "collides": true,
                                    "type": "switch-up"
                                },
                        "105":
                                {
                                    "collides": false
                                },
                        "106":
                                {
                                    "collides": false
                                },
                        "107":
                                {
                                    "collides": false
                                },
                        "108":
                                {
                                    "collides": true
                                },
                        "109":
                                {
                                    "collides": true
                                },
                        "11":
                                {
                                    "collides": true
                                },
                        "110":
                                {
                                    "collides": true
                                },
                        "111":
                                {
                                    "collides": true
                                },
                        "112":
                                {
                                    "collides": true
                                },
                        "113":
                                {
                                    "collides": true
                                },
                        "114":
                                {
                                    "collides": true
                                },
                        "115":
                                {
                                    "collides": true
                                },
                        "116":
                                {
                                    "collides": false
                                },
                        "117":
                                {
                                    "collides": true
                                },
                        "118":
                                {
                                    "collides": false
                                },
                        "119":
                                {
                                    "collides": false
                                },
                        "12":
                                {
                                    "collides": true
                                },
                        "120":
                                {
                                    "collides": true
                                },
                        "121":
                                {
                                    "collides": true
                                },
                        "122":
                                {
                                    "collides": true
                                },
                        "123":
                                {
                                    "collides": true
                                },
                        "124":
                                {
                                    "collides": true
                                },
                        "125":
                                {
                                    "collides": true
                                },
                        "126":
                                {
                                    "collides": true
                                },
                        "127":
                                {
                                    "collides": false
                                },
                        "128":
                                {
                                    "collides": false
                                },
                        "129":
                                {
                                    "collides": true
                                },
                        "13":
                                {
                                    "collides": true
                                },
                        "130":
                                {
                                    "collides": false
                                },
                        "131":
                                {
                                    "collides": false
                                },
                        "132":
                                {
                                    "collides": true
                                },
                        "133":
                                {
                                    "collides": true
                                },
                        "134":
                                {
                                    "collides": true
                                },
                        "135":
                                {
                                    "collides": true
                                },
                        "136":
                                {
                                    "collides": true
                                },
                        "137":
                                {
                                    "collides": true
                                },
                        "138":
                                {
                                    "collides": true
                                },
                        "139":
                                {
                                    "collides": false
                                },
                        "14":
                                {
                                    "collides": true
                                },
                        "140":
                                {
                                    "collides": false
                                },
                        "141":
                                {
                                    "collides": true
                                },
                        "142":
                                {
                                    "collides": false
                                },
                        "143":
                                {
                                    "collides": false
                                },
                        "144":
                                {
                                    "collides": true
                                },
                        "145":
                                {
                                    "collides": true
                                },
                        "146":
                                {
                                    "collides": true
                                },
                        "147":
                                {
                                    "collides": true
                                },
                        "148":
                                {
                                    "collides": true
                                },
                        "149":
                                {
                                    "collides": true
                                },
                        "15":
                                {
                                    "collides": true
                                },
                        "150":
                                {
                                    "collides": false
                                },
                        "151":
                                {
                                    "collides": false
                                },
                        "152":
                                {
                                    "collides": false
                                },
                        "153":
                                {
                                    "collides": true
                                },
                        "154":
                                {
                                    "collides": false
                                },
                        "155":
                                {
                                    "collides": false
                                },
                        "156":
                                {
                                    "collides": true
                                },
                        "157":
                                {
                                    "collides": true
                                },
                        "158":
                                {
                                    "collides": true
                                },
                        "159":
                                {
                                    "collides": true
                                },
                        "16":
                                {
                                    "collides": true
                                },
                        "160":
                                {
                                    "collides": true
                                },
                        "161":
                                {
                                    "collides": true
                                },
                        "162":
                                {
                                    "collides": false
                                },
                        "163":
                                {
                                    "collides": false
                                },
                        "164":
                                {
                                    "collides": false
                                },
                        "165":
                                {
                                    "collides": false
                                },
                        "166":
                                {
                                    "collides": false
                                },
                        "167":
                                {
                                    "collides": false
                                },
                        "168":
                                {
                                    "collides": true
                                },
                        "169":
                                {
                                    "collides": true
                                },
                        "17":
                                {
                                    "collides": true
                                },
                        "170":
                                {
                                    "collides": true
                                },
                        "171":
                                {
                                    "collides": true
                                },
                        "172":
                                {
                                    "collides": true
                                },
                        "173":
                                {
                                    "collides": true
                                },
                        "174":
                                {
                                    "collides": false
                                },
                        "175":
                                {
                                    "collides": false
                                },
                        "176":
                                {
                                    "collides": false
                                },
                        "177":
                                {
                                    "collides": false
                                },
                        "178":
                                {
                                    "collides": false
                                },
                        "179":
                                {
                                    "collides": false
                                },
                        "18":
                                {
                                    "collides": true
                                },
                        "180":
                                {
                                    "collides": true
                                },
                        "181":
                                {
                                    "collides": true
                                },
                        "182":
                                {
                                    "collides": true
                                },
                        "183":
                                {
                                    "collides": true
                                },
                        "184":
                                {
                                    "collides": true
                                },
                        "185":
                                {
                                    "collides": true
                                },
                        "186":
                                {
                                    "collides": false
                                },
                        "187":
                                {
                                    "collides": false
                                },
                        "188":
                                {
                                    "collides": true,
                                    "type": "spike"
                                },
                        "189":
                                {
                                    "collides": false
                                },
                        "19":
                                {
                                    "collides": true
                                },
                        "190":
                                {
                                    "collides": false
                                },
                        "191":
                                {
                                    "collides": false
                                },
                        "2":
                                {
                                    "collides": true
                                },
                        "20":
                                {
                                    "collides": false
                                },
                        "21":
                                {
                                    "collides": false
                                },
                        "22":
                                {
                                    "collides": false
                                },
                        "23":
                                {
                                    "collides": true
                                },
                        "24":
                                {
                                    "collides": true
                                },
                        "25":
                                {
                                    "collides": true
                                },
                        "26":
                                {
                                    "collides": true
                                },
                        "27":
                                {
                                    "collides": true
                                },
                        "28":
                                {
                                    "collides": true
                                },
                        "29":
                                {
                                    "collides": true
                                },
                        "3":
                                {
                                    "collides": true
                                },
                        "30":
                                {
                                    "collides": true
                                },
                        "31":
                                {
                                    "collides": true
                                },
                        "32":
                                {
                                    "collides": false
                                },
                        "33":
                                {
                                    "collides": false
                                },
                        "34":
                                {
                                    "collides": false
                                },
                        "35":
                                {
                                    "collides": true
                                },
                        "36":
                                {
                                    "collides": true
                                },
                        "37":
                                {
                                    "collides": true
                                },
                        "38":
                                {
                                    "collides": true
                                },
                        "39":
                                {
                                    "collides": true
                                },
                        "4":
                                {
                                    "collides": true
                                },
                        "40":
                                {
                                    "collides": true
                                },
                        "41":
                                {
                                    "collides": true
                                },
                        "42":
                                {
                                    "collides": true
                                },
                        "43":
                                {
                                    "collides": true
                                },
                        "44":
                                {
                                    "collides": false
                                },
                        "45":
                                {
                                    "collides": false
                                },
                        "46":
                                {
                                    "collides": false
                                },
                        "47":
                                {
                                    "collides": true
                                },
                        "48":
                                {
                                    "collides": true
                                },
                        "49":
                                {
                                    "collides": true
                                },
                        "5":
                                {
                                    "collides": true
                                },
                        "50":
                                {
                                    "collides": true
                                },
                        "51":
                                {
                                    "collides": true
                                },
                        "52":
                                {
                                    "collides": true
                                },
                        "53":
                                {
                                    "collides": true
                                },
                        "54":
                                {
                                    "collides": true
                                },
                        "55":
                                {
                                    "collides": true
                                },
                        "56":
                                {
                                    "collides": false
                                },
                        "57":
                                {
                                    "collides": false
                                },
                        "58":
                                {
                                    "collides": false
                                },
                        "59":
                                {
                                    "collides": true
                                },
                        "6":
                                {
                                    "collides": true
                                },
                        "60":
                                {
                                    "collides": true
                                },
                        "61":
                                {
                                    "collides": true
                                },
                        "62":
                                {
                                    "collides": true
                                },
                        "63":
                                {
                                    "collides": true
                                },
                        "64":
                                {
                                    "collides": true
                                },
                        "65":
                                {
                                    "collides": true
                                },
                        "66":
                                {
                                    "collides": true
                                },
                        "67":
                                {
                                    "collides": true
                                },
                        "68":
                                {
                                    "collides": false
                                },
                        "69":
                                {
                                    "collides": false
                                },
                        "7":
                                {
                                    "collides": true
                                },
                        "70":
                                {
                                    "collides": false
                                },
                        "71":
                                {
                                    "collides": true
                                },
                        "72":
                                {
                                    "collides": true
                                },
                        "73":
                                {
                                    "collides": true
                                },
                        "74":
                                {
                                    "collides": true
                                },
                        "75":
                                {
                                    "collides": true
                                },
                        "76":
                                {
                                    "collides": true
                                },
                        "77":
                                {
                                    "collides": true
                                },
                        "78":
                                {
                                    "collides": true
                                },
                        "79":
                                {
                                    "collides": true
                                },
                        "8":
                                {
                                    "collides": false
                                },
                        "80":
                                {
                                    "collides": false
                                },
                        "81":
                                {
                                    "collides": false
                                },
                        "82":
                                {
                                    "collides": false
                                },
                        "83":
                                {
                                    "collides": true
                                },
                        "84":
                                {
                                    "collides": true
                                },
                        "85":
                                {
                                    "collides": true
                                },
                        "86":
                                {
                                    "collides": true
                                },
                        "87":
                                {
                                    "collides": true
                                },
                        "88":
                                {
                                    "collides": true
                                },
                        "89":
                                {
                                    "collides": true
                                },
                        "9":
                                {
                                    "collides": false
                                },
                        "90":
                                {
                                    "collides": true
                                },
                        "91":
                                {
                                    "collides": true
                                },
                        "92":
                                {
                                    "collides": false
                                },
                        "93":
                                {
                                    "collides": false
                                },
                        "94":
                                {
                                    "collides": false
                                },
                        "95":
                                {
                                    "collides": false
                                },
                        "96":
                                {
                                    "collides": true
                                },
                        "97":
                                {
                                    "collides": true
                                },
                        "98":
                                {
                                    "collides": true
                                },
                        "99":
                                {
                                    "collides": true
                                }
                    },
            "tilepropertytypes":
                    {
                        "0":
                                {
                                    "collides": "bool"
                                },
                        "1":
                                {
                                    "collides": "bool"
                                },
                        "10":
                                {
                                    "collides": "bool"
                                },
                        "100":
                                {
                                    "collides": "bool"
                                },
                        "101":
                                {
                                    "collides": "bool"
                                },
                        "102":
                                {
                                    "collides": "bool"
                                },
                        "103":
                                {
                                    "collides": "bool"
                                },
                        "104":
                                {
                                    "collides": "bool",
                                    "type": "string"
                                },
                        "105":
                                {
                                    "collides": "bool"
                                },
                        "106":
                                {
                                    "collides": "bool"
                                },
                        "107":
                                {
                                    "collides": "bool"
                                },
                        "108":
                                {
                                    "collides": "bool"
                                },
                        "109":
                                {
                                    "collides": "bool"
                                },
                        "11":
                                {
                                    "collides": "bool"
                                },
                        "110":
                                {
                                    "collides": "bool"
                                },
                        "111":
                                {
                                    "collides": "bool"
                                },
                        "112":
                                {
                                    "collides": "bool"
                                },
                        "113":
                                {
                                    "collides": "bool"
                                },
                        "114":
                                {
                                    "collides": "bool"
                                },
                        "115":
                                {
                                    "collides": "bool"
                                },
                        "116":
                                {
                                    "collides": "bool"
                                },
                        "117":
                                {
                                    "collides": "bool"
                                },
                        "118":
                                {
                                    "collides": "bool"
                                },
                        "119":
                                {
                                    "collides": "bool"
                                },
                        "12":
                                {
                                    "collides": "bool"
                                },
                        "120":
                                {
                                    "collides": "bool"
                                },
                        "121":
                                {
                                    "collides": "bool"
                                },
                        "122":
                                {
                                    "collides": "bool"
                                },
                        "123":
                                {
                                    "collides": "bool"
                                },
                        "124":
                                {
                                    "collides": "bool"
                                },
                        "125":
                                {
                                    "collides": "bool"
                                },
                        "126":
                                {
                                    "collides": "bool"
                                },
                        "127":
                                {
                                    "collides": "bool"
                                },
                        "128":
                                {
                                    "collides": "bool"
                                },
                        "129":
                                {
                                    "collides": "bool"
                                },
                        "13":
                                {
                                    "collides": "bool"
                                },
                        "130":
                                {
                                    "collides": "bool"
                                },
                        "131":
                                {
                                    "collides": "bool"
                                },
                        "132":
                                {
                                    "collides": "bool"
                                },
                        "133":
                                {
                                    "collides": "bool"
                                },
                        "134":
                                {
                                    "collides": "bool"
                                },
                        "135":
                                {
                                    "collides": "bool"
                                },
                        "136":
                                {
                                    "collides": "bool"
                                },
                        "137":
                                {
                                    "collides": "bool"
                                },
                        "138":
                                {
                                    "collides": "bool"
                                },
                        "139":
                                {
                                    "collides": "bool"
                                },
                        "14":
                                {
                                    "collides": "bool"
                                },
                        "140":
                                {
                                    "collides": "bool"
                                },
                        "141":
                                {
                                    "collides": "bool"
                                },
                        "142":
                                {
                                    "collides": "bool"
                                },
                        "143":
                                {
                                    "collides": "bool"
                                },
                        "144":
                                {
                                    "collides": "bool"
                                },
                        "145":
                                {
                                    "collides": "bool"
                                },
                        "146":
                                {
                                    "collides": "bool"
                                },
                        "147":
                                {
                                    "collides": "bool"
                                },
                        "148":
                                {
                                    "collides": "bool"
                                },
                        "149":
                                {
                                    "collides": "bool"
                                },
                        "15":
                                {
                                    "collides": "bool"
                                },
                        "150":
                                {
                                    "collides": "bool"
                                },
                        "151":
                                {
                                    "collides": "bool"
                                },
                        "152":
                                {
                                    "collides": "bool"
                                },
                        "153":
                                {
                                    "collides": "bool"
                                },
                        "154":
                                {
                                    "collides": "bool"
                                },
                        "155":
                                {
                                    "collides": "bool"
                                },
                        "156":
                                {
                                    "collides": "bool"
                                },
                        "157":
                                {
                                    "collides": "bool"
                                },
                        "158":
                                {
                                    "collides": "bool"
                                },
                        "159":
                                {
                                    "collides": "bool"
                                },
                        "16":
                                {
                                    "collides": "bool"
                                },
                        "160":
                                {
                                    "collides": "bool"
                                },
                        "161":
                                {
                                    "collides": "bool"
                                },
                        "162":
                                {
                                    "collides": "bool"
                                },
                        "163":
                                {
                                    "collides": "bool"
                                },
                        "164":
                                {
                                    "collides": "bool"
                                },
                        "165":
                                {
                                    "collides": "bool"
                                },
                        "166":
                                {
                                    "collides": "bool"
                                },
                        "167":
                                {
                                    "collides": "bool"
                                },
                        "168":
                                {
                                    "collides": "bool"
                                },
                        "169":
                                {
                                    "collides": "bool"
                                },
                        "17":
                                {
                                    "collides": "bool"
                                },
                        "170":
                                {
                                    "collides": "bool"
                                },
                        "171":
                                {
                                    "collides": "bool"
                                },
                        "172":
                                {
                                    "collides": "bool"
                                },
                        "173":
                                {
                                    "collides": "bool"
                                },
                        "174":
                                {
                                    "collides": "bool"
                                },
                        "175":
                                {
                                    "collides": "bool"
                                },
                        "176":
                                {
                                    "collides": "bool"
                                },
                        "177":
                                {
                                    "collides": "bool"
                                },
                        "178":
                                {
                                    "collides": "bool"
                                },
                        "179":
                                {
                                    "collides": "bool"
                                },
                        "18":
                                {
                                    "collides": "bool"
                                },
                        "180":
                                {
                                    "collides": "bool"
                                },
                        "181":
                                {
                                    "collides": "bool"
                                },
                        "182":
                                {
                                    "collides": "bool"
                                },
                        "183":
                                {
                                    "collides": "bool"
                                },
                        "184":
                                {
                                    "collides": "bool"
                                },
                        "185":
                                {
                                    "collides": "bool"
                                },
                        "186":
                                {
                                    "collides": "bool"
                                },
                        "187":
                                {
                                    "collides": "bool"
                                },
                        "188":
                                {
                                    "collides": "bool",
                                    "type": "string"
                                },
                        "189":
                                {
                                    "collides": "bool"
                                },
                        "19":
                                {
                                    "collides": "bool"
                                },
                        "190":
                                {
                                    "collides": "bool"
                                },
                        "191":
                                {
                                    "collides": "bool"
                                },
                        "2":
                                {
                                    "collides": "bool"
                                },
                        "20":
                                {
                                    "collides": "bool"
                                },
                        "21":
                                {
                                    "collides": "bool"
                                },
                        "22":
                                {
                                    "collides": "bool"
                                },
                        "23":
                                {
                                    "collides": "bool"
                                },
                        "24":
                                {
                                    "collides": "bool"
                                },
                        "25":
                                {
                                    "collides": "bool"
                                },
                        "26":
                                {
                                    "collides": "bool"
                                },
                        "27":
                                {
                                    "collides": "bool"
                                },
                        "28":
                                {
                                    "collides": "bool"
                                },
                        "29":
                                {
                                    "collides": "bool"
                                },
                        "3":
                                {
                                    "collides": "bool"
                                },
                        "30":
                                {
                                    "collides": "bool"
                                },
                        "31":
                                {
                                    "collides": "bool"
                                },
                        "32":
                                {
                                    "collides": "bool"
                                },
                        "33":
                                {
                                    "collides": "bool"
                                },
                        "34":
                                {
                                    "collides": "bool"
                                },
                        "35":
                                {
                                    "collides": "bool"
                                },
                        "36":
                                {
                                    "collides": "bool"
                                },
                        "37":
                                {
                                    "collides": "bool"
                                },
                        "38":
                                {
                                    "collides": "bool"
                                },
                        "39":
                                {
                                    "collides": "bool"
                                },
                        "4":
                                {
                                    "collides": "bool"
                                },
                        "40":
                                {
                                    "collides": "bool"
                                },
                        "41":
                                {
                                    "collides": "bool"
                                },
                        "42":
                                {
                                    "collides": "bool"
                                },
                        "43":
                                {
                                    "collides": "bool"
                                },
                        "44":
                                {
                                    "collides": "bool"
                                },
                        "45":
                                {
                                    "collides": "bool"
                                },
                        "46":
                                {
                                    "collides": "bool"
                                },
                        "47":
                                {
                                    "collides": "bool"
                                },
                        "48":
                                {
                                    "collides": "bool"
                                },
                        "49":
                                {
                                    "collides": "bool"
                                },
                        "5":
                                {
                                    "collides": "bool"
                                },
                        "50":
                                {
                                    "collides": "bool"
                                },
                        "51":
                                {
                                    "collides": "bool"
                                },
                        "52":
                                {
                                    "collides": "bool"
                                },
                        "53":
                                {
                                    "collides": "bool"
                                },
                        "54":
                                {
                                    "collides": "bool"
                                },
                        "55":
                                {
                                    "collides": "bool"
                                },
                        "56":
                                {
                                    "collides": "bool"
                                },
                        "57":
                                {
                                    "collides": "bool"
                                },
                        "58":
                                {
                                    "collides": "bool"
                                },
                        "59":
                                {
                                    "collides": "bool"
                                },
                        "6":
                                {
                                    "collides": "bool"
                                },
                        "60":
                                {
                                    "collides": "bool"
                                },
                        "61":
                                {
                                    "collides": "bool"
                                },
                        "62":
                                {
                                    "collides": "bool"
                                },
                        "63":
                                {
                                    "collides": "bool"
                                },
                        "64":
                                {
                                    "collides": "bool"
                                },
                        "65":
                                {
                                    "collides": "bool"
                                },
                        "66":
                                {
                                    "collides": "bool"
                                },
                        "67":
                                {
                                    "collides": "bool"
                                },
                        "68":
                                {
                                    "collides": "bool"
                                },
                        "69":
                                {
                                    "collides": "bool"
                                },
                        "7":
                                {
                                    "collides": "bool"
                                },
                        "70":
                                {
                                    "collides": "bool"
                                },
                        "71":
                                {
                                    "collides": "bool"
                                },
                        "72":
                                {
                                    "collides": "bool"
                                },
                        "73":
                                {
                                    "collides": "bool"
                                },
                        "74":
                                {
                                    "collides": "bool"
                                },
                        "75":
                                {
                                    "collides": "bool"
                                },
                        "76":
                                {
                                    "collides": "bool"
                                },
                        "77":
                                {
                                    "collides": "bool"
                                },
                        "78":
                                {
                                    "collides": "bool"
                                },
                        "79":
                                {
                                    "collides": "bool"
                                },
                        "8":
                                {
                                    "collides": "bool"
                                },
                        "80":
                                {
                                    "collides": "bool"
                                },
                        "81":
                                {
                                    "collides": "bool"
                                },
                        "82":
                                {
                                    "collides": "bool"
                                },
                        "83":
                                {
                                    "collides": "bool"
                                },
                        "84":
                                {
                                    "collides": "bool"
                                },
                        "85":
                                {
                                    "collides": "bool"
                                },
                        "86":
                                {
                                    "collides": "bool"
                                },
                        "87":
                                {
                                    "collides": "bool"
                                },
                        "88":
                                {
                                    "collides": "bool"
                                },
                        "89":
                                {
                                    "collides": "bool"
                                },
                        "9":
                                {
                                    "collides": "bool"
                                },
                        "90":
                                {
                                    "collides": "bool"
                                },
                        "91":
                                {
                                    "collides": "bool"
                                },
                        "92":
                                {
                                    "collides": "bool"
                                },
                        "93":
                                {
                                    "collides": "bool"
                                },
                        "94":
                                {
                                    "collides": "bool"
                                },
                        "95":
                                {
                                    "collides": "bool"
                                },
                        "96":
                                {
                                    "collides": "bool"
                                },
                        "97":
                                {
                                    "collides": "bool"
                                },
                        "98":
                                {
                                    "collides": "bool"
                                },
                        "99":
                                {
                                    "collides": "bool"
                                }
                    },
            "tiles":
                    {
                        "0":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 2,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 6
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 57
                                                            }, 
                                                            {
                                                                "x": 57,
                                                                "y": 64
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 64
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 0
                                                    }],
                                                "opacity": 1,
                                                "properties":
                                                        {
                                                            "collides": false
                                                        },
                                                "propertytypes":
                                                        {
                                                            "collides": "bool"
                                                        },
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "104":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 1
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": -10
                                                            }, 
                                                            {
                                                                "x": 5,
                                                                "y": -14
                                                            }, 
                                                            {
                                                                "x": 10,
                                                                "y": -14
                                                            }, 
                                                            {
                                                                "x": 12,
                                                                "y": -28
                                                            }, 
                                                            {
                                                                "x": 18,
                                                                "y": -37
                                                            }, 
                                                            {
                                                                "x": 27,
                                                                "y": -41
                                                            }, 
                                                            {
                                                                "x": 38,
                                                                "y": -41
                                                            }, 
                                                            {
                                                                "x": 45,
                                                                "y": -37
                                                            }, 
                                                            {
                                                                "x": 52,
                                                                "y": -26
                                                            }, 
                                                            {
                                                                "x": 53,
                                                                "y": -14
                                                            }, 
                                                            {
                                                                "x": 58,
                                                                "y": -14
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -9
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 1
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 63
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "11":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 20,
                                                        "id": 1,
                                                        "name": "",
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 63,
                                                        "x": 0,
                                                        "y": 1
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "12":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "13":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 5,
                                                                "y": -5
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": -5
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 1
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 52
                                                            }, 
                                                            {
                                                                "x": 58,
                                                                "y": 59
                                                            }, 
                                                            {
                                                                "x": 6,
                                                                "y": 59
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 54
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 5
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "132":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 6
                                                            }, 
                                                            {
                                                                "x": 63,
                                                                "y": 27
                                                            }, 
                                                            {
                                                                "x": 51,
                                                                "y": 47
                                                            }, 
                                                            {
                                                                "x": 24,
                                                                "y": 60
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 64
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 0
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "144":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": -5,
                                                                "y": 5
                                                            }, 
                                                            {
                                                                "x": -5,
                                                                "y": 27
                                                            }, 
                                                            {
                                                                "x": 3,
                                                                "y": 43
                                                            }, 
                                                            {
                                                                "x": 26,
                                                                "y": 58
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": 64
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": 0
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 5,
                                                        "y": 0
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "156":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -42
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -57
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": -63
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": -63
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 63
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "16":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 7
                                                            }, 
                                                            {
                                                                "x": 63,
                                                                "y": 26
                                                            }, 
                                                            {
                                                                "x": 54,
                                                                "y": 45
                                                            }, 
                                                            {
                                                                "x": 32,
                                                                "y": 58
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 64
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 0
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "168":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": -17
                                                            }, 
                                                            {
                                                                "x": 5,
                                                                "y": -22
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -22
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 42
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 22
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "180":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 5,
                                                                "y": -5
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": -5
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 1
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 53
                                                            }, 
                                                            {
                                                                "x": 58,
                                                                "y": 59
                                                            }, 
                                                            {
                                                                "x": 6,
                                                                "y": 59
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 54
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 5
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "188":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 10,
                                                                "y": -33
                                                            }, 
                                                            {
                                                                "x": 20,
                                                                "y": -4
                                                            }, 
                                                            {
                                                                "x": 32,
                                                                "y": -33
                                                            }, 
                                                            {
                                                                "x": 43,
                                                                "y": -1
                                                            }, 
                                                            {
                                                                "x": 54,
                                                                "y": -34
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 0
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 64
                                                    }],
                                                "opacity": 1,
                                                "properties":
                                                        {
                                                            "collides": true
                                                        },
                                                "propertytypes":
                                                        {
                                                            "collides": "bool"
                                                        },
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "24":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 5,
                                                                "y": -4
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -4
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 60
                                                            }, 
                                                            {
                                                                "x": 6,
                                                                "y": 60
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 55
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 4
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "3":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": -59,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": -64,
                                                                "y": 5
                                                            }, 
                                                            {
                                                                "x": -64,
                                                                "y": 28
                                                            }, 
                                                            {
                                                                "x": -52,
                                                                "y": 48
                                                            }, 
                                                            {
                                                                "x": -27,
                                                                "y": 60
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 64
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 64,
                                                        "y": 0
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "36":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -64
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 64
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "48":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 63,
                                                                "y": 63
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 63
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 1
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "60":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": -36
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": -36
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -30
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -6
                                                            }, 
                                                            {
                                                                "x": 58,
                                                                "y": 0
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 36
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "7":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "72":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 36,
                                                        "id": 1,
                                                        "name": "",
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 64,
                                                        "x": 0,
                                                        "y": 0
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "84":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 5,
                                                                "y": -4
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": -4
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 32
                                                            }, 
                                                            {
                                                                "x": 6,
                                                                "y": 32
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 28
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 4
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                },
                        "96":
                                {
                                    "objectgroup":
                                            {
                                                "draworder": "index",
                                                "name": "",
                                                "objects": [
                                                    {
                                                        "height": 0,
                                                        "id": 1,
                                                        "name": "",
                                                        "polygon": [
                                                            {
                                                                "x": 0,
                                                                "y": 0
                                                            }, 
                                                            {
                                                                "x": 5,
                                                                "y": -4
                                                            }, 
                                                            {
                                                                "x": 59,
                                                                "y": -4
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 2
                                                            }, 
                                                            {
                                                                "x": 64,
                                                                "y": 26
                                                            }, 
                                                            {
                                                                "x": 58,
                                                                "y": 32
                                                            }, 
                                                            {
                                                                "x": 5,
                                                                "y": 32
                                                            }, 
                                                            {
                                                                "x": 0,
                                                                "y": 28
                                                            }],
                                                        "rotation": 0,
                                                        "type": "",
                                                        "visible": true,
                                                        "width": 0,
                                                        "x": 0,
                                                        "y": 4
                                                    }],
                                                "opacity": 1,
                                                "type": "objectgroup",
                                                "visible": true,
                                                "x": 0,
                                                "y": 0
                                            }
                                }
                    },
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
