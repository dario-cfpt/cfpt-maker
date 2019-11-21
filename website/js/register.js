function checkPassword(str) {
    // at least one number, one lowercase and one uppercase letter
    // at least six characters
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}/;
    return re.test(str);
}

function sendPost(user) {
    $.ajax({
        type: "POST",
        url: 'http://127.0.0.1:3000/user',
        data: user,
        success: function(response) {
            location.href = "session.php?id=" + response.id + "&username=" + response.username + ""
        },
        error: function(e) {
            console.log(e.responseText);
        }
    });
}

$(function() {
    $('form').submit(function(e) {
        if ($("input#password").val() == $("input#password-check").val()) {
            const user = {};
            user.email = $("input#mail").val().trim();
            user.username = $("input#username").val().trim();
            user.password = $("input#password").val();
            sendPost(user);
        }
        e.preventDefault();
    });
});