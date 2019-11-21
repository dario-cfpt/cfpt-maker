function serialize() {
    var myObject = new Object();

    myObject.assetId = 1;
    myObject.nbCol = $("input#w").val();
    myObject.nbRow = $("input#h").val();
    myObject.mapContent = "[" + mapData + "]";
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
            setTimeout(function() { window.location = "play/game.php"; }, delay);
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

$(function() {
    $('form').submit(function(e) {
        $('#message').remove();
        if (checkMapContent()) {

            sendMap(serialize());
        } else {
            info("you need 1 door, 1 switch and 1 player ! ", "danger");
        }
        e.preventDefault();
    });
});