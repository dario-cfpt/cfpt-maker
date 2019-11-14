function serialize() {
    var myObject = new Object();
    myObject.username = $("input#username").val();
    myObject.password = $("input#password").val();
    var myString = JSON.stringify(myObject);
    return myString
}

function sendPost(result) {
    $.ajax({
        type: "POST",
        url: 'http://127.0.0.1:3000/login',
        data: result,
        success: function() {
            alert("Status: " + success);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
            console.log("Error: " + errorThrown);
        }
    });
}

$(function() {
    $('form').submit(function(e) {
        sendPost(serialize());
        e.preventDefault();
    });
});