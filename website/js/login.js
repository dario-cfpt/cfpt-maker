function serialize() {
    var myObject = new Object();
    myObject.username = $("input#username").val();
    myObject.password = $("input#password").val();
    return myObject
}

function sendPost(result) {
    $.ajax({
        type: "POST",
        url: 'http://127.0.0.1:3000/login',
        data: result,
        success: function(response) {
            location.href = "session.php?id=" + response.id + "&username=" + response.username + ""
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            $("input#password").val('');
            $('#info').append(`
                <div class="alert alert-danger" role="alert">
                    The username or password are wrong
                </div>
            `);
        }
    });
}

$(function() {
    $('form').submit(function(e) {
        sendPost(serialize());
        e.preventDefault();
    });
});