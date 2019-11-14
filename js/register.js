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
        success: function (response) {
            console.log(response);
            // TODO: manage response
        },
        error: function (e) {
            console.log(e.responseText);
        }
    });
}

function encodePassword(params) {
    Pbkdf2PasswordEncoder()
    Pbkdf2PasswordEncoder(java.lang.CharSequence secret)
    Pbkdf2PasswordEncoder(java.lang.CharSequence secret, int iterations, int hashWidth)

    Pbkdf2PasswordEncoder encoder = new Pbkdf2PasswordEncoder("secret", 10000, 128);
    String encodedPassword = encoder.encode("UserPassword");
}

$(function () {
    $('form').submit(function (e) {
        if ($("input#password").val() == $("input#password-check").val()) {
            const user = {};
            user.email = $("input#mail").val().trim();
            user.username = $("input#username").val().trim();
            user.password = encodePassword();
            sendPost(user);
        }
        e.preventDefault();
    });
});