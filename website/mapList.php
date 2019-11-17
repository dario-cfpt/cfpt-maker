<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <title>CFPT-Maker</title>
</head>

<body>
    <?php
        include 'nav.php';
    ?>
    <div style="margin: 20px;">
        <div class="container">
            <div class="row">
                <?php
                    for ($i=0; $i < 20; $i++) { 
                        echo'
                                <div class="col-md-3">
                                    <div class="card">
                                        <a href="#">
                                            <img class="card-img-top w-100 d-block" style="height: 100px;">
                                            <div class="card-body">
                                                <h4 class="card-title">My first map</h4>
                                                </a>
                                                <p class="card-text"><a href="#">Tom ryser</a> | 14.11.2019</p>
                                            </div>
                                    </div>
                                </div>
                        ';
                    }
                ?> 
            </div>
          </div>
        </div>
    </div>
</body>

</html>