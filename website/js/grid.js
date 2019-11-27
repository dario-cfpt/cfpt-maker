/**
 * Author : CHEVROLET Anthony & RYSER Tom
 * Date : 14.11.19
 * Version : 1.1
 * Desc : File with logical of Builder
 */

var draw = false;
var charPosX = 27;
var charPosY = -620;

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
    145, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 133
];


var inventoryItemId = [1, 13, 25, 37, 49, 61, 73, 85, 97, 109, 121, 133, 145, 157, 169, 181,
    2, 14, 189, 167, 71, 70, 12, 96, 95, 22, 34, 94, 72, 188, 11, 0,
    143, 131, "char", 166
]


topLeft = 0;
topRight = 64;
bottomRight = 64;
bottomleft = 0;

inventoryItemId.forEach(function(item) {
    var area = document.createElement("area");
    area.coords = topLeft + ',' + topRight + ',' + bottomRight + ',' + bottomleft;
    area.shape = "rect";
    area.alt = item;
    area.addEventListener("click", function() {
        currentBlockId = this.alt;
    });
    mapInventory.appendChild(area);
    topLeft += 64;

    bottomRight += 64;
    if (inventoryItemId.indexOf(item) == 15) {
        topLeft = 0;
        topRight = 128;
        bottomRight = 64;
        bottomleft = 64;
    }
    if (inventoryItemId.indexOf(item) == 31) {
        topLeft = 0;
        topRight = 192;
        bottomRight = 64;
        bottomleft = 128;
    }

});


var sizeX = w.value;
var sizeY = h.value;
var currentBlockId = 13;

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
            createImg(tr, i * sizeX + j);
        }
        table.append(tr);
    }
    map.appendChild(table);
}

function createImg(tr, index) {
    value = mapData[index];

    if (value % 12 == 0) {
        width = 11;

    } else {
        width = value % 12 - 1;
    }

    height = Math.ceil((value / 12) - 1);
    var myDiv = document.createElement("td");
    if (value == 0) {
        myDiv.style.backgroundColor = "#19AAE5";
    } else if (value == "char") {
        myDiv.style = 'background:url("../config/character.png")';
        myDiv.style.backgroundPosition = "bottom";
        myDiv.style.backgroundRepeat = "no-repeat";
    } else {

        myDiv.style = 'background:url("../config/kenney_redux_64x64.png") -' + width * 64 + 'px -' + height * 64 + 'px; background-size: 768px,1024px;';

    }
    myDiv.style.width = "64px";
    myDiv.style.height = "64px";
    myDiv.style.display = "inline-block";
    if (grid.checked) {
        myDiv.style.border = "solid 1px black";
        myDiv.style.boxSizing = "border-box";
    }

    myDiv.addEventListener("mousedown", function() {
        draw = true;

    });
    myDiv.addEventListener("mouseup", function() {
        draw = false;

    });
    myDiv.addEventListener("mousemove", function() {

        if (draw) {
            if (currentBlockId != "char") {
                console.log(index);
                mapData[index] = currentBlockId;
                drawGrid(mapData);

            }
        }
    });
    myDiv.addEventListener("click", function(e) {

        if (currentBlockId == "char") {
            if ($.inArray("char", mapData) !== -1) {
                console.log("oops");
            } else {
                charPosX = $(this).position().left;
                charPosY = $(this).position().top;
                console.log(charPosX);
                console.log(charPosY);
                mapData[index] = currentBlockId;
                drawGrid(mapData);
            }
        } else {
            console.log(index);
            mapData[index] = parseInt(currentBlockId, 10);
            drawGrid(mapData);
        }

    });
    myDiv.addEventListener("click", function() {

        console.log(index);
        if (currentBlockId == "char") {
            mapData[index] = currentBlockId;
        } else {
            mapData[index] = parseInt(currentBlockId);
        }
        drawGrid(mapData);

    });

    tr.append(myDiv);
}

drawGrid(mapData);



map.scrollTop = 1000;

//-----------------------------------------------------------------------------
function serialize() {
    var myObject = new Object();

    myObject.assetId = 1;
    myObject.nbCol = $("input#w").val();
    myObject.nbRow = $("input#h").val();
    myObject.mapContent = JSON.stringify(mapData);
    myObject.userId = $("input#userId").val();
    myObject.name = $("input#name").val();
    myObject.spawnPosX = charPosX;
    myObject.spawnPosY = charPosY;
    return myObject
}

function getPlayerPosition() {
    mapData
}

function checkMapContent() {
    if (mapData.includes(166) && mapData.includes(143) && mapData.includes(131) && mapData.includes("char")) {
        if (count(mapData)) {
            return true
        }
    }
}

function count(arr) {
    var counts = {};
    for (var i = 0; i < arr.length; i++) {
        var num = arr[i];
        counts[num] = counts[num] ? counts[num] + 1 : 1;
    }
    console.log(counts);
    if (counts[166] == 1 && counts[143] == 1 && counts[131] == 1 && counts["char"] == 1) {
        return true
    }
}

function sendMap(result) {
    $.ajax({
        type: "POST",
        url: 'http://127.0.0.1:3000/map',
        data: result,
        success: function(response) {
            info("the map has been successfully saved, you will be redirected to play on this map", "success");
            var delay = 3000;
            setTimeout(function() {
                window.location = "play/index.html?id=" + response.id;
            }, delay);
        },
        error: function(textStatus) {
            info("something went wrong, have you filled in all the fields ?", "danger");
        }
    });
}

function info(msg, type) {
    $('#info').append(`
        <div id="message" class="alert alert-` + type + `" role="alert">
            ` + msg + `
        </div>
    `);
}


btnSub.addEventListener("click", function(e) {
    if (checkMapContent()) {
        sendMap(serialize());
    } else {
        info("you need 1 door, 1 switch and 1 player ! ", "danger");
    }
    e.preventDefault();
});