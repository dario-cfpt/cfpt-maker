<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php
session_start();
//for test
$_SESSION['userId'] = 1;
?>
<head>
    <title>Editeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <script src="js/mapCreator.js"></script>
</head>

<body>
    <?php include 'nav.php'; ?>
    <label for="mapName">nom de la map</label>
    <input type="text" id="mapName" value="my first map" />

    <label for="w">largeur</label>
    <input type="number" id="w" onchange="changeSizeW(this.value)" value="20" />

    <label for="h">hauteur</label>
    <input type="number" id="h" onchange="changeSizeH(this.value)" value="20" />
    
    <input type="hidden" id="userId" value="<?= $_SESSION['userId']?>" />
    
    <label for="asset-select">Choisissez une texture</label>
    <select name="assets" id="asset-select" disabled> 
        <option value="1">kenney_redux_64x64</option>
    </select>
    <form><button class="contact-form  btn btn-primary" name="submit" type="submit">Enregistrer la map</button></form>
    <div id="map">
    </div>
    <script>
        var mapData = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            169, 13, 13, 0, 0, 0, 0, 0, 131, 0, 0, 0, 0, 0, 0, 0, 0, 13, 13, 157,
            0, 2, 2, 0, 0, 0, 0, 0, 143, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0,
            0, 2, 2, 0, 0, 0, 0, 85, 73, 73, 73, 73, 61, 0, 0, 0, 0, 2, 2, 0,
            0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0,
            0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0,
            0, 2, 2, 0, 0, 166, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0,
            0, 2, 2, 0, 0, 13, 13, 49, 0, 0, 0, 0, 37, 13, 13, 0, 0, 2, 2, 0,
            0, 2, 2, 189, 189, 2, 2, 121, 49, 0, 0, 37, 109, 2, 2, 189, 189, 2, 2, 0,
            145, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 133
        ];


        var sizeX = w.value;
        var sizeY = h.value;
        var asset = "../config/kenney_redux_64x64.png";
        function changeSizeW(newSize) {
            if (newSize > parseInt(sizeX)) //agrandisement
            {
                console.log("ag")
                for (var i = 1; i <= sizeY; i++) {
                    mapData.splice(i * newSize - 1, 0, "0");
                    //console.log(i * newSize - 1);
                }
            } else //RETRECICEMENT
            {
                console.log("ret")
                for (var i = 1; i <= sizeY + 1; i++) {
                    mapData.splice(i * newSize, 1);
                    //console.log(newSize);
                }
            }
            drawGrid(mapData);

        }

        function changeSizeH(newSize) {
            if (newSize > parseInt(sizeY)) //agrandisement
            {
                console.log("ag")
                for (var i = 1; i <= sizeX; i++) {
                    mapData.push(0);
                }
            } else //RETRECICEMENT
            {
                console.log("ret")
                mapData.splice(mapData.length - 1 - sizeX, sizeX);
            }
            drawGrid(mapData);

        }


        function drawGrid(mapData) {
            sizeX = w.value;
            sizeY = h.value;

            map.innerHTML = "";
            map.style.width = "max-content";
            var table = document.createElement("table");
            table.style.borderCollapse = "collapse"
            table.style.backgroundColor = "#19AAE5";
            for (var i = 0; i < sizeY; i++) { //Ligne
                var tr = document.createElement("tr");
                for (var j = 0; j < sizeX; j++) { //col
                    createImg(tr, mapData[i * sizeX + j]);
                }
                table.append(tr);
            }
            map.appendChild(table);
        }

        function createImg(tr, value) {
            //  console.log(value);
            height = parseInt(value / 12);
            width = value % 12 - 1;

            var myDiv = document.createElement("td");
            if (value == 0) {
                myDiv.style.backgroundColor = "#19AAE5";
            } else {
                myDiv.style = 'background:url("'+asset+'") -' + width * 64 + 'px -' + height * 64 + 'px; background-size: 768px,1024px;';

            }
            myDiv.style.width = "64px";
            myDiv.style.height = "64px";
            myDiv.style.display = "inline-block";
            myDiv.style.border = "solid 1px black";
            myDiv.style.boxSizing = "border-box";
            myDiv.addEventListener("click", function() {
                updateImg(id);
            });
            tr.append(myDiv);
        }
        // A chaque clique on appel le service web pour changer une case et on refresh toute la map
        function updateImg(id) {
            console.log(id);
        }

        drawGrid(mapData);
    </script>
</body>

</html>