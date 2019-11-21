function serialize() {
    var myObject = new Object();
    myObject.username = $("input#username").val();
    myObject.password = $("input#password").val();
    return myString
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
            console.log("Status: " + textStatus);
        }
    });
}

$(function() {
    $('form').submit(function(e) {
        sendPost(serialize());
        e.preventDefault();
    });
});