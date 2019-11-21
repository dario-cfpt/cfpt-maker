<!DOCTYPE html>
<<<<<<< HEAD
<?php
//for test
$_SESSION['userId'] = 1;
?>
<html>
    <head>
        <title>Editeur</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <script src="js/grid.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <body>
        <?php include 'nav.php'; ?>

        <div id="map" class="mx-auto d-block" style="width: 100%;overflow: auto;white-space: nowrap;height: 60%;max-width: 100%;">
        </div> 
        <div class="card d-block mx-auto" id="inventory" style="width: max-content; height: 40%;">
            <div class="card-header">
                Inventory
            </div>
            <div class="card-body">
                <form>
                    <table>
                        <tr>
                            <td><h2>Width</h2></td>
                            <td><h2>Height</h2></td>
                            <td><h2>Nom</h2></td>
                            <td><h2>Texture</h2></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input id="w" onchange="changeSizeW(this.value)"  type="number" value="20"/></td>
                            <td><input id="h" onchange="changeSizeH(this.value)"  type="number" value="20"/></td>
                            <td><input id="name" class="" /></td>
                            <td>
                                <select name="assets" id="asset-select" disabled> 
                                    <option value="1">kenney_redux_64x64</option>
                                </select>
                            </td>
                        <input onchange="drawGrid(mapData)" id="grid" type="checkbox"/><label for="grid" >Afficher la grille</label>
                        <input id="userId" name="userId" type="hidden" value="<?=$_SESSION["id"]?>">
                        <button class="contact-form  btn btn-primary float-right" name="submit" type="submit">Enregistrer la map</button>

                        </tr>
                    </table>
                </form> 
                <div class="d-inline-block">
                    <img  src="../config/Inventory.png" usemap="#panneaux"  alt=""/>
                    <map name="panneaux" id="mapInventory">
                    </map>
                </div>
            </div>
        </div>
        <script>
            var draw = false;

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
                0, 2, 2, 189, 189, 2, 2, 121, 49, "char", 0, 37, 109, 2, 2, 189, 189, 2, 2, 0,
                145, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 133];


            var inventoryItemId = [1, 13, 25, 37, 49, 61, 73, 85, 97, 109, 121, 133, 145, 157, 169, 181,
                2, 14, 189, 167, 71, 70, 12, 96, 95, 22, 34, 94, 72, 188, 11, 0,
                143, 131, "char", 166]


            topLeft = 0;
            topRight = 64;
            bottomRight = 64;
            bottomleft = 0;

            inventoryItemId.forEach(function (item) {
                var area = document.createElement("area");
                area.coords = topLeft + ',' + topRight + ',' + bottomRight + ',' + bottomleft;
                area.shape = "rect";
                area.alt = item;
                area.addEventListener("click", function () {
                    currentBlockId = this.alt;
                });
                mapInventory.appendChild(area);
                topLeft += 64;

                bottomRight += 64;
                if (inventoryItemId.indexOf(item) == 15)
                {
                    topLeft = 0;
                    topRight = 128;
                    bottomRight = 64;
                    bottomleft = 64;
                }
                if (inventoryItemId.indexOf(item) == 31)
                {
                    topLeft = 0;
                    topRight = 192;
                    bottomRight = 64;
                    bottomleft = 128;
                }

            });


            var sizeX = w.value;
            var sizeY = h.value;
            var currentBlockId = 13;

            function changeSizeW(newSize)
            {
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
            function changeSizeH(newSize)
            {
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


            function drawGrid(mapData)
            {
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
                        createImg(tr, i * sizeX + j);
                    }
                    table.append(tr);
                }
                map.appendChild(table);
            }

            function createImg(tr, index)
            {
                value = mapData[index];

                if (value % 12 == 0)
                {
                    width = 11;

                } else
                {
                    width = value % 12 - 1;
                }

                height = Math.ceil((value / 12) - 1);
                var myDiv = document.createElement("td");
                if (value == 0)
                {
                    myDiv.style.backgroundColor = "#19AAE5";
                } else if (value == "char")
                {
                    myDiv.style = 'background:url("../config/character.png")';
                    myDiv.style.backgroundPosition = "bottom";
                    myDiv.style.backgroundRepeat = "no-repeat";
                } else
                {

                    myDiv.style = 'background:url("../config/kenney_redux_64x64.png") -' + width * 64 + 'px -' + height * 64 + 'px; background-size: 768px,1024px;';

                }
                myDiv.style.width = "64px";
                myDiv.style.height = "64px";
                myDiv.style.display = "inline-block";
                if (grid.checked)
                {
                    myDiv.style.border = "solid 1px black";
                    myDiv.style.boxSizing = "border-box";
                }

                myDiv.addEventListener("mousedown", function () {
                    draw = true;

                });
                myDiv.addEventListener("mouseup", function () {
                    draw = false;

                });
                myDiv.addEventListener("mousemove", function () {

                    if (draw)
                    {
                        console.log(index);
                        mapData[index] = currentBlockId;
                        drawGrid(mapData);
                    }
                });
                myDiv.addEventListener("click", function () {

                    console.log(index);
                    mapData[index] = currentBlockId;
                    drawGrid(mapData);

                });
                tr.append(myDiv);
            }

            drawGrid(mapData);

          

            map.scrollTop = 1000;
        </script>
    </body>
</html>
