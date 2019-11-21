function getMaps() {
    let searchParams = new URLSearchParams(window.location.search)
    let param = searchParams.get('id')
    $.ajax({
        type: "GET",
        url: 'http://127.0.0.1:3000/user/' + param,
        success: function(response) {
            console.log(response);
            showMaps(response);
            fillProfile(response);
        },
        error: function(response) {
            console.log(response);
        }
    });
}

function showMaps(maps) {
    console.log("showingMaps")
    maps.Maps.forEach(element => {
        $('#madeBy').append(`
            <div class="col-md-3">
                <div class="card">
                    <a href="play/load.php?id=` + element.id + `">
                    <img class="card-img-top w-100 d-block" style="height: 100px;">
                    <div class="card-body">
                        <h4 class="card-title">` + element.name + `</h4>
                        </a>
                        <p class="card-text"><a href="profile.php?id=` + maps.id + `">` + maps.username + `</a> | ` + element.creationDate + `</p>
                    </div>
                </div>
            </div>
        `);
    });

    maps.MapScore.forEach(element => {
        $('#score').append(`
            <div class="row">
                <div class="col">
                    <a href="play/load.php?id=` + element.Score.mapId + `">mapName: ` + element.name + `</a>
                </div>
                <div class="col">
                    <p>Score: ` + element.Score.score + `</p>
                </div>
            </div>
        `);
    });
    maps.MapRating.forEach(element => {
        $('#rating').append(`
            <div class="col-md-3">
                <div class="card">
                    <a href="play/load.php?id=` + $element.map.id + `">
                    <img class="card-img-top w-100 d-block" style="height: 100px;">
                    <div class="card-body">
                        <h4 class="card-title">` + $element.map.name + `</h4>
                        </a>
                        <p class="card-text"><a href="profile.php?id=` + $element.user.id + `">` + $element.user.username + `</a> | ` + $element.map.creationDate + `</p>
                    </div>
                </div>
            </div>
        `);
    });
}

function fillProfile(user) {
    $('#userName').append("Username: " + user.username);
}

$(function() {
    getMaps();
    //e.preventDefault();
});