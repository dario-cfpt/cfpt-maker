function getMaps() {
    $.ajax({
        type: "GET",
        url: 'http://127.0.0.1:3000/map/all',
        success: function(response) {
            showMaps(response);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
        }
    });
}

function showMaps(response) {
    response.forEach(element => {
        $('#maps').append(`
            <div class="col-md-3">
                <div class="card">
                    <a href="play/index.html?id=` + element.id + `">
                    <img src="img/logo.png" class="card-img-top w-100 d-block">
                    <div class="card-body">
                        <h4 class="card-title">` + element.name + `</h4>
                        </a>
                        <p class="card-text"><a href="profile.php?id=` + element.User.id + `">` + element.User.username + `</a> | ` + element.creationDate.substr(0, 10) + `</p>
                    </div>
                </div>
            </div>
        `);
    });
}

$(function() {
    getMaps();
});