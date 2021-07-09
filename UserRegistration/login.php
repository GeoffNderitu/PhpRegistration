<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-6 login-left">
            <h2>Log In</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pass" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-info">Login</button>
            </form>
        </div>
        <div class="col-md-6 login-right">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pass" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-info">Register</button>
            </form>
        </div>
    </div>
    </div>
</div>
</body>
</html>
