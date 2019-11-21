function CheckPassword(password) {
    $("input#password").removeClass("is-valid");
    $("input#password").removeClass("is-invalid");
    var regex = /^[A-Za-z]\w{7,14}$/;
    if (password.match(regex)) {
        $("input#password").addClass("is-valid");
    } else {
        $("input#password").addClass("is-invalid");
    }
}

function checkEmail(email) {
    $("input#mail").removeClass("is-valid");
    $("input#mail").removeClass("is-invalid");
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (email.match(regex)) {
        $("input#mail").addClass("is-valid");
    } else {
        $("input#mail").addClass("is-invalid");
    }
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
            $("input#password").val('');
            $("input#password-check").val('');
            $("input#password").removeClass("is-valid");
            $("input#password-check").removeClass("is-valid");
            $('#info').append(`
                <div id="alert" class="alert alert-danger" role="alert">
                    The username or password are wrong
                </div>
            `);
        }
    });
}

$(function() {
    $('form').submit(function(e) {
        $("#alert").remove();
        if ($("input#password").val() == $("input#password-check").val()) {
            const user = {};
            user.email = $("input#mail").val().trim();
            user.username = $("input#username").val().trim();
            user.password = $("input#password").val();
            sendPost(user);
        } else {
            $('#info').append(`
                <div id="alert" class="alert alert-danger" role="alert">
                    The passwords must be identical
                </div>
            `);
        }
        e.preventDefault();
    });
});