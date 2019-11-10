function checkPassword(str) {
    // at least one number, one lowercase and one uppercase letter
    // at least six characters
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}/;
    return re.test(str);
}

function serialize() {
    var myObject = new Object();
    myObject.email = $("input#mail").val();
    myObject.username = $("input#username").val();
    myObject.password = $("input#password").val();
    var myString = JSON.stringify(myObject);
    return myString
}

function sendPost(result) {
    $.ajax({
        type: "POST",
        url: 'http://127.0.0.1:3000/user',
        data: result,
        success: function() {
            alert("Status: " + success);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);
            console.log("Status: " + textStatus);
            console.log("Error: " + errorThrown);
        }
    });
}

$(function() {
    $('form').submit(function(e) {
        if ($("input#password").val() == $("input#password-check").val()) {
            sendPost(serialize());
        }
        e.preventDefault();
    });
});