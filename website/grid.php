<?php if (isset($_SESSION["id"])) {
    header('Location: login.php');   
} ?>
<!DOCTYPE html>
<!--
/**
 * Author : CHEVROLET Anthony
 * Date : 14.11.19
 * Version : 1.0
 * Desc : File view for builder
 */
-->
<html>
    <head>
        <title>Editeur</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <body>
        <?php include 'nav.php'; ?>
        <div id="map" class="mx-auto d-block" style="width: 100%;overflow: auto;white-space: nowrap;height: 60%;max-width: 100%;"></div> 
        <div class="card d-block mx-auto" id="inventory" style="width: max-content; height: 40%;">
            <div class="card-header">
                Inventory
            </div>
            <div class="card-body">
                <div id="info"></div>
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
                            <button id="btnSub" class="contact-form  btn btn-primary float-right" name="submit" type="submit">Enregistrer la map</button>
                        </tr>
                    </table>
                </form> 
                <div class="d-inline-block">
                    <img  src="../config/Inventory.png" usemap="#panneaux"  alt=""/>
                    <map name="panneaux" id="mapInventory"></map>
                </div>
            </div>
        </div>
        <script src="js/grid.js"></script>
    </body>
</html>
