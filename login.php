<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="style-form">
        <form action="./login_backend.php" method="post" class="style-form-inside">
            <div class="mb-3">
                <label for="login-enrollment" class="form-label">Enrollment No</label>
                <input type="text" name="enrollment" class="form-control" id="login-enrollment">
            </div>
            <div class="mb-3">
                <label for="login-pass" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="login-pass">
            </div>
            <button type="submit" class="btn btn-primary">LOGIN</button>
        </form>
    </div>
</body>

</html>