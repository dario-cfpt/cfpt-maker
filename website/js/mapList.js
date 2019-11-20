function getMaps() {
    $.ajax({
        type: "GET",
        url: 'http://127.0.0.1:3000/map/all',
        success: function(response) {
            console.log("Status: " + textStatus);
            //showMaps($response);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
        }
    });
}

function showMaps(response) {
    response.forEach(element => {
        $(#maps).append(`
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

$(function() {
    getMaps();
    e.preventDefault();
});