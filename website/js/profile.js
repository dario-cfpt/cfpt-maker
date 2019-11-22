function getMaps() {
    let searchParams = new URLSearchParams(window.location.search)
    let param = searchParams.get('id')
    $.ajax({
        type: "GET",
        url: 'http://127.0.0.1:3000/user/' + param,
        success: function(response) {
            console.log(response);
            showMaps(response);
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
                    <a href="play/index.html?id=` + element.id + `">
                    <img src="img/logo.png" class="card-img-top w-100 d-block">
                    <div class="card-body">
                        <h4 class="card-title">` + element.name + `</h4>
                        </a>
                        <p class="card-text"><a href="profile.php?id=` + maps.id + `">` + maps.username + `</a> | ` + element.creationDate.substr(0, 10) + `</p>
                    </div>
                </div>
            </div>
        `);
    });

    maps.MapScore.forEach(element => {
        $('#score').append(`
            <tr>
                <td>
                    <a href="play/index.html?id=` + element.Score.mapId + `">` + element.name + `</a>
                </td>
                <td>
                    ` + element.Score.score + `
                </td>
            </tr>
        `);
    });
    maps.MapRating.forEach(element => {
        $('#rating').append(`
            <div class="col-md-3">
                <div class="card">
                    <a href="play/index.html?id=` + $element.map.id + `">
                    <img src="img/logo.png" class="card-img-top w-100 d-block">
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

$(function() {
    getMaps();
    //e.preventDefault();
});