function serialize() {
    var myObject = new Object();

    myObject.assetId = 1;
    myObject.nbCol = $("input#w").val();
    myObject.nbRow = $("input#h").val();
    myObject.mapContent = JSON.stringify(mapData);
    myObject.userId = $("input#userId").val();
    myObject.name = $("input#name").val();
    myObject.spawnPosX = "245";
    myObject.spawnPosY = "25";
    return myObject
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
        success: function (response) {
            console.log(response);
        },
        error: function (textStatus) {
            console.log("Status: " + textStatus);
        }
    });
}




btnSub.addEventListener("click", function () {
  if (checkMapContent()) {
            sendMap(serialize());
        }
        else
        {
            console.log("error");
        }
});