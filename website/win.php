<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editeur</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
</html>

<script type="text/javascript">

    function serialize() {
        let searchParams = new URLSearchParams(window.location.search)
        var myObject = new Object();
        myObject.mapId = parseInt(searchParams.get('id'));
        myObject.score =  parseInt(searchParams.get('score'));
        myObject.userId = <?=$_SESSION['id']?>;
        return myObject
    }


    function sendData(result){
        $.ajax({
            type: "POST",
            url: 'http://127.0.0.1:3000/score',
            data: result,
            success: function(response) {
                window.location = "mapList.php";
            },
            error: function(textStatus) {
            }
        });
    }

    $(function() {
        sendData(serialize());
    });
</script>