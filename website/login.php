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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.min.js"></script>
    <script src="js/login.js"></script>
    <title>CFPT-Maker</title>
</head>

<body>
    <?php
        include 'nav.php';
    ?>
    <div class="h-100 row align-items-center">
        <form name="login" class="col-4 mx-auto">
            <div class="form-group row" id="info">
            </div>
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">username</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <input id="username" name="username" placeholder="ex. Maxim" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-4 col-form-label">password</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-unlock-alt"></i>
                            </div>
                        </div>
                        <input id="password" name="password" type="password" class="form-control" required="required" aria-describedby="passwordHelpBlock">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-10 col-8">
                    <button class="contact-form  btn btn-primary" name="submit" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>